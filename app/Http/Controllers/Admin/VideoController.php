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
        $videos = ProdukModel::where('kategori', 'video')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        return view('admin.pictures.video.index', compact('videos'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $videos = ProdukModel::where('kategori', 'video')
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
            'deskripsi' => 'required|string',
            'video' => 'required|mimes:mp4,mov,avi|max:102400' // 100MB max
        ]);

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $path = $file->store('public/videos');
            $validated['video'] = str_replace('public/', '', $path);
        }

        $validated['kategori'] = 'video';
        ProdukModel::create($validated);

        return redirect()
            ->route('admin.video.index')
            ->with('success', 'Video berhasil ditambahkan');
    }

    public function edit($id)
    {
        $video = ProdukModel::where('kategori', 'video')
            ->findOrFail($id);
        return view('admin.pictures.video.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = ProdukModel::where('kategori', 'video')
            ->findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,avi|max:102400' // 100MB max
        ]);

        if ($request->hasFile('video')) {
            if ($video->video) {
                Storage::delete('public/' . $video->video);
            }

            $file = $request->file('video');
            $path = $file->store('public/videos');
            $validated['video'] = str_replace('public/', '', $path);
        }

        $video->update($validated);

        return redirect()
            ->route('admin.video.index')
            ->with('success', 'Video berhasil diperbarui');
    }

    public function delete($id)
    {
        $video = ProdukModel::where('kategori', 'video')
            ->findOrFail($id);
        
        if ($video->video) {
            Storage::delete('public/' . $video->video);
        }
        
        $video->delete();

        return redirect()
            ->route('admin.video.index')
            ->with('success', 'Video berhasil dihapus');
    }
}