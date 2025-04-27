<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Storage;

class FlyerController extends Controller
{
    public function index()
    {
        $flyers = ProdukModel::where('kategori', 'flyer')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        return view('admin.pictures.flyer-ucapan.index', compact('flyers'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $flyers = ProdukModel::where('kategori', 'flyer')
            ->where('nama', 'like', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('admin.pictures.flyer-ucapan.index', compact('flyers'));
    }

    public function create()
    {
        return view('admin.pictures.flyer-ucapan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('public/flyers');
            $validated['foto'] = str_replace('public/', '', $path);
        }

        $validated['kategori'] = 'flyer';
        ProdukModel::create($validated);

        return redirect()
            ->route('admin.flyer.index')
            ->with('success', 'Flyer berhasil ditambahkan');
    }

    public function edit($id)
    {
        $flyer = ProdukModel::where('kategori', 'flyer')
            ->findOrFail($id);
        return view('admin.pictures.flyer-ucapan.edit', compact('flyer'));
    }

    public function update(Request $request, $id)
    {
        $flyer = ProdukModel::where('kategori', 'flyer')
            ->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($flyer->foto) {
                Storage::delete('public/' . $flyer->foto);
            }

            $file = $request->file('foto');
            $path = $file->store('public/flyers');
            $validated['foto'] = str_replace('public/', '', $path);
        }

        $flyer->update($validated);

        return redirect()
            ->route('admin.flyer.index')
            ->with('success', 'Flyer berhasil diperbarui');
    }

    public function delete($id)
    {
        $flyer = ProdukModel::where('kategori', 'flyer')
            ->findOrFail($id);
        
        if ($flyer->foto) {
            Storage::delete('public/' . $flyer->foto);
        }
        
        $flyer->delete();

        return redirect()
            ->route('admin.flyer.index')
            ->with('success', 'Flyer berhasil dihapus');
    }
}