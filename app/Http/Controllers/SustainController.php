<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SustainController extends Controller
{
    public function grid()
    {
        return view('pages.reference.report.sustain.grid');
    }

    public function list()
    {
        return view('pages.reference.report.sustain.list');
    }
}
