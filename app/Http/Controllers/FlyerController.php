<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class FlyerController extends Controller
{
    // Default pagination constant
    const DEFAULT_PER_PAGE = 12;

    public function index(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');
        $perPage = $request->get('perPage', self::DEFAULT_PER_PAGE);
        
        $query = ProdukModel::where('kategori', 'flyer');
        
        // Add search functionality if search parameter exists
        if (!empty($search)) {
            $query = $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }
        
        // Apply sorting based on the parameter
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
        
        $flyers = $query->paginate($perPage)->withQueryString();
        
        return view('pages.picture.flyer-ucapan.index', [
            'flyers' => $flyers,
            'sort' => $sort,
            'search' => $search,
            'perPage' => $perPage
        ]);
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $sort = $request->get('sort', 'terbaru');
        $perPage = $request->get('perPage', self::DEFAULT_PER_PAGE);
        
        $query = ProdukModel::where('kategori', 'flyer')
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
        
        $flyers = $query->paginate($perPage)->withQueryString();
        
        if ($request->ajax()) {
            return response()->json([
                'flyers' => $flyers,
                'html' => view('pages.picture.flyer-ucapan.partials.flyer-cards', compact('flyers', 'search', 'sort'))->render()
            ]);
        }
        
        return view('pages.picture.flyer-ucapan.index', compact('flyers', 'search', 'sort', 'perPage'));
    }
}