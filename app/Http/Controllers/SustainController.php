<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class SustainController extends Controller
{
    public function grid(Request $request)
    {
        $query = ProdukModel::where('kategori', 'laporanS');
        
        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhereYear('created_at', 'like', "%{$search}%");
            });
        }

        // Sort functionality
        $sort = $request->get('sort', 'newest'); // default to newest
        if ($sort === 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $sustainReports = $query->paginate(12);
        return view('pages.reference.report.sustain.grid', compact('sustainReports'));
    }

    public function list(Request $request)
    {
        $query = ProdukModel::where('kategori', 'laporanS');
        
        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhereYear('created_at', 'like', "%{$search}%");
            });
        }

        // Sort functionality
        $sort = $request->get('sort', 'newest'); // default to newest
        if ($sort === 'oldest') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $sustainReports = $query->paginate(12);
        return view('pages.reference.report.sustain.list', compact('sustainReports'));
    }
}