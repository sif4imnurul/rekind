<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualController extends Controller
{
    public function grid()
    {
        return view('pages.reference.report.annual.grid');
    }

    public function list()
    {
        return view('pages.reference.report.annual.list');
    }
}
