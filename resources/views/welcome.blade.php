<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalesMind AI - Ubah Catatan Penjualan Jadi Keputusan Bisnis</title>
    <!-- Menggunakan Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: {
                            50: '#f0f3ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#312e81',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar untuk tampilan lebih rapi */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c7c7c7; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #a8a8a8; }
    </style>
</head>
<body class="font-sans text-gray-800 antialiased bg-[#fafafa] overflow-x-hidden">

    <!-- 1. TOP BANNER -->
    <div class="bg-brand-600 text-white text-xs md:text-sm text-center py-2 font-medium">
        🎉 Penawaran Peluncuran: diskon 20% paket tahunan <span class="font-bold underline cursor-pointer">GRATIS14</span> — daftar tanpa verifikasi email!
    </div>

    <!-- 2. NAVBAR -->
    <nav class="flex items-center justify-between px-6 md:px-16 py-4 bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <!-- Logo Placeholder -->
            <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center text-white font-bold">S</div>
            <span class="font-bold text-xl tracking-tight">SalesMind <span class="text-brand-600">AI</span></span>
        </div>
        
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
            <a href="#fitur" class="hover:text-brand-600 transition">Fitur</a>
            <a href="#ai" class="hover:text-brand-600 transition">AI Assistant</a>
            <a href="#ckerja" class="hover:text-brand-600 transition">Cara Kerja</a>
            <a href="#harga" class="hover:text-brand-600 transition">Harga</a>
            <a href="#faq" class="hover:text-brand-600 transition">FAQ</a>
        </div>

        <div class="flex items-center gap-4">
            <a href="{{route('login')}}" class="text-sm font-medium text-gray-700 hover:text-brand-600 hidden md:block">Masuk</a>
            <a href="{{route('login')}}" class="bg-brand-600 hover:bg-brand-700 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-lg shadow-brand-500/30">Coba Gratis</a>
        </div>
    </nav>

    <!-- 3. HERO SECTION -->
    <section class="max-w-7xl mx-auto px-6 md:px-16 py-16 md:py-24 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Kiri: Teks -->
        <div>
            <div class="inline-flex items-center gap-2 bg-brand-50 text-brand-600 px-4 py-1.5 rounded-full text-xs font-semibold mb-6 border border-brand-100">
                <span class="w-2 h-2 rounded-full bg-green-500"></span> AI Assistant siap menjawab dari data penjualanmu
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold leading-[1.1] text-gray-900 mb-6">
                Ubah Catatan Penjualan Jadi <span class="text-brand-600">Keputusan Bisnis</span> yang Cerdas
            </h1>
            <p class="text-gray-500 text-lg mb-8 leading-relaxed max-w-lg">
                SalesMind AI membantu UMKM mencatat transaksi, mengelola stok, dan memahami bisnis lewat dashboard Business Intelligence interaktif — plus AI Assistant yang siaga 24/7. Daftar langsung, tanpa verifikasi email.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 mb-6">
                <a href="{{route('login')}}" class="bg-brand-600 hover:bg-brand-700 text-white px-8 py-3.5 rounded-xl font-semibold text-center transition shadow-lg shadow-brand-500/40">Mulai Gratis Sekarang →</a>
                <a href="#harga" class="bg-white border border-gray-200 hover:border-gray-300 text-gray-700 px-8 py-3.5 rounded-xl font-semibold text-center transition">Lihat Paket Harga</a>
            </div>
            <div class="flex flex-wrap items-center gap-4 text-xs text-gray-500 font-medium">
                <span class="flex items-center gap-1"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Gratis selamanya</span>
                <span class="flex items-center gap-1"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Tanpa kartu kredit</span>
                <span class="flex items-center gap-1"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Data contoh otomatis</span>
            </div>
        </div>

        <!-- Kanan: Mockup Dashboard (Simulasi Visual) -->
        <div class="relative">
            <!-- Background Glow -->
            <div class="absolute inset-0 bg-brand-100 rounded-3xl transform rotate-3 scale-105 opacity-50 blur-lg"></div>
            
            <!-- Kartu Dashboard Utama -->
            <div class="relative bg-white rounded-2xl shadow-2xl border border-gray-100 p-4">
                <!-- Header Dashboard -->
                <div class="flex items-center gap-2 mb-6 border-b border-gray-50 pb-3">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    <span class="ml-2 text-xs text-gray-400">salesmind.ai/dashboard</span>
                </div>
                
                <div class="flex gap-4">
                    <!-- Sidebar Mockup -->
                    <div class="w-1/4 hidden sm:block">
                        <div class="space-y-3 text-xs text-gray-500">
                            <div class="bg-brand-50 text-brand-600 px-3 py-2 rounded-lg font-semibold">Dashboard</div>
                            <div class="px-3 py-2">Transaksi</div>
                            <div class="px-3 py-2">Produk</div>
                            <div class="px-3 py-2">AI Assistant</div>
                            <div class="px-3 py-2">Laporan</div>
                        </div>
                    </div>
                    
                    <!-- Konten Dashboard Mockup -->
                    <div class="flex-1">
                        <!-- Stat Cards -->
                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <div class="border border-gray-100 rounded-lg p-2 shadow-sm">
                                <div class="text-[10px] text-gray-400 mb-1">TOTAL OMZET</div>
                                <div class="font-bold text-sm">Rp 48,2jt</div>
                                <div class="text-[10px] text-green-500">↑ 24%</div>
                            </div>
                            <div class="border border-gray-100 rounded-lg p-2 shadow-sm">
                                <div class="text-[10px] text-gray-400 mb-1">TRANSAKSI</div>
                                <div class="font-bold text-sm">1.284</div>
                                <div class="text-[10px] text-green-500">↑ 12%</div>
                            </div>
                            <div class="border border-gray-100 rounded-lg p-2 shadow-sm">
                                <div class="text-[10px] text-gray-400 mb-1">STOK KRITIS</div>
                                <div class="font-bold text-sm">7 item</div>
                                <div class="text-[10px] text-red-500">perlu restock</div>
                            </div>
                        </div>
                        <!-- Chart Mockup -->
                        <div class="border border-gray-100 rounded-lg p-3 h-28 flex items-end justify-between gap-1 shadow-sm">
                            <div class="w-full bg-brand-100 rounded-t-sm h-1/4"></div>
                            <div class="w-full bg-brand-100 rounded-t-sm h-2/4"></div>
                            <div class="w-full bg-brand-100 rounded-t-sm h-3/4"></div>
                            <div class="w-full bg-brand-500 rounded-t-sm h-full"></div>
                            <div class="w-full bg-brand-100 rounded-t-sm h-1/4"></div>
                            <div class="w-full bg-brand-100 rounded-t-sm h-2/4"></div>
                            <div class="w-full bg-brand-100 rounded-t-sm h-3/4"></div>
                            <div class="w-full bg-brand-500 rounded-t-sm h-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Floating Badge AI (Kanan Bawah) -->
            <div class="absolute -bottom-6 -right-4 md:right-10 bg-white p-3 rounded-xl shadow-xl border border-gray-100 flex items-center gap-3 w-64 z-10">
                <div class="bg-brand-50 p-2 rounded-lg text-xl">🤖</div>
                <div>
                    <div class="text-xs font-bold text-gray-800">"Stok Kopi Hitam habis 3 hari lagi!"</div>
                    <div class="text-[10px] text-gray-500">AI Assistant</div>
                </div>
            </div>

            <!-- Floating Badge Omzet (Kiri Atas) -->
            <div class="absolute -top-6 -left-6 md:-left-10 bg-white p-3 rounded-xl shadow-xl border border-gray-100 flex items-center gap-3 z-10">
                <div class="bg-green-50 p-2 rounded-lg text-green-500 text-xl">📈</div>
                <div>
                    <div class="text-xs font-bold text-gray-800">+24% Omzet</div>
                    <div class="text-[10px] text-gray-500">vs bulan lalu</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. STATS SECTION -->
    <section class="border-t border-gray-200 bg-white">
        <div class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-3xl md:text-4xl font-extrabold text-brand-600 mb-2">500+</div>
                <div class="text-sm text-gray-500 font-medium">UMKM & pemilik toko</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-extrabold text-brand-600 mb-2">1.200.000+</div>
                <div class="text-sm text-gray-500 font-medium">Transaksi tercatat</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-extrabold text-brand-600 mb-2">14 jam</div>
                <div class="text-sm text-gray-500 font-medium">Hemat waktu per bulan</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-extrabold text-brand-600 mb-2">98%</div>
                <div class="text-sm text-gray-500 font-medium">Puas dengan insight AI</div>
            </div>
        </div>
    </section>

    <!-- 5. MASALAHNYA SECTION -->
    <section class="max-w-6xl mx-auto px-6 py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Kiri: List Masalah -->
        <div>
            <div class="text-brand-600 font-bold text-xs tracking-wider mb-3 uppercase">Masalahnya</div>
            <h2 class="text-4xl font-bold leading-tight mb-8">Masih catat penjualan manual di Excel?</h2>
            
            <div class="space-y-4">
                <!-- Masalah 1 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0 font-bold">✕</div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm mb-1">Rekap makan waktu berjam-jam</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Mengolah ratusan transaksi tiap bulan tu melelahkan dan rawan salah.</p>
                    </div>
                </div>
                <!-- Masalah 2 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0 font-bold">✕</div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm mb-1">Stok sering tak terpantau</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Produk habis tanpa sadar, atau justru numpuk dan tidak laku.</p>
                    </div>
                </div>
                <!-- Masalah 3 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex gap-4">
                    <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center flex-shrink-0 font-bold">✕</div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm mb-1">Data nggak jadi insight</h4>
                        <p class="text-gray-500 text-xs leading-relaxed">Sudah mencatat bertahun-tahun, tapi tetap tidak tahu tren dan produk terlaris.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kanan: Testimonial Card Gelap -->
        <div class="bg-[#1a1625] p-8 md:p-12 rounded-[2rem] shadow-2xl text-white h-full flex flex-col justify-center relative overflow-hidden">
            <!-- Efek Glow -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-brand-500 rounded-full blur-3xl opacity-20 -mr-20 -mt-20"></div>
            
            <p class="text-xl md:text-2xl font-medium leading-relaxed mb-8 relative z-10">
                "Setiap malam tutup buku saya pakai Excel. Sekarang SalesMind AI merangkum semuanya dalam 5 menit — bahkan memberi tahu produk apa yang harus saya restock besok."
            </p>
            <div class="flex items-center gap-4 relative z-10">
                <div class="w-12 h-12 rounded-full bg-brand-600 flex items-center justify-center font-bold text-lg text-white shadow-inner">RW</div>
                <div>
                    <div class="font-bold">Ratna Wijaya</div>
                    <div class="text-sm text-gray-400">Pemilik Toko Kelontong, Batam</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FITUR UTAMA SECTION -->
    <section id="fitur" class="bg-white border-y border-gray-100 py-20 scroll-mt-20">
        <div class="max-w-6xl mx-auto px-6 text-center mb-12">
            <div class="text-brand-600 font-bold text-xs tracking-wider mb-3 uppercase">Fitur Utama</div>
            <h2 class="text-4xl font-bold mb-4">Satu platform untuk seluruh<br>operasional jualanmu</h2>
            <p class="text-gray-500">Semua fitur di bawah sudah aktif dan bisa langsung kamu coba setelah mendaftar.</p>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Fitur 1 -->
            <div class="border border-gray-100 p-8 rounded-2xl hover:shadow-lg transition bg-white">
                <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-2xl mb-6">📝</div>
                <h3 class="font-bold text-lg mb-2">Pengelolaan Transaksi</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Catat penjualan dalam hitungan detik dengan keranjang multi-produk. Stok otomatis terupdate.</p>
            </div>
            <!-- Fitur 2 -->
            <div class="border border-gray-100 p-8 rounded-2xl hover:shadow-lg transition bg-white">
                <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-2xl mb-6">📦</div>
                <h3 class="font-bold text-lg mb-2">Manajemen Produk & Stok</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Pantau ketersediaan stok real-time dengan peringatan otomatis sebelum produk habis.</p>
            </div>
            <!-- Fitur 3 -->
            <div class="border border-gray-100 p-8 rounded-2xl hover:shadow-lg transition bg-white">
                <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-2xl mb-6">📊</div>
                <h3 class="font-bold text-lg mb-2">Dashboard BI Interaktif</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Omzet, tren penjualan, produk terlaris, dan stok kritis tampil dalam grafik yang mudah dipahami.</p>
            </div>
            <!-- Fitur 4 -->
            <div class="border border-gray-100 p-8 rounded-2xl hover:shadow-lg transition bg-white relative">
                <div class="absolute top-6 right-6 bg-brand-100 text-brand-700 text-[10px] font-bold px-2 py-1 rounded-md">PRO</div>
                <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-2xl mb-6">🤖</div>
                <h3 class="font-bold text-lg mb-2">AI Assistant</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Tanya apa saja soal datamu — AI menjawab lengkap dengan insight yang bisa langsung dieksekusi.</p>
            </div>
            <!-- Fitur 5 -->
            <div class="border border-gray-100 p-8 rounded-2xl hover:shadow-lg transition bg-white relative">
                <div class="absolute top-6 right-6 bg-brand-100 text-brand-700 text-[10px] font-bold px-2 py-1 rounded-md">PRO</div>
                <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-2xl mb-6">📑</div>
                <h3 class="font-bold text-lg mb-2">Laporan & Ekspor</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Laporan per periode otomatis tersusun, siap diekspor ke CSV/Excel atau dicetak.</p>
            </div>
            <!-- Fitur 6 -->
            <div class="border border-gray-100 p-8 rounded-2xl hover:shadow-lg transition bg-white">
                <div class="w-12 h-12 bg-brand-50 rounded-xl flex items-center justify-center text-2xl mb-6">🧠</div>
                <h3 class="font-bold text-lg mb-2">Analisis Penjualan</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Data mentah diubah jadi informasi: kategori terkual, hari teramai, dan pertumbuhan omzet.</p>
            </div>
        </div>
    </section>

    <!-- 7. AI ASSISTANT SECTION (GELAP) -->
    <section id="ai" class="bg-[#0f0a1c] py-24 scroll-mt-20">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Kiri: Teks -->
            <div class="text-white">
                <div class="text-brand-400 font-bold text-xs tracking-wider mb-3 uppercase">AI Assistant</div>
                <h2 class="text-4xl font-bold mb-6 leading-tight">Punya "staf analis" yang siaga<br>24/7 — tanpa gaji bulanan</h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    AI Assistant membaca semua data di toko, lalu menjawab pertanyaan bisnis dan memberikan rekomendasi langsung untuk Anda.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-sm text-gray-300"><strong class="text-white">Jawaban berbasis data nyata</strong> — bukan tebakan, semua dari transaksimu sendiri.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-sm text-gray-300"><strong class="text-white">Rekomendasi yang bisa dieksekusi</strong> — dari restock sampai strategi promosi.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-sm text-gray-300"><strong class="text-white">Tersedia kapan pun</strong> — cukup ketik pertanyaanmu dalam bahasa sehari-hari.</span>
                    </li>
                </ul>
                <a href="{{route('demo.ai')}}" class="inline-block bg-white text-gray-900 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition shadow-lg">Coba AI Assistant Sekarang</a>
            </div>

            <!-- Kanan: Mockup Chat AI -->
            <div class="bg-[#18122b] border border-white/10 rounded-2xl p-6 shadow-2xl relative">
                <div class="flex items-center gap-2 mb-6 border-b border-white/10 pb-4">
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    <span class="text-white text-sm font-medium">SalesMind AI Assistant</span>
                </div>
                
                <!-- Chat User -->
                <div class="flex justify-end mb-6">
                    <div class="bg-brand-600 text-white p-3 rounded-2xl rounded-tr-sm text-sm max-w-[80%] shadow-lg">
                        Buatkan produk apa yang paling menguntungkan, dan apa yang harus saya lakukan?
                    </div>
                </div>

                <!-- Chat AI -->
                <div class="bg-white/5 p-4 rounded-2xl rounded-tl-sm border border-white/10">
                    <p class="text-xs text-gray-400 mb-3">Berdasarkan data transaksi bulan ini:</p>
                    <div class="space-y-3">
                        <div class="bg-brand-500/20 text-brand-100 p-3 rounded-lg text-sm border border-brand-500/30">
                            🥇 <strong>Kopi Susu Gula Aren</strong> — 412 terjual, margin tertinggi.
                        </div>
                        <div class="bg-white/5 text-gray-300 p-3 rounded-lg text-sm">
                            💡 <strong>Rekomendasi:</strong> stok tinggal 4 hari, segera restock. Pertimbangkan paket spesial — kombinasi promo <em>bundling</em> minuman + makanan.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CARA KERJA SECTION -->
    <section id="ckerja" class="py-20 bg-white scroll-mt-20">
        <div class="max-w-6xl mx-auto px-6 text-center mb-16">
            <div class="text-brand-600 font-bold text-xs tracking-wider mb-3 uppercase">Cara Kerja</div>
            <h2 class="text-4xl font-bold mb-4">Jalankan dalam 3 langkah<br>sederhana</h2>
            <p class="text-gray-500">Tidak perlu jago Excel, tidak perlu training berhari-hari.</p>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Langkah 1 -->
            <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm text-left">
                <h3 class="font-bold text-lg mb-3">Daftar akun</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Isi nama, email, dan password. Tanpa verifikasi email — langsung masuk ke dashboard.</p>
            </div>
            <!-- Langkah 2 -->
            <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm text-left">
                <h3 class="font-bold text-lg mb-3">Catat produk & penjualan</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Tambahkan produk, lalu rekam transaksi. Stok dan data dashboard otomatis terupdate.</p>
            </div>
            <!-- Langkah 3 -->
            <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm text-left">
                <h3 class="font-bold text-lg mb-3">Pantau & tanya ke AI</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Lihat tren bisnis mu berkembang, dan tanyakan apa saja ke AI Assistant kapan pun.</p>
            </div>
        </div>
    </section>

    <!-- 9. HARGA SECTION -->
   <section id="harga" class="py-20 bg-[#fafafa] scroll-mt-20">
    <div class="max-w-5xl mx-auto px-6 text-center mb-12">
        <div class="text-brand-600 font-bold text-xs tracking-wider mb-3 uppercase">Harga</div>
        <h2 class="text-4xl font-bold mb-4">Mulai gratis, upgrade saat<br>bisnismu tumbuh</h2>
        <p class="text-gray-500 mb-8">Tanpa kontrak, tanpa biaya tersembunyi. Batalkan kapan saja.</p>
        
        <!-- Toggle Switch -->
        <div class="flex items-center justify-center gap-3">
            <span id="label-bulanan" class="text-sm font-bold text-gray-900 transition-colors">Bulanan</span>
            
            <!-- Switch Button -->
            <div id="pricing-toggle" class="w-14 h-7 bg-brand-600 rounded-full relative cursor-pointer transition-colors duration-300">
                <div id="toggle-circle" class="w-5 h-5 bg-white rounded-full absolute top-1 left-1 transition-transform duration-300 shadow-sm"></div>
            </div>
            
            <span id="label-tahunan" class="text-sm font-medium text-gray-500 transition-colors">Tahunan <span class="text-green-500 text-xs ml-1 bg-green-100 px-2 py-0.5 rounded-full">Hemat 20%</span></span>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <!-- Paket Gratis -->
        <div class="bg-white border border-gray-200 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
            <h3 class="text-xl font-bold mb-2">Gratis</h3>
            <p class="text-gray-500 text-sm mb-6">Untuk mulai digitalisasi usaha dari benci catat manual.</p>
            
            <div class="flex items-end gap-1 mb-1">
                <div class="text-4xl font-extrabold">Rp 0</div>
                <div class="text-lg font-medium text-gray-500 mb-1">/bulan</div>
            </div>
            <p class="text-gray-400 text-sm mb-6 pb-6 border-b border-gray-100">Gratis selamanya</p>
            
            <a href="#" class="block w-full py-3 text-center border border-gray-300 rounded-xl font-semibold text-gray-700 hover:bg-gray-50 transition mb-8">Mulai Gratis</a>
            
            <ul class="space-y-3 text-sm">
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 100 transaksi per bulan</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Hingga 20 produk & stok</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dashboard dasar (omzet & tren)</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Laporan per periode</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 1 pengguna</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> AI Assistant — 10 pertanyaan/bulan</li>
                <li class="flex items-center gap-2 text-gray-400"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Ekspor laporan CSV/Excel</li>
                <li class="flex items-center gap-2 text-gray-400"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> AI tanpa batas & dukungan prioritas</li>
            </ul>
        </div>

        <!-- Paket Pro -->
        <div class="bg-white border-2 border-brand-500 rounded-3xl p-8 shadow-xl relative transform md:-translate-y-4 hover:shadow-2xl hover:-translate-y-6 transition-all duration-300">
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-brand-600 text-white text-xs font-bold px-4 py-1 rounded-full uppercase tracking-wide shadow-md">⭐ Paling Populer</div>
            
            <h3 class="text-xl font-bold mb-2">Pro</h3>
            <p class="text-gray-500 text-sm mb-6">Untuk UMKM yang serius mengembangkan bisnisnya dengan data.</p>
            
            <!-- Harga Dinamis -->
            <div class="flex items-end gap-1 mb-1">
                <div id="harga-pro" class="text-4xl font-extrabold">Rp 45.999</div>
                <div class="text-lg font-medium text-gray-500 mb-1">/bulan</div>
            </div>
            <!-- Teks Keterangan Dinamis -->
            <p id="keterangan-pro" class="text-gray-400 text-sm mb-6 pb-6 border-b border-gray-100">Ditagih bulanan</p>
            
            <a href="#" class="block w-full py-3 text-center bg-brand-600 hover:bg-brand-700 rounded-xl font-semibold text-white transition mb-8 shadow-lg shadow-brand-500/30">Coba Pro Sekarang</a>
            
            <ul class="space-y-3 text-sm">
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Transaksi & produk <strong>tanpa batas</strong></li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dashboard BI lengkap</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> AI Assistant <strong>tanpa batas</strong></li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Ekspor laporan CSV/Excel</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Analisis tren & prediksi penjualan</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Peringatan stok pintar</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Hingga 5 pengguna/karyawan</li>
                <li class="flex items-center gap-2"><svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Dukungan prioritas (WhatsApp)</li>
            </ul>
        </div>
    </div>
</section>

    <!-- 10. TESTIMONI SECTION -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center mb-12">
            <div class="text-brand-600 font-bold text-xs tracking-wider mb-3 uppercase">Testimoni</div>
            <h2 class="text-4xl font-bold mb-4">Dipercaya pelaku usaha seperti<br>kamu</h2>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Testi 1 -->
            <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm">
                <div class="text-yellow-400 text-lg mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-600 text-sm mb-6 leading-relaxed">"Dulu tutup buku butuh semalaman pakai Excel. Sekarang cukup 5 menit, laporannya sudah jadi—lengkap dengan grafiknya."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold text-sm">RW</div>
                    <div>
                        <div class="font-bold text-sm">Ratna Wijaya</div>
                        <div class="text-xs text-brand-600">Pemilik Toko Kelontong Batam, Batam</div>
                    </div>
                </div>
            </div>
            <!-- Testi 2 -->
            <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm">
                <div class="text-yellow-400 text-lg mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-600 text-sm mb-6 leading-relaxed">"AI Assistant-nya luar biasa. Tanya produk apa yang harus restock, langsung dijawab lengkap dengan datanya. Hemat waktu mikir sendiri."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold text-sm">BS</div>
                    <div>
                        <div class="font-bold text-sm">Budi Santoso</div>
                        <div class="text-xs text-brand-600">Owner Distro EightyNine</div>
                    </div>
                </div>
            </div>
            <!-- Testi 3 -->
            <div class="bg-white border border-gray-100 p-8 rounded-2xl shadow-sm">
                <div class="text-yellow-400 text-lg mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-600 text-sm mb-6 leading-relaxed">"Dashboard-nya bikin saya paham bisnis sendiri. Jadi tahu hari ramai, menu terlaris, dan kapan waktu tepat bikin promo."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-600 text-white flex items-center justify-center font-bold text-sm">SM</div>
                    <div>
                        <div class="font-bold text-sm">Sinta Maharani</div>
                        <div class="text-xs text-brand-600">Owner Kopi Kita Cafe</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. FAQ SECTION -->
    <section id="faq" class="py-20 bg-[#fafafa]">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="text-brand-600 font-bold text-xs tracking-wider mb-3 uppercase">FAQ</div>
                <h2 class="text-4xl font-bold mb-4">Pertanyaan yang sering diajukan</h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden faq-item">
                    <button class="w-full text-left px-6 py-4 font-semibold text-gray-800 flex justify-between items-center faq-btn">
                        Apakah perlu verifikasi email untuk mendaftar?
                        <span class="text-brand-500 transform transition-transform duration-200">+</span>
                    </button>
                    <div class="px-6 pb-4 text-sm text-gray-500 hidden faq-content">
                        Tidak perlu! Anda bisa langsung mendaftar menggunakan email dan password, lalu langsung masuk ke dashboard tanpa harus mengecek email verifikasi.
                    </div>
                </div>
                <!-- FAQ Item 2 -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden faq-item">
                    <button class="w-full text-left px-6 py-4 font-semibold text-gray-800 flex justify-between items-center faq-btn">
                        Apa bedanya paket Gratis dan Pro?
                        <span class="text-brand-500 transform transition-transform duration-200">+</span>
                    </button>
                    <div class="px-6 pb-4 text-sm text-gray-500 hidden faq-content">
                        Paket Gratis dibatasi untuk 100 transaksi/bulan dan 20 produk. Paket Pro memberikan akses tanpa batas, fitur ekspor, analisis prediktif, dan akses AI Assistant tanpa batas.
                    </div>
                </div>
                <!-- FAQ Item 3 -->
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden faq-item">
                    <button class="w-full text-left px-6 py-4 font-semibold text-gray-800 flex justify-between items-center faq-btn">
                        Bagaimana jika kuota transaksi Gratis habis?
                        <span class="text-brand-500 transform transition-transform duration-200">+</span>
                    </button>
                    <div class="px-6 pb-4 text-sm text-gray-500 hidden faq-content">
                        Anda tidak akan kehilangan data. Sistem akan menghentikan sementara input transaksi baru hingga bulan berikutnya, atau Anda bisa langsung upgrade ke paket Pro saat itu juga.
                    </div>
                </div>
                 <!-- FAQ Item 4 -->
                 <div class="bg-white border border-gray-200 rounded-xl overflow-hidden faq-item">
                    <button class="w-full text-left px-6 py-4 font-semibold text-gray-800 flex justify-between items-center faq-btn">
                        Apakah data penjualan saya aman?
                        <span class="text-brand-500 transform transition-transform duration-200">+</span>
                    </button>
                    <div class="px-6 pb-4 text-sm text-gray-500 hidden faq-content">
                        Sangat aman. Data Anda dienkripsi dan disimpan di server cloud yang aman. Kami tidak pernah membagikan data penjualan Anda ke pihak ketiga.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. CTA BANNER SECTION -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-gradient-to-r from-brand-600 to-brand-500 rounded-3xl p-12 md:p-16 text-center text-white relative overflow-hidden shadow-2xl">
                <!-- Dekorasi Background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full blur-3xl opacity-10"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-black rounded-full blur-3xl opacity-10"></div>
                
                <h2 class="text-3xl md:text-4xl font-bold mb-4 relative z-10">Siap bikin bisnismu makin pintar?</h2>
                <p class="text-brand-100 mb-8 max-w-xl mx-auto relative z-10">Bergabung dengan ratusan UMKM yang sudah berhenti menebak dan mulai mengambil keputusan berbasis data.</p>
                <a href="#" class="inline-block bg-white text-brand-600 px-8 py-3.5 rounded-xl font-bold hover:bg-gray-50 transition shadow-lg relative z-10">Mulai Gratis Sekarang →</a>
                <p class="text-xs text-brand-200 mt-4 relative z-10">Gratis selamanya • Tanpa verifikasi email • Data contoh otomatis tersedia</p>
            </div>
        </div>
    </section>

    <!-- 13. FOOTER -->
    <footer class="bg-[#0b0812] text-gray-400 py-16">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="col-span-2 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center text-white font-bold">S</div>
                    <span class="font-bold text-xl text-white tracking-tight">SalesMind <span class="text-brand-500">AI</span></span>
                </div>
                <p class="text-sm leading-relaxed mb-6">Platform Business Intelligence dan AI Assistant untuk UMKM pendataan penjualan dan pertumbuhan bisnis UMKM.</p>
            </div>
            
            <div>
                <h4 class="text-white font-bold mb-4 text-sm">Produk</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Fitur</a></li>
                    <li><a href="#" class="hover:text-white transition">Harga</a></li>
                    <li><a href="#" class="hover:text-white transition">AI Assistant</a></li>
                    <li><a href="#" class="hover:text-white transition">Cara Kerja</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-white font-bold mb-4 text-sm">Perusahaan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                    <li><a href="#" class="hover:text-white transition">Karier</a></li>
                    <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-white font-bold mb-4 text-sm">Bantuan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition">Panduan Penggunaan</a></li>
                    <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:text-white transition">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        
        <div class="max-w-6xl mx-auto px-6 mt-12 pt-8 border-t border-white/10 text-xs text-center md:text-left flex flex-col md:flex-row justify-between items-center">
            <p>&copy; 2026 SalesMind AI. Hak cipta dilindungi.</p>
        </div>
    </footer>

    <!-- Script untuk FAQ Accordion -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqButtons = document.querySelectorAll('.faq-btn');
            
            faqButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('span');
                    
                    // Toggle visibility
                    if (content.classList.contains('hidden')) {
                        // Tutup semua FAQ lain (opsional, hapus baris ini jika ingin multiple open)
                        document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                        document.querySelectorAll('.faq-btn span').forEach(i => {
                            i.textContent = '+';
                            i.classList.remove('rotate-45');
                        });

                        // Buka yang diklik
                        content.classList.remove('hidden');
                        icon.textContent = '×'; // Ubah icon jadi silang
                    } else {
                        content.classList.add('hidden');
                        icon.textContent = '+';
                    }
                });
            });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('pricing-toggle');
        const toggleCircle = document.getElementById('toggle-circle');
        const hargaPro = document.getElementById('harga-pro');
        const ketPro = document.getElementById('keterangan-pro');
        const labelBulanan = document.getElementById('label-bulanan');
        const labelTahunan = document.getElementById('label-tahunan');

        let isTahunan = false;

        toggleBtn.addEventListener('click', function() {
            isTahunan = !isTahunan;

            if (isTahunan) {
                // Animasi geser ke kanan
                toggleCircle.classList.remove('left-1');
                toggleCircle.classList.add('translate-x-7'); // Geser sejauh 7 (28px)
                toggleBtn.classList.replace('bg-brand-600', 'bg-green-500'); // Opsional: ubah warna jadi hijau

                // Ubah Teks Harga
                hargaPro.innerText = 'Rp 36.799';
                ketPro.innerText = 'Rp 441.588 / tahun (Hemat 20%)';
                ketPro.classList.replace('text-gray-400', 'text-green-600');
                ketPro.classList.add('font-medium');
                
                // Ubah gaya teks label
                labelBulanan.classList.replace('text-gray-900', 'text-gray-500');
                labelBulanan.classList.replace('font-bold', 'font-medium');
                labelTahunan.classList.replace('text-gray-500', 'text-gray-900');
                labelTahunan.classList.replace('font-medium', 'font-bold');
            } else {
                // Animasi geser kembali ke kiri
                toggleCircle.classList.remove('translate-x-7');
                toggleCircle.classList.add('left-1');
                toggleBtn.classList.replace('bg-green-500', 'bg-brand-600');

                // Kembalikan Teks Harga
                hargaPro.innerText = 'Rp 45.999';
                ketPro.innerText = 'Ditagih bulanan';
                ketPro.classList.replace('text-green-600', 'text-gray-400');
                ketPro.classList.remove('font-medium');
                
                // Kembalikan gaya teks label
                labelBulanan.classList.replace('text-gray-500', 'text-gray-900');
                labelBulanan.classList.replace('font-medium', 'font-bold');
                labelTahunan.classList.replace('text-gray-900', 'text-gray-500');
                labelTahunan.classList.replace('font-bold', 'font-medium');
            }
        });
    });
</script>
</body>
</html>