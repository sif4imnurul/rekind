<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\ClientData;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah foto (produk dengan tipe image)
        $countFoto = ProdukModel::where('tipe', 'image')->count();
        
        // Hitung jumlah video
        $countVideo = ProdukModel::where('tipe', 'video')->count();
        
        // Hitung jumlah twibbon
        $countTwibbon = ProdukModel::where('kategori', 'twibbon')->count();
        
        // Hitung jumlah client
        $countClient = ClientData::count();
        
        // Ambil 3 update terbaru
        $recentUpdates = ProdukModel::orderBy('created_at', 'desc')
                                ->take(3)
                                ->get();
        
        return view('admin.dashboard.index', compact(
            'countFoto', 
            'countVideo', 
            'countTwibbon', 
            'countClient',
            'recentUpdates'
        ));
    }
}
