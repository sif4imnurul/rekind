<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Still useful for checking existence, but move for storage.
use Illuminate\Support\Str; // For generating unique filenames

class SurveyDocumentController extends Controller
{
    protected $kategori = 'survey_hasil'; // Category for these documents
    protected $thumbnailPath = 'survey_documents/images'; // Relative to public/files/
    protected $pdfPath = 'survey_documents/pdf';       // Relative to public/files/

    public function index(Request $request)
    {
        $query = ProdukModel::where('kategori', $this->kategori)->orderBy('created_at', 'desc');

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama', 'like', "%{$searchTerm}%")
                  ->orWhere('tahun', 'like', "%{$searchTerm}%")
                  ->orWhere('deskripsi', 'like', "%{$searchTerm}%");
            });
        }
        $documents = $query->paginate(10);
        return view('admin.references.survey_documents.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.references.survey_documents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'nullable|numeric|min:2000|max:2100',
            'deskripsi' => 'nullable|string|max:1000',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Thumbnail
            'file' => 'required|file|mimes:pdf|max:10240' // PDF document
        ]);

        $validated['kategori'] = $this->kategori;
        $validated['tipe'] = 'pdf'; // Or 'survey_document'

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/' . $this->thumbnailPath), $filename);
            $validated['foto'] = $this->thumbnailPath . '/' . $filename;
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/' . $this->pdfPath), $filename);
            $validated['url'] = $this->pdfPath . '/' . $filename;
        }

        ProdukModel::create($validated);

        return redirect()->route('admin.survey-documents.index')->with('success', 'Survey document uploaded successfully.');
    }

    public function edit($id)
    {
        $document = ProdukModel::where('kategori', $this->kategori)->findOrFail($id);
        return view('admin.references.survey_documents.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        $document = ProdukModel::where('kategori', $this->kategori)->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tahun' => 'nullable|numeric|min:2000|max:2100',
            'deskripsi' => 'nullable|string|max:1000',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'file' => 'nullable|file|mimes:pdf|max:10240'
        ]);

        if ($request->hasFile('foto')) {
            // Delete old photo if exists
            if ($document->foto && file_exists(public_path('files/' . $document->foto))) {
                unlink(public_path('files/' . $document->foto));
            }
            $file = $request->file('foto');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/' . $this->thumbnailPath), $filename);
            $validated['foto'] = $this->thumbnailPath . '/' . $filename;
        }

        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($document->url && file_exists(public_path('files/' . $document->url))) {
                unlink(public_path('files/' . $document->url));
            }
            $file = $request->file('file');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('files/' . $this->pdfPath), $filename);
            $validated['url'] = $this->pdfPath . '/' . $filename;
        }

        $document->update($validated);

        return redirect()->route('admin.survey-documents.index')->with('success', 'Survey document updated successfully.');
    }

    public function destroy($id)
    {
        $document = ProdukModel::where('kategori', $this->kategori)->findOrFail($id);

        if ($document->foto && file_exists(public_path('files/' . $document->foto))) {
            unlink(public_path('files/' . $document->foto));
        }
        if ($document->url && file_exists(public_path('files/' . $document->url))) {
            unlink(public_path('files/' . $document->url));
        }

        $document->delete();

        return redirect()->route('admin.survey-documents.index')->with('success', 'Survey document deleted successfully.');
    }

    public function download($id)
    {
        $document = ProdukModel::where('kategori', $this->kategori)->findOrFail($id);
        $filePath = public_path('files/' . $document->url);

        if (file_exists($filePath)) {
            // Use original name for download if available and sensible, or generate one
            $originalName = Str::slug($document->nama ?? 'survey-document') . '.pdf';
            return response()->download($filePath, $originalName);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }
}
