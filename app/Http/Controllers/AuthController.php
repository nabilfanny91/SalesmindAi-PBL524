<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. Tampilkan Halaman Login
    public function showLogin()
    {
        return view('auth.login');
    }

    // 2. Proses Login
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Jika berhasil, arahkan ke halaman dashboard (atau halaman lain)
            return redirect()->intended('/'); // Sementara diarahkan ke landing page dulu
        }

        // Jika gagal, kembalikan dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau kata sandi yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    // 3. Tampilkan Halaman Register
    public function showRegister()
    {
        return view('auth.register');
    }

    // 4. Proses Register
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'business_name' => ['required', 'string', 'max:255'], // Tambahan dari desain Anda
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'], // Sesuai desain: Minimal 6 Karakter
        ]);

        // Simpan user baru ke database
        $user = User::create([
            'name' => $request->name,
            'business_name' => $request->business_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Langsung login setelah mendaftar
        Auth::login($user);

        // Arahkan ke halaman utama/dashboard
        return redirect('/');
    }

    // 5. Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}