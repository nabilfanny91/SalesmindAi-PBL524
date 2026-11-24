<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SalesMind AI - @yield('title', 'Auth')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: { 50: '#f0f3ff', 100: '#e0e7ff', 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca', 900: '#312e81' }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gray-800 antialiased bg-[#fafafa] min-h-screen flex">

    <!-- SISI KIRI (Branding) -->
    <div class="hidden lg:flex w-1/2 bg-white flex-col justify-between p-12 border-r border-gray-200 relative">
        <div>
            <a href="/" class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                </div>
                <div>
                    <div class="font-bold text-xl text-gray-900 tracking-tight">SalesMind <span class="text-brand-600">AI</span></div>
                    <div class="text-xs text-gray-500">Business Intelligence & AI Assistant</div>
                </div>
            </a>
        </div>

        <div class="max-w-md">
            <h1 class="text-4xl font-bold mb-4">@yield('leftTitle')</h1>
            <p class="text-gray-500 text-lg">@yield('leftSubtitle')</p>
        </div>

        <div class="space-y-4">
            <!-- Mengecek apakah ada section 'features' yang dikirim -->
            @hasSection('features')
                @yield('features')
            @endif
        </div>
    </div>

    <!-- SISI KANAN (Form) -->
    <div class="w-full lg:w-1/2 bg-[#f4f5f9] flex items-center justify-center p-6 sm:p-12 relative">
        <div class="w-full max-w-md">
            <a href="/" class="lg:hidden flex items-center gap-2 text-sm text-brand-600 font-medium mb-8 hover:text-brand-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke beranda
            </a>

            <!-- Ini adalah tempat form akan dimunculkan -->
            @yield('content')
            
            <div class="mt-8 text-center hidden lg:block">
                <a href="/" class="inline-flex items-center gap-2 text-sm text-brand-600 font-medium hover:text-brand-700 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke beranda
                </a>
            </div>
        </div>
    </div>

</body>
</html>