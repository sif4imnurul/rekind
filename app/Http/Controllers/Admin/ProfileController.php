<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit', [
            'user' => auth()->user()
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        
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
        ]);

        // If changing password, verify current password
        if ($request->filled('new_password')) {
            if (!Hash::check($validated['current_password'], $user->password)) {
                return back()->withErrors([
                    'current_password' => 'Password saat ini tidak sesuai'
                ]);
            }
            $user->password = Hash::make($validated['new_password']);
        }

        // Update other fields
        $user->fill([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'unit' => $validated['unit'],
            'npk' => $validated['npk'],
            'divisi' => $validated['divisi'],
            'telepon' => $validated['telepon'],
            'alamat' => $validated['alamat'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
        ]);

        $user->save();

        return redirect()->route('admin.dashboard.index')
            ->with('success', 'Profil berhasil diperbarui');
    }
}