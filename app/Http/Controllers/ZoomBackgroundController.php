<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ZoomBackgroundController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');

        // Query untuk zoom background
        $query = ProdukModel::where('kategori', 'zoom_background');

        // Filter pencarian
        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%'.$search.'%')
                  ->orWhere('deskripsi', 'like', '%'.$search.'%');
            });
        }

        // Sorting
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

        // Pagination dengan 12 item per halaman
        $items = $query->paginate(12)->withQueryString();

        // Response untuk AJAX request
        if ($request->ajax()) {
            return response()->json([
                'items' => $items,
                'html' => view('pages.picture.background-zoom.partials.items', compact('items'))->render()
            ]);
        }

        // Return view biasa
        return view('pages.picture.background-zoom.index', [
            'items' => $items,
            'sort' => $sort,
            'search' => $search
        ]);
    }
}