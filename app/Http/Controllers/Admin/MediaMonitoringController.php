<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MediaMonitoring;
use Illuminate\Support\Facades\Storage;

class MediaMonitoringController extends Controller
{
    public function index()
    {
        $medias = MediaMonitoring::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.references.media-monitoring.index', compact('medias'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $medias = MediaMonitoring::where('status', 'like', "%{$search}%")
            ->orWhere('kesimpulan', 'like', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.references.media-monitoring.index', compact('medias'));
    }

    public function create()
    {
        return view('admin.references.media-monitoring.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'status' => 'required|in:positive,negative,neutral',
            'kesimpulan' => 'required|string|max:1000',
            'link' => 'required|url|max:255'
        ]);

        MediaMonitoring::create($validated);

        return redirect()
            ->route('admin.media-monitoring.index')
            ->with('success', 'Media monitoring berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $media = MediaMonitoring::findOrFail($id);
        return view('admin.references.media-monitoring.edit', compact('media'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:positive,negative,neutral',
            'kesimpulan' => 'required|string|max:1000',
            'link' => 'required|url|max:255'
        ]);

        $media = MediaMonitoring::findOrFail($id);
        $media->update($validated);

        return redirect()
            ->route('admin.media-monitoring.index')
            ->with('success', 'Media monitoring berhasil diperbarui!');
    }

    public function delete($id)
    {
        $media = MediaMonitoring::findOrFail($id);
        $media->delete();

        return redirect()
            ->route('admin.media-monitoring.index')
            ->with('success', 'Media monitoring berhasil dihapus!');
    }
}