<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoomBackgroundController extends Controller
{
    public function index()
    {
        return view('pages.picture.background-zoom.index');
    }
}
