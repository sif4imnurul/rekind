<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function list()
    {
        return view('pages.reference.buku.list');
    }

    public function grid()
    {
        return view('pages.reference.buku.grid');
    }
}
