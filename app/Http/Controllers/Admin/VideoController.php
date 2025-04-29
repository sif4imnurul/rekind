<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index()
    {
        $videos = ProdukModel::where('kategori', 'dokum_video')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('admin.pictures.video.index', compact('videos'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $videos = ProdukModel::where('kategori', 'dokum_video')
            ->where(function($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('admin.pictures.video.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.pictures.video.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'video' => 'required|mimes:mp4,mov,avi|max:102400' // 100MB max
        ]);

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('vid', 'public');
            $validated['foto'] = $videoPath; // Using 'foto' field for video path
        }

        // Add additional fields
        $validated['kategori'] = 'dokum_video';
        $validated['tipe'] = 'video';
        $validated['url'] = 'https://example.com/videos/' . time(); // Random URL

        ProdukModel::create($validated);

        return redirect()
            ->route('admin.video.index')
            ->with('success', 'Video berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $video = ProdukModel::where('kategori', 'dokum_video')
            ->findOrFail($id);
        return view('admin.pictures.video.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = ProdukModel::where('kategori', 'dokum_video')
            ->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'video' => 'nullable|mimes:mp4,mov,avi|max:102400' // 100MB max
        ]);

        if ($request->hasFile('video')) {
            // Delete old file if exists
            if ($video->foto && Storage::disk('public')->exists($video->foto)) {
                Storage::disk('public')->delete($video->foto);
            }

            // Store new file
            $videoPath = $request->file('video')->store('vid', 'public');
            $validated['foto'] = $videoPath;
        }

        // Maintain existing fields
        $validated['tipe'] = 'video';
        $validated['kategori'] = 'dokum_video';
        $validated['url'] = $video->url ?? 'https://example.com/videos/' . time();

        $video->update($validated);

        return redirect()
            ->route('admin.video.index')
            ->with('success', 'Video berhasil diperbarui!');
    }

    public function delete($id)
    {
        $video = ProdukModel::where('kategori', 'dokum_video')
            ->findOrFail($id);
        
        // Delete file if exists
        if ($video->foto && Storage::disk('public')->exists($video->foto)) {
            Storage::disk('public')->delete($video->foto);
        }
        
        $video->delete();

        return redirect()
            ->route('admin.video.index')
            ->with('success', 'Video berhasil dihapus!');
    }
}