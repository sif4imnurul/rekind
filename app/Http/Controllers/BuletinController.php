<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\File;

class BuletinController extends Controller
{
    // Tambahkan konstanta untuk default pagination
    const DEFAULT_PER_PAGE_LIST = 12;
    const DEFAULT_PER_PAGE_GRID = 12;

    public function list(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');
        $bulletins = ProdukModel::where('kategori', 'buletin');
        
        // Tambahkan pencarian jika ada
        if (!empty($search)) {
            $bulletins = $bulletins->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }
        
        // Apply sorting based on the parameter
        switch ($sort) {
            case 'terlama':
                $bulletins = $bulletins->orderBy('created_at', 'asc');
                break;
            case 'a-z':
                $bulletins = $bulletins->orderBy('nama', 'asc');
                break;
            case 'z-a':
                $bulletins = $bulletins->orderBy('nama', 'desc');
                break;
            case 'terbaru':
            default:
                $bulletins = $bulletins->orderBy('created_at', 'desc');
                break;
        }
        
        $bulletins = $bulletins->paginate(self::DEFAULT_PER_PAGE_LIST)->withQueryString();
        
        $this->processBuletinImages($bulletins);
        
        // Simpan view type ke session
        $request->session()->put('buletin_view_type', 'list');
        
        return view('pages.reference.buletin.list', compact('bulletins', 'sort', 'search'));
    }
    
    public function grid(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');
        $perPage = $request->get('perPage', self::DEFAULT_PER_PAGE_GRID);
        
        $query = ProdukModel::where('kategori', 'buletin');
        
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
        
        $bulletins = $query->paginate($perPage)->withQueryString();
        
        $this->processBuletinImages($bulletins);
        
        // Simpan view type ke session
        $request->session()->put('buletin_view_type', 'grid');
        // Simpan preferensi pagination ke session
        $request->session()->put('buletin_per_page', $perPage);
        
        return view('pages.reference.buletin.grid', [
            'bulletins' => $bulletins,
            'sort' => $sort,
            'search' => $search,
            'perPage' => $perPage
        ]);
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $sort = $request->get('sort', 'terbaru');
        $viewType = $request->get('view_type', $request->session()->get('buletin_view_type', 'grid'));
        
        // Tentukan perPage berdasarkan view type
        $defaultPerPage = ($viewType == 'list') ? self::DEFAULT_PER_PAGE_LIST : self::DEFAULT_PER_PAGE_GRID;
        $perPage = $request->get('perPage', $request->session()->get('buletin_per_page', $defaultPerPage));
        
        $query = ProdukModel::where('kategori', 'buletin')
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
        
        $bulletins = $query->paginate($perPage)->withQueryString();
        
        $this->processBuletinImages($bulletins);
        
        if ($request->ajax()) {
            // Untuk request AJAX, tentukan partial yang akan dirender berdasarkan viewType
            $partial = ($viewType == 'list') ? 'pages.reference.buletin.partials.buletin-list' : 'pages.reference.buletin.partials.buletin-cards';
            
            return response()->json([
                'bulletins' => $bulletins,
                'html' => view($partial, compact('bulletins', 'search', 'sort'))->render()
            ]);
        }
        
        // Arahkan ke view yang sesuai berdasarkan session atau parameter
        if ($viewType == 'list') {
            return view('pages.reference.buletin.list', compact('bulletins', 'search', 'sort'));
        } else {
            // Simpan preferensi pagination ke session untuk grid view
            $request->session()->put('buletin_per_page', $perPage);
            return view('pages.reference.buletin.grid', compact('bulletins', 'search', 'sort', 'perPage'));
        }
    }
    
    private function processBuletinImages($bulletins)
    {
        $fallbackImages = ['book-1.jpg', 'book-2.jpg', 'book-3.jpg', 'book-4.jpg'];
        
        foreach ($bulletins as $buletin) {
            $imagePath = public_path('img/' . $buletin->foto);
            
            if (!File::exists($imagePath)) {
                $randomIndex = array_rand($fallbackImages);
                $buletin->display_image = $fallbackImages[$randomIndex];
            } else {
                $buletin->display_image = $buletin->foto;
            }
        }
        
        return $bulletins;
    }
}