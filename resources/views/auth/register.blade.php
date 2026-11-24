@extends('layouts.auth')

@section('title', 'Daftar Akun')
@section('leftTitle', 'Mulai Gratis')
@section('leftSubtitle', 'Satu akun untuk seluruh insight bisnismu.')

@section('features')
    <div class="flex items-center gap-3 text-gray-600">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>Tanpa olah data manual</span>
    </div>
    <div class="flex items-center gap-3 text-gray-600">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>AI paham konteks bisnismu</span>
    </div>
    <div class="flex items-center gap-3 text-gray-600">
        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span>Gratis untuk mulai mencoba</span>
    </div>
@endsection

@section('content')
    <h2 class="text-3xl font-bold text-gray-900 mb-8">Daftar Akun</h2>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white"
                placeholder="Nama Pemilik Bisnis">
            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="business_name" class="block text-sm font-medium text-gray-700 mb-1">Nama Bisnis</label>
            <input id="business_name" type="text" name="business_name" value="{{ old('business_name') }}" required
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white"
                placeholder="Contoh: Kopi Senja">
            @error('business_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white"
                placeholder="nama@bisnis.id">
            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
            <input id="password" type="password" name="password" required
                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white"
                placeholder="Minimal 6 Karakter">
            @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-3.5 rounded-xl transition shadow-lg shadow-brand-500/30 mt-4">
            Buat Akun
        </button>

        <div class="text-center mt-6 text-sm text-gray-600">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-brand-600 font-semibold hover:text-brand-700">Masuk</a>
        </div>
    </form>
@endsection