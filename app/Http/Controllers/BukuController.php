<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\File;

class BukuController extends Controller
{
    // Tambahkan konstanta untuk default pagination
    const DEFAULT_PER_PAGE_LIST = 3;
    const DEFAULT_PER_PAGE_GRID = 12;

    public function list(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $books = ProdukModel::where('kategori', 'buku');
        
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
        
        return view('pages.reference.buku.list', compact('books', 'sort'));
    }
    
    public function grid(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $perPage = $request->get('perPage', self::DEFAULT_PER_PAGE_GRID);
        
        $query = ProdukModel::where('kategori', 'buku');
        
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
        
        return view('pages.reference.buku.grid', [
            'books' => $books,
            'sort' => $sort,
            'search' => $request->get('search'),
            'perPage' => $perPage
        ]);
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $sort = $request->get('sort', 'terbaru');
        // Ambil perPage dari request atau gunakan default dari view sebelumnya
        $perPage = $request->get('perPage', $request->session()->get('buku_per_page', self::DEFAULT_PER_PAGE_GRID));
        
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
            return response()->json([
                'books' => $books,
                'html' => view('pages.reference.buku.partials.book-cards', compact('books', 'search', 'sort'))->render()
            ]);
        }
        
        // Simpan preferensi pagination ke session
        $request->session()->put('buku_per_page', $perPage);
        
        return view('pages.reference.buku.grid', compact('books', 'search', 'sort', 'perPage'));
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