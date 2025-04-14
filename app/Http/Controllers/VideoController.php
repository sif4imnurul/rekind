<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class VideoController extends Controller
{
    public function index()
    {
        $videos = ProdukModel::where('kategori', 'dokum_video')->get();
        return view('pages.picture.dokumentasi.video.index', compact('videos'));
    }
}
