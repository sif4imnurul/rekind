<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $buku = ProdukModel::where('kategori', 'buku')->get();
        $template = ProdukModel::where('kategori', 'template_presentasi')->get();
        return view('pages.reference.company-profile.index', compact('buku', 'template'));
    }
}
