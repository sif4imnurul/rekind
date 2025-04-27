<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $buku = ProdukModel::where('kategori', 'buku')->paginate(3);
        $template = ProdukModel::where('kategori', 'template_presentasi')->paginate(3);
        return view('pages.reference.company-profile.index', compact('buku', 'template'));
    }
}
