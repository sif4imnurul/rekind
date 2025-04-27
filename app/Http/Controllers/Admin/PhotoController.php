<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = ProdukModel::where('kategori', 'photo')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('admin.pictures.photo.index', compact('photos'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $photos = ProdukModel::where('kategori', 'photo')
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('admin.pictures.photo.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.pictures.photo.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = $file->store('public/photos');
            $validated['foto'] = str_replace('public/', '', $path);
        }

        $validated['kategori'] = 'photo';
        ProdukModel::create($validated);

        return redirect()
            ->route('admin.photo.index')
            ->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit($id)
    {
        $photo = ProdukModel::where('kategori', 'photo')
            ->findOrFail($id);
        return view('admin.pictures.photo.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        $photo = ProdukModel::where('kategori', 'photo')
            ->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($photo->foto) {
                Storage::delete('public/' . $photo->foto);
            }

            $file = $request->file('foto');
            $path = $file->store('public/photos');
            $validated['foto'] = str_replace('public/', '', $path);
        }

        $photo->update($validated);

        return redirect()
            ->route('admin.photo.index')
            ->with('success', 'Foto berhasil diperbarui');
    }

    public function delete($id)
    {
        $photo = ProdukModel::where('kategori', 'photo')
            ->findOrFail($id);
        
        if ($photo->foto) {
            Storage::delete('public/' . $photo->foto);
        }
        
        $photo->delete();

        return redirect()
            ->route('admin.photo.index')
            ->with('success', 'Foto berhasil dihapus');
    }
}