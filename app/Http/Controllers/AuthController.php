<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('pages.auth.index');
    }

    // Proses login user
    public function login(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npk' => 'required',
        ]);

        // Cari user berdasarkan nama dan NPK
        $user = UserModel::where('nama', $request->nama)
                ->where('npk', $request->npk)
                ->first();

        if ($user) {
            Auth::login($user);
            return redirect()->intended('/home')->with('success', 'Login berhasil! Selamat datang, ' . $user->nama);
        }

        // Login gagal
        return back()
            ->withInput($request->only('nama'))
            ->with('error', 'Nama atau NPK tidak valid.');
    }
    
    // Proses logout user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }
}