@extends('layouts.auth')

@section('title', 'Masuk')
@section('leftTitle', 'Selamat Datang')
@section('leftSubtitle', 'Masuk untuk melihat insight bisnismu.')

@section('features')
    <div class="flex items-center gap-3 text-gray-600">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>Dashboard analitik real-time</span>
    </div>
    <div class="flex items-center gap-3 text-gray-600">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>AI Assistant siap menjawab 24/7</span>
    </div>
    <div class="flex items-center gap-3 text-gray-600">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>Data transaksi hingga knowledge base</span>
    </div>
@endsection

@section('content')
    <h2 class="text-3xl font-bold text-gray-900 mb-2">Masuk</h2>
    <p class="text-gray-500 mb-8">Masukkan Email dan Kata Sandi anda</p>

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white"
                placeholder="nama@bisnis.id">
            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi</label>
            <input id="password" type="password" name="password" required
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white"
                placeholder="••••••••">
            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-3.5 rounded-xl transition shadow-lg shadow-brand-500/30 mt-4">
            Masuk
        </button>

        <div class="text-center mt-6 text-sm text-gray-600">
            Belum punya akun? <a href="{{ route('register') }}" class="text-brand-600 font-semibold hover:text-brand-700">Daftar di sini</a>
        </div>
    </form>
@endsection