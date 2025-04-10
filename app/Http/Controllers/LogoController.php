<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        return view('pages.picture.logo.index');
    }
}
