<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class SustainController extends Controller
{
    public function grid()
    {
        $sustainReports = ProdukModel::where('kategori', 'laporanS')->get();
        return view('pages.reference.report.sustain.grid', compact('sustainReports'));
    }

    public function list()
    {
        $sustainReports = ProdukModel::where('kategori', 'laporanS')->get();
        return view('pages.reference.report.sustain.list', compact('sustainReports'));
    }
}
