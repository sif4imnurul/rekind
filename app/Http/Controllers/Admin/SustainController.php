<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ProdukModel;


class SustainController extends Controller
{
    public function index()
    {
        $sustainReports = ProdukModel::where('kategori', 'laporanA')->paginate(10);
        return view('admin.references.report.sustain.index', compact('sustainReports'));
    }
    
    public function create()
    {
        return view('admin.references.report.sustain.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'), // validasi tahun
            'deskripsi' => 'required|string',
            'url' => 'required|file|mimes:pdf|max:10240', // Max 10MB
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
        ]);
        
        // Handle file uploads
        $pdfPath = $request->file('url')->store('sustain/pdf', 'public');
        $fotoPath = $request->file('foto')->store('sustain/images', 'public');
        
        // Create new record
        ProdukModel::create([
            'nama' => $request->nama,
            'url' => $pdfPath,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'tahun' => $request->tahun,
            'tipe' => 'pdf',
            'kategori' => 'laporanA',
        ]);
        
        return redirect()->route('admin.sustain.index')
            ->with('success', 'Laporan tahunan berhasil ditambahkan!');
    }

    public function show($id)
    {
        $sustainReport = ProdukModel::findOrFail($id);
        return view('admin.references.report.sustain.show', compact('sustainReport'));
    }

    public function edit($id)
    {
        $sustainReport = ProdukModel::findOrFail($id);

        return view('admin.references.report.sustain.edit', compact('sustainReport'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'required|integer|min:1900|max:' . date('Y'), // validasi tahun
            'deskripsi' => 'required|string|max:1024',
            'url' => 'nullable|file|mimes:pdf|max:10240', // Optional saat edit
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional saat edit
        ]);
    
        $sustainReport = ProdukModel::findOrFail($id);
    
        // Update file if new file is uploaded
        if ($request->hasFile('url')) {
            if ($sustainReport->url && Storage::disk('public')->exists($sustainReport->url)) {
                Storage::disk('public')->delete($sustainReport->url);
            }
            $pdfPath = $request->file('url')->store('sustain/pdf', 'public');
            $sustainReport->url = $pdfPath;
        }
    
        if ($request->hasFile('foto')) {
            if ($sustainReport->foto && Storage::disk('public')->exists($sustainReport->foto)) {
                Storage::disk('public')->delete($sustainReport->foto);
            }
            $fotoPath = $request->file('foto')->store('sustain/images', 'public');
            $sustainReport->foto = $fotoPath;
        }
    
        // Update other fields
        $sustainReport->nama = $request->nama;
        $sustainReport->deskripsi = $request->deskripsi;
        // $sustainReport->tipe ='pdf';
        $sustainReport->tahun = $request->tahun;
        $sustainReport->save();
    
        return redirect()->route('admin.sustain.index')
            ->with('success', 'Laporan tahunan berhasil diperbarui!');
    }
    

    public function delete($id)
    {
        $sustainReport = ProdukModel::findOrFail($id);
    
        // Hapus file jika ada
        if ($sustainReport->url) {
            $pdfPath = public_path('files/' . $sustainReport->url);
            if (file_exists($pdfPath)) {
                unlink($pdfPath); // Hapus file PDF
            }
        }
    
        if ($sustainReport->foto) {
            $fotoPath = public_path('files/' . $sustainReport->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath); // Hapus foto
            }
        }
    
        $sustainReport->delete();
    
        return redirect()->route('admin.sustain.index')
            ->with('success', 'Laporan tahunan berhasil dihapus!');
    }
    

    public function search(Request $request)
    {
        $search = $request->get('search', '');
        
        $sustainReports = ProdukModel::where('kategori', 'laporanA')
            ->where('nama', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        
        return view('admin.references.report.sustain.index', compact('sustainReports'));
    }
}
