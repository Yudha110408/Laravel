<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            // Cek role setelah login berhasil
            $user = Auth::user();

            if ($user->role === 'admin') {
                // Redirect ke halaman admin
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role === 'user') {
                // Redirect ke halaman user
                return redirect()->intended('/home');
            }

            // Jika role tidak dikenal, logout dan kembali ke halaman login
            Auth::logout();
            return redirect()->back()->with('error', 'Role tidak valid.');
        }

        // Login gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    // Menangani proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout berhasil.');
    }
}
