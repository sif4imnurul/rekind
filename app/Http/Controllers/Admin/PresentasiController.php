<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ProdukModel;

class PresentasiController extends Controller
{
    public function index()
    {
        $presentasi = ProdukModel::where('kategori', 'template_presentasi')->paginate(9);
        return view('admin.references.presentasi.index', compact('presentasi'));
    }
    
    public function create()
    {
        return view('admin.references.presentasi.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'url' => 'required|file', // Max 10MB
        ]);
        
        // Handle file upload
        $originalName = $request->file('url')->getClientOriginalName();
        $filePath = $request->file('url')->storeAs('template_presentasi', $originalName, 'public');
        
        // Determine file type
        $fileExtension = $request->file('url')->getClientOriginalExtension();
        $tipe = in_array($fileExtension, ['ppt', 'pptx']) ? $fileExtension : 'pdf';
        
        // Create new record with default values for required fields
        ProdukModel::create([
            'nama' => $request->nama,
            'url' => $filePath,
            'deskripsi' => 'Template presentasi', // Default value
            'foto' => 'default.jpg', // Default value
            'tahun' => date('Y'), // Current year as default
            'tipe' => $tipe,
            'kategori' => 'template_presentasi',
        ]);
        
        return redirect()->route('admin.presentasi.index')
            ->with('success', 'Template presentasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $presentasi = ProdukModel::findOrFail($id);
        return view('admin.references.presentasi.edit', compact('presentasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'url' => 'nullable|file', 
        ]);
    
        $presentasi = ProdukModel::findOrFail($id);
    
        $presentasi->nama = $request->nama;
    
        if ($request->hasFile('url')) {
            if ($presentasi->url && Storage::disk('public')->exists($presentasi->url)) {
                Storage::disk('public')->delete($presentasi->url);
            }
    
            $originalName = $request->file('url')->getClientOriginalName();
            $filePath = $request->file('url')->storeAs('template_presentasi', $originalName, 'public');
            $presentasi->url = $filePath;
    
            $fileExtension = $request->file('url')->getClientOriginalExtension();
            $presentasi->tipe = in_array($fileExtension, ['ppt', 'pptx']) ? $fileExtension : 'pdf';
        }
    
        $presentasi->save();
    
        return redirect()->route('admin.presentasi.index')
            ->with('success', 'Template presentasi berhasil diperbarui!');
    }
    
    
    public function delete($id)
    {
        $presentasi = ProdukModel::findOrFail($id);
    
        // Delete associated files
        if ($presentasi->url && Storage::disk('public')->exists($presentasi->url)) {
            Storage::disk('public')->delete($presentasi->url);
        }
    
        $presentasi->delete();
    
        return redirect()->route('admin.presentasi.index')
            ->with('success', 'Template presentasi berhasil dihapus!');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search', '');
        
        $presentasi = ProdukModel::where('kategori', 'template_presentasi')
            ->where('nama', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'asc')
            ->paginate(9);
        
        return view('admin.references.presentasi.index', compact('presentasi'));
    }
}