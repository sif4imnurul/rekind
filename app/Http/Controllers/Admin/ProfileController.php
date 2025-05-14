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
            'email' => 'required|email|unique:user,email,'.$user->id_user.',id_user',
            'current_password' => 'required',
            'new_password' => 'nullable|min:8|confirmed',
        ]);

        // Verify current password
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->withErrors([
                'current_password' => 'Password saat ini tidak sesuai'
            ]);
        }

        // Update email
        $user->email = $validated['email'];

        // Update password if provided
        if (!empty($validated['new_password'])) {
            $user->password = Hash::make($validated['new_password']);
        }

        $user->save();

        return redirect()->route('admin.profile.edit')
            ->with('success', 'Profil berhasil diperbarui');
    }
}