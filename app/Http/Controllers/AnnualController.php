<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class AnnualController extends Controller
{
    public function grid()
    {
        $annualReports = ProdukModel::where('kategori', 'laporanA')->get();
        return view('pages.reference.report.annual.grid', compact('annualReports'));
    }

    public function list()
    {
        $annualReports = ProdukModel::where('kategori', 'laporanA')->get();
        return view('pages.reference.report.annual.list', compact('annualReports'));
    }
}
