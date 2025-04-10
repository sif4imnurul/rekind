<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\File;

class BukuController extends Controller
{
    // Tambahkan konstanta untuk default pagination
    const DEFAULT_PER_PAGE_LIST = 12;
    const DEFAULT_PER_PAGE_GRID = 12;

    public function list(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');
        $books = ProdukModel::where('kategori', 'buku');
        
        // Tambahkan pencarian jika ada
        if (!empty($search)) {
            $books = $books->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }
        
        // Apply sorting based on the parameter
        switch ($sort) {
            case 'terlama':
                $books = $books->orderBy('created_at', 'asc');
                break;
            case 'a-z':
                $books = $books->orderBy('nama', 'asc');
                break;
            case 'z-a':
                $books = $books->orderBy('nama', 'desc');
                break;
            case 'terbaru':
            default:
                $books = $books->orderBy('created_at', 'desc');
                break;
        }
        
        $books = $books->paginate(self::DEFAULT_PER_PAGE_LIST)->withQueryString();
        
        $this->processBookImages($books);
        
        // Simpan view type ke session
        $request->session()->put('buku_view_type', 'list');
        
        return view('pages.reference.buku.list', compact('books', 'sort', 'search'));
    }
    
    public function grid(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');
        $perPage = $request->get('perPage', self::DEFAULT_PER_PAGE_GRID);
        
        $query = ProdukModel::where('kategori', 'buku');
        
        // Tambahkan pencarian jika ada
        if (!empty($search)) {
            $query = $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }
        
        // Apply sorting
        switch ($sort) {
            case 'terlama':
                $query->orderBy('created_at', 'asc');
                break;
            case 'a-z':
                $query->orderBy('nama', 'asc');
                break;
            case 'z-a':
                $query->orderBy('nama', 'desc');
                break;
            case 'terbaru':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }
        
        $books = $query->paginate($perPage)->withQueryString();
        
        $this->processBookImages($books);
        
        // Simpan view type ke session
        $request->session()->put('buku_view_type', 'grid');
        // Simpan preferensi pagination ke session
        $request->session()->put('buku_per_page', $perPage);
        
        return view('pages.reference.buku.grid', [
            'books' => $books,
            'sort' => $sort,
            'search' => $search,
            'perPage' => $perPage
        ]);
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $sort = $request->get('sort', 'terbaru');
        $viewType = $request->get('view_type', $request->session()->get('buku_view_type', 'grid'));
        
        // Tentukan perPage berdasarkan view type
        $defaultPerPage = ($viewType == 'list') ? self::DEFAULT_PER_PAGE_LIST : self::DEFAULT_PER_PAGE_GRID;
        $perPage = $request->get('perPage', $request->session()->get('buku_per_page', $defaultPerPage));
        
        $query = ProdukModel::where('kategori', 'buku')
                    ->where(function($q) use ($search) {
                        $q->where('nama', 'like', '%' . $search . '%')
                          ->orWhere('deskripsi', 'like', '%' . $search . '%');
                    });
        
        // Apply sorting
        switch ($sort) {
            case 'terlama':
                $query = $query->orderBy('created_at', 'asc');
                break;
            case 'a-z':
                $query = $query->orderBy('nama', 'asc');
                break;
            case 'z-a':
                $query = $query->orderBy('nama', 'desc');
                break;
            case 'terbaru':
            default:
                $query = $query->orderBy('created_at', 'desc');
                break;
        }
        
        $books = $query->paginate($perPage)->withQueryString();
        
        $this->processBookImages($books);
        
        if ($request->ajax()) {
            // Untuk request AJAX, tentukan partial yang akan dirender berdasarkan viewType
            $partial = ($viewType == 'list') ? 'pages.reference.buku.partials.book-list' : 'pages.reference.buku.partials.book-cards';
            
            return response()->json([
                'books' => $books,
                'html' => view($partial, compact('books', 'search', 'sort'))->render()
            ]);
        }
        
        // Arahkan ke view yang sesuai berdasarkan session atau parameter
        if ($viewType == 'list') {
            return view('pages.reference.buku.list', compact('books', 'search', 'sort'));
        } else {
            // Simpan preferensi pagination ke session untuk grid view
            $request->session()->put('buku_per_page', $perPage);
            return view('pages.reference.buku.grid', compact('books', 'search', 'sort', 'perPage'));
        }
    }
    
    private function processBookImages($books)
    {
        $fallbackImages = ['book-1.jpg', 'book-2.jpg', 'book-3.jpg', 'book-4.jpg'];
        
        foreach ($books as $book) {
            $imagePath = public_path('img/' . $book->foto);
            
            if (!File::exists($imagePath)) {
                $randomIndex = array_rand($fallbackImages);
                $book->display_image = $fallbackImages[$randomIndex];
            } else {
                $book->display_image = $book->foto;
            }
        }
        
        return $books;
    }
}