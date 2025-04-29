<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ProdukModel;

class ZoomBackgroundController extends Controller
{
    public function index()
    {
        $backgrounds = ProdukModel::where('kategori', 'zoom_background')->paginate(9);
        return view('admin.pictures.background-zoom.index', compact('backgrounds'));
    }

    public function create()
    {
        return view('admin.pictures.background-zoom.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'url' => 'required|file|mimes:jpg,jpeg,png', // Validasi file gambar
        ]);

        $originalName = $request->file('url')->getClientOriginalName();
        $filePath = $request->file('url')->storeAs('zoom_background', $originalName, 'public');


        ProdukModel::create([
            'nama' => $request->nama,
            'url' => $filePath,
            'deskripsi' => 'Background Zoom', // Default
            'foto' => $filePath, // Default
            'tahun' => date('Y'),
            'tipe' => 'image',
            'kategori' => 'zoom_background',
        ]);

        return redirect()->route('admin.zoom-background.index')
            ->with('success', 'Background Zoom berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $background = ProdukModel::findOrFail($id);
        return view('admin.pictures.background-zoom.edit', compact('background'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'url' => 'nullable|file|mimes:jpg,jpeg,png',
        ]);

        $background = ProdukModel::findOrFail($id);

        $background->nama = $request->nama;

        if ($request->hasFile('url')) {
            if ($background->url && Storage::disk('public')->exists($background->url)) {
                Storage::disk('public')->delete($background->url);
            }

            $originalName = $request->file('url')->getClientOriginalName();
            $filePath = $request->file('url')->storeAs('zoom_background', $originalName, 'public');
            $background->url = $filePath;
            $background->foto = $filePath;
        }

        $background->save();

        return redirect()->route('admin.zoom-background.index')
            ->with('success', 'Background Zoom berhasil diperbarui!');
    }

    public function delete($id)
    {
        $background = ProdukModel::findOrFail($id);

        if ($background->url && Storage::disk('public')->exists($background->url)) {
            Storage::disk('public')->delete($background->url);
        }

        $background->delete();

        return redirect()->route('admin.zoom-background.index')
            ->with('success', 'Background Zoom berhasil dihapus!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search', '');

        $backgrounds = ProdukModel::where('kategori', 'zoom_background')
            ->where('nama', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'asc')
            ->paginate(9);

        return view('admin.pictures.background-zoom.index', compact('backgrounds'));
    }
}
