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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:1000'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('flyer', 'public');
            $validated['foto'] = $fotoPath;
        }

        // Add additional fields
        $validated['kategori'] = 'flyer';
        $validated['tipe'] = 'image';
        $validated['url'] = 'https://example.com/flyers/' . time(); // Random URL
        $validated['tahun'] = now()->year;

        ProdukModel::create($validated);

        return redirect()->route('admin.flyer.index')
            ->with('success', 'Flyer berhasil ditambahkan!');
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:1000'
        ]);

        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($flyer->foto && Storage::disk('public')->exists($flyer->foto)) {
                Storage::disk('public')->delete($flyer->foto);
            }

            // Store new file
            $fotoPath = $request->file('foto')->store('flyer', 'public');
            $validated['foto'] = $fotoPath;
        }

        // Maintain existing fields
        $validated['tipe'] = 'image';
        $validated['url'] = $flyer->url ?? 'https://example.com/flyers/' . time();
        $validated['tahun'] = $flyer->tahun ?? now()->year;

        $flyer->update($validated);

        return redirect()->route('admin.flyer.index')
            ->with('success', 'Flyer berhasil diperbarui!');
    }

    public function delete($id)
    {
        $flyer = ProdukModel::where('kategori', 'flyer')
            ->findOrFail($id);
        
        // Delete file if exists
        if ($flyer->foto && Storage::disk('public')->exists($flyer->foto)) {
            Storage::disk('public')->delete($flyer->foto);
        }
        
        $flyer->delete();

        return redirect()->route('admin.flyer.index')
            ->with('success', 'Flyer berhasil dihapus!');
    }
}