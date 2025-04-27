<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ProdukModel;


class AnnualController extends Controller
{
    public function index()
    {
        $annualReports = ProdukModel::where('kategori', 'laporanA')->paginate(10);
        return view('admin.references.report.annual.index', compact('annualReports'));
    }
    
    public function create()
    {
        return view('admin.references.report.annual.create');
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
        $pdfPath = $request->file('url')->store('annual/pdf', 'public');
        $fotoPath = $request->file('foto')->store('annual/images', 'public');
        
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
        
        return redirect()->route('admin.annual.index')
            ->with('success', 'Laporan tahunan berhasil ditambahkan!');
    }

    public function show($id)
    {
        $annualReport = ProdukModel::findOrFail($id);
        return view('admin.references.report.annual.show', compact('annualReport'));
    }

    public function edit($id)
    {
        $annualReport = ProdukModel::findOrFail($id);

        return view('admin.references.report.annual.edit', compact('annualReport'));
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
    
        $annualReport = ProdukModel::findOrFail($id);
    
        // Update file if new file is uploaded
        if ($request->hasFile('url')) {
            if ($annualReport->url && Storage::disk('public')->exists($annualReport->url)) {
                Storage::disk('public')->delete($annualReport->url);
            }
            $pdfPath = $request->file('url')->store('annual/pdf', 'public');
            $annualReport->url = $pdfPath;
        }
    
        if ($request->hasFile('foto')) {
            if ($annualReport->foto && Storage::disk('public')->exists($annualReport->foto)) {
                Storage::disk('public')->delete($annualReport->foto);
            }
            $fotoPath = $request->file('foto')->store('annual/images', 'public');
            $annualReport->foto = $fotoPath;
        }
    
        // Update other fields
        $annualReport->nama = $request->nama;
        $annualReport->deskripsi = $request->deskripsi;
        // $annualReport->tipe ='pdf';
        $annualReport->tahun = $request->tahun;
        $annualReport->save();
    
        return redirect()->route('admin.annual.index')
            ->with('success', 'Laporan tahunan berhasil diperbarui!');
    }
    

    public function delete($id)
    {
        $annualReport = ProdukModel::findOrFail($id);
    
        // Hapus file jika ada
        if ($annualReport->url) {
            $pdfPath = public_path('files/' . $annualReport->url);
            if (file_exists($pdfPath)) {
                unlink($pdfPath); // Hapus file PDF
            }
        }
    
        if ($annualReport->foto) {
            $fotoPath = public_path('files/' . $annualReport->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath); // Hapus foto
            }
        }
    
        $annualReport->delete();
    
        return redirect()->route('admin.annual.index')
            ->with('success', 'Laporan tahunan berhasil dihapus!');
    }
    

    public function search(Request $request)
    {
        $search = $request->get('search', '');
        
        $annualReports = ProdukModel::where('kategori', 'laporanA')
            ->where('nama', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(3);
        
        return view('admin.references.report.annual.index', compact('annualReports'));
    }
}
