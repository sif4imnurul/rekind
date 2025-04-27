<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    public function index()
    {
        return view('admin.references.buku.index');
    }

    public function create()
    {
        return view('admin.references.buku.create');
    }

    public function store()
    {
    }

    public function show()
    {
        return view('admin.references.buku.show');
    }

    public function edit()
    {
        return view('admin.references.buku.edit');
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
