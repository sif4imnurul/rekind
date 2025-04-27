<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PresentasiController extends Controller
{
    public function index()
    {
        return view('admin.references.presentasi.index');
    }

    public function create()
    {
        return view('admin.references.presentasi.create');
    }

    public function store()
    {
    }

    public function edit()
    {
        return view('admin.references.presentasi.edit');
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function search(Request $request)
    {

    }
}
