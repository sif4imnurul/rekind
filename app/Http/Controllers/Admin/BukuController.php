<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ProdukModel;

class BukuController extends Controller
{
    public function index()
    {
        $books = ProdukModel::where('kategori', 'buku')->paginate(10);
        return view('admin.references.buku.index', compact('books'));
    }
    
    public function create()
    {
        return view('admin.references.buku.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'required|string',
            'url' => 'required|file|mimes:pdf|max:10240', // Max 10MB
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);
        
        // Handle file uploads dengan menyimpan nama original
        $pdfFile = $request->file('url');
        $pdfOriginalName = $pdfFile->getClientOriginalName();
        $pdfPath = $pdfFile->storeAs('books/pdf', $pdfOriginalName, 'public');
        
        $fotoFile = $request->file('foto');
        $fotoOriginalName = $fotoFile->getClientOriginalName();
        $fotoPath = $fotoFile->storeAs('books/images', $fotoOriginalName, 'public');
        
        // Create new record
        ProdukModel::create([
            'nama' => $request->nama,
            'url' => $pdfPath,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'tahun' => $request->tahun,
            'tipe' => 'pdf',
            'kategori' => 'buku',
        ]);
        
        return redirect()->route('admin.buku.index')
            ->with('success', 'Buku berhasil ditambahkan!');
    }

    public function show($id)
    {
        $book = ProdukModel::findOrFail($id);
        return view('admin.references.buku.show', compact('book'));
    }

    public function edit($id)
    {
        $book = ProdukModel::findOrFail($id);
        return view('admin.references.buku.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'),
            'deskripsi' => 'required|string|max:1024',
            'url' => 'nullable|file|mimes:pdf|max:10240', // Optional during edit
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional during edit
        ]);
    
        $book = ProdukModel::findOrFail($id);
    
        // Update file if new file is uploaded (dengan nama original)
        if ($request->hasFile('url')) {
            if ($book->url && Storage::disk('public')->exists($book->url)) {
                Storage::disk('public')->delete($book->url);
            }
            $pdfFile = $request->file('url');
            $pdfOriginalName = $pdfFile->getClientOriginalName();
            $pdfPath = $pdfFile->storeAs('books/pdf', $pdfOriginalName, 'public');
            $book->url = $pdfPath;
        }
    
        if ($request->hasFile('foto')) {
            if ($book->foto && Storage::disk('public')->exists($book->foto)) {
                Storage::disk('public')->delete($book->foto);
            }
            $fotoFile = $request->file('foto');
            $fotoOriginalName = $fotoFile->getClientOriginalName();
            $fotoPath = $fotoFile->storeAs('books/images', $fotoOriginalName, 'public');
            $book->foto = $fotoPath;
        }
    
        // Update other fields
        $book->nama = $request->nama;
        $book->deskripsi = $request->deskripsi;
        $book->tahun = $request->tahun;
        $book->save();
    
        return redirect()->route('admin.buku.index')
            ->with('success', 'Buku berhasil diperbarui!');
    }
    
    public function delete($id)
    {
        $book = ProdukModel::findOrFail($id);
    
        // Delete files if they exist
        if ($book->url && Storage::disk('public')->exists($book->url)) {
            Storage::disk('public')->delete($book->url);
        }
    
        if ($book->foto && Storage::disk('public')->exists($book->foto)) {
            Storage::disk('public')->delete($book->foto);
        }
    
        $book->delete();
    
        return redirect()->route('admin.buku.index')
            ->with('success', 'Buku berhasil dihapus!');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search', '');
        
        $books = ProdukModel::where('kategori', 'buku')
            ->where('nama', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        
        return view('admin.references.buku.index', compact('books'));
    }
}