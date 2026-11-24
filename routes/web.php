<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Tambahkan ini

// Rute Landing Page (Halaman Utama)
Route::get('/', function () {
    return view('welcome'); // Atau sesuaikan dengan nama file landing page Anda (misal: 'landing')
});

// --- RUTE AUTENTIKASI ---

// Menampilkan halaman login (Hanya bisa diakses jika BELUM login)
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
// Memproses form login
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

// Menampilkan halaman register (Hanya bisa diakses jika BELUM login)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
// Memproses form register
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

// Memproses logout (Hanya bisa diakses jika SUDAH login)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Rute untuk halaman demo AI Assistant
Route::get('/demo-ai', function () {
    return view('demo.ai-assistant');
})->name('demo.ai');