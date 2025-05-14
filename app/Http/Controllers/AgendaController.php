<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
        public function list(Request $request)
    {
        return view('pages.reference.agenda.list');
    }
    
    public function grid(Request $request)
    {
        return view('pages.reference.agenda.grid');
    }

    public function show(Request $request)
    {
        return view('pages.reference.agenda.show');
    }
}
