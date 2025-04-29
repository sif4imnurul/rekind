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
        $photos = ProdukModel::where('kategori', 'dokum_foto')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('admin.pictures.photo.index', compact('photos'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $photos = ProdukModel::where('kategori', 'dokum_foto')
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:1000'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('photo/images', 'public');
            $validated['foto'] = $fotoPath;
        }

        // Add additional fields
        $validated['kategori'] = 'dokum_foto';
        $validated['tipe'] = 'image';
        $validated['url'] = 'https://example.com/photos/' . time(); // Random URL

        ProdukModel::create($validated);

        return redirect()->route('admin.photo.index')
            ->with('success', 'Foto berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $photo = ProdukModel::where('kategori', 'dokum_foto')
            ->findOrFail($id);
        return view('admin.pictures.photo.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        $photo = ProdukModel::where('kategori', 'dokum_foto')
            ->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:1000'
        ]);

        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($photo->foto && Storage::disk('public')->exists($photo->foto)) {
                Storage::disk('public')->delete($photo->foto);
            }

            // Store new file in correct path
            $fotoPath = $request->file('foto')->store('photo/images', 'public');
            $validated['foto'] = $fotoPath;
        }

        // Maintain existing fields
        $validated['tipe'] = 'image';
        $validated['url'] = $photo->url ?? 'https://example.com/photos/' . time();

        $photo->update($validated);

        return redirect()->route('admin.photo.index')
            ->with('success', 'Foto berhasil diperbarui!');
    }

    public function delete($id)
    {
        $photo = ProdukModel::where('kategori', 'dokum_foto')
            ->findOrFail($id);
        
        // Delete file if exists
        if ($photo->foto && Storage::disk('public')->exists($photo->foto)) {
            Storage::disk('public')->delete($photo->foto);
        }
        
        $photo->delete();

        return redirect()->route('admin.photo.index')
            ->with('success', 'Foto berhasil dihapus!');
    }
}