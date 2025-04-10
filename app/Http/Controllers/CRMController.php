<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CRMController extends Controller
{
    public function index()
    {
        return view('pages.crm.data-client.index');
    }

    public function permohonan()
    {
        return view('pages.crm.permohonan.index');
    }
}
