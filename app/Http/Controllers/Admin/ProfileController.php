<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email,'.$user->id_user.',id_user',
            'unit' => 'required|string|max:255',
            'npk' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'telepon' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'current_password' => 'required_with:new_password',
            'new_password' => 'nullable|min:8|confirmed',
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

         $userData = $request->only([
            'nama', 
            'email', 
            'npk', 
            'unit', 
            'divisi', 
            'telepon', 
            'tanggal_lahir', 
            'alamat'
        ]);

        if ($request->filled('npk')) {
            if ($user->npk !== $request->npk || !$user->password) {
                $userData['password'] = Hash::make($request->npk);
            }
        }


        if ($request->hasFile('image')) {
            if ($user->image_url && Storage::disk('public')->exists($user->image_url)) {
                Storage::disk('public')->delete($user->image_url);
            }
            $path = $request->file('image')->store('profile', 'public');
            $userData['image_url'] = $path;
        }

        $user->update($userData);

        return redirect()->route('admin.profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}