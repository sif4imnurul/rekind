<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class PresentasiController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');

        $query = ProdukModel::where('kategori', 'template_presentasi');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }

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

        $items = $query->paginate(12)->withQueryString();

        // If AJAX request, return JSON response
        if ($request->ajax()) {
            return response()->json([
                'items' => $items,
                'html' => view('pages.reference.presentasi.partials.items', compact('items'))->render()
            ]);
        }

        // Regular request
        return view('pages.reference.presentasi.index', compact('items', 'sort', 'search'));
    }
}