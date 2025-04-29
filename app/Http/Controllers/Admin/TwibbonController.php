<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Storage;

class TwibbonController extends Controller
{
    public function index()
    {
        $twibbons = ProdukModel::where('kategori', 'twibbon')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('admin.pictures.twibbon.index', compact('twibbons'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $twibbons = ProdukModel::where('kategori', 'twibbon')
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('url', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('admin.pictures.twibbon.index', compact('twibbons'));
    }

    public function create()
    {
        return view('admin.pictures.twibbon.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Added gif support, 2MB limit
            'url' => 'nullable|url|max:255',
            'deskripsi' => 'required|string|max:1000'
        ]);

        $fotoPath = $request->file('foto')->store('twibbon/images', 'public');
        $validated['foto'] = $fotoPath; // Store full path

        // Add additional fields
        $validated['kategori'] = 'twibbon';
        $validated['tipe'] = 'image';

        ProdukModel::create($validated);

        return redirect()->route('admin.twibbon.index')
            ->with('success', 'Twibbon berhasil ditambahkan!');
    }

    public function show($id)
    {
        $twibbon = ProdukModel::where('kategori', 'twibbon')
            ->findOrFail($id);
        return view('admin.pictures.twibbon.show', compact('twibbon'));
    }

    public function edit($id)
    {
        $twibbon = ProdukModel::where('kategori', 'twibbon')
            ->findOrFail($id);
        return view('admin.pictures.twibbon.edit', compact('twibbon'));
    }

    public function update(Request $request, $id)
    {
        $twibbon = ProdukModel::where('kategori', 'twibbon')
            ->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'url' => 'nullable|url|max:255',
            'deskripsi' => 'required|string|max:1000'
        ]);

        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($twibbon->foto && Storage::disk('public')->exists($twibbon->foto)) {
                Storage::disk('public')->delete($twibbon->foto);
            }

            // Store new file
            $fotoPath = $request->file('foto')->store('twibbon/images', 'public');
            $validated['foto'] = $fotoPath;
        }

        // Maintain existing fields
        $validated['tipe'] = 'image';

        $twibbon->update($validated);

        return redirect()->route('admin.twibbon.index')
            ->with('success', 'Twibbon berhasil diperbarui!');
    }

    public function delete($id)
    {
        $twibbon = ProdukModel::where('kategori', 'twibbon')
            ->findOrFail($id);
        
        // Delete file if exists using Storage facade
        if ($twibbon->foto && Storage::disk('public')->exists($twibbon->foto)) {
            Storage::disk('public')->delete($twibbon->foto);
        }
        
        $twibbon->delete();

        return redirect()->route('admin.twibbon.index')
            ->with('success', 'Twibbon berhasil dihapus!');
    }
}