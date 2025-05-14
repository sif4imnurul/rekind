<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Storage;

class BuletinController extends Controller
{
    public function index()
    {
        $buletins = ProdukModel::where('kategori', 'buletin')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        return view('admin.references.buletin.index', compact('buletins'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $buletins = ProdukModel::where('kategori', 'buletin')
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('tahun', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        return view('admin.references.buletin.index', compact('buletins'));
    }

    public function create()
    {
        return view('admin.references.buletin.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'required|numeric|min:2000|max:2100',
            'deskripsi' => 'required|string|max:1000',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'required|file|mimes:pdf|max:10240'
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('buletin/images', 'public');
            $validated['foto'] = $fotoPath;
        }

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('buletin/pdf', 'public');
            $validated['url'] = $filePath;
        }

        $validated['kategori'] = 'buletin';
        $validated['tipe'] = 'pdf';

        $buletin = ProdukModel::create($validated);

        return redirect()
            ->route('admin.buletin.index')
            ->with('success', 'Buletin berhasil ditambahkan!');
    }

    public function show($id)
    {
        $buletin = ProdukModel::findOrFail($id);
        return view('admin.references.buletin.show', compact('buletin'));
    }

    public function edit($id)
    {
        $buletin = ProdukModel::findOrFail($id);
        return view('admin.references.buletin.edit', compact('buletin'));
    }

    public function update(Request $request, $id)
    {
        $buletin = ProdukModel::where('kategori', 'buletin')->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'required|numeric|min:2000|max:2100',
            'deskripsi' => 'required|string|max:1000',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        if ($request->hasFile('foto')) {
            if ($buletin->foto && Storage::disk('public')->exists($buletin->foto)) {
                Storage::disk('public')->delete($buletin->foto);
            }
            $fotoPath = $request->file('foto')->store('buletin/images', 'public');
            $validated['foto'] = $fotoPath;
        }

        if ($request->hasFile('file')) {
            if ($buletin->url && Storage::disk('public')->exists($buletin->url)) {
                Storage::disk('public')->delete($buletin->url);
            }
            $filePath = $request->file('file')->store('buletin/pdf', 'public');
            $validated['url'] = $filePath;
        }

        $buletin->update($validated);

        return redirect()
            ->route('admin.buletin.index')
            ->with('success', 'Buletin berhasil diperbarui!');
    }

    public function delete($id)
    {
        $buletin = ProdukModel::where('kategori', 'buletin')->findOrFail($id);
        
        if ($buletin->foto && Storage::disk('public')->exists($buletin->foto)) {
            Storage::disk('public')->delete($buletin->foto);
        }
        
        if ($buletin->url && Storage::disk('public')->exists($buletin->url)) {
            Storage::disk('public')->delete($buletin->url);
        }

        $buletin->delete();

        return redirect()
            ->route('admin.buletin.index')
            ->with('success', 'Buletin berhasil dihapus!');
    }
}