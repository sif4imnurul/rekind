<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use Illuminate\Support\Facades\Log;

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
            Log::info('User ditemukan: ', ['id' => $user->id_user, 'nama' => $user->nama]);
            Auth::login($user);
            // dd(Auth::check(), Auth::user());
            
            if (Auth::check()) {
                Log::info('Auth berhasil, user_id: ' . Auth::id());
                return redirect()->intended('/home')->with('success', 'Login berhasil!');
            } else {
                Log::error('Auth gagal setelah login()');
                return back()->with('error', 'Auth gagal, silakan coba lagi.');
            }
        }
        
        Log::warning('User tidak ditemukan: ', ['nama' => $request->nama]);
        return back()->withInput($request->only('nama'))->with('error', 'Nama atau NPK tidak valid.');
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