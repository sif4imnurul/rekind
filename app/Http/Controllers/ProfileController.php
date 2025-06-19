<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('pages.profile.edit', [
            'user' => Auth::user() 
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        // 3. Proses pembaruan gambar jika ada file yang diunggah
        if ($request->hasFile('image')) {
            // Hapus foto lama dari storage jika ada
            if ($user->image_url && Storage::disk('public')->exists($user->image_url)) {
                Storage::disk('public')->delete($user->image_url);
            }
            
            // Simpan foto baru
            $path = $request->file('image')->store('profile', 'public');

            // Gunakan method update() untuk keamanan dan konsistensi
            $user->update(['image_url' => $path]);
        }
        
        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('profile.edit')->with('status', 'Profil berhasil diperbarui!');
    }

}