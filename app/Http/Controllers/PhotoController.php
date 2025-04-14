<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = ProdukModel::where('kategori', 'dokum_foto')->get();
        return view('pages.picture.dokumentasi.photo.index', compact('photos'));
    }
}
