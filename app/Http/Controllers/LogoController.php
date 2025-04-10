<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class LogoController extends Controller
{
    public function index()
    {
        $logos = ProdukModel::where('kategori', 'logo')->get();
        return view('pages.picture.logo.index', compact('logos'));
    }
}