<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo AI Assistant - SalesMind AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: { 50: '#f0f3ff', 100: '#e0e7ff', 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca' }
                    }
                }
            }
        }
    </script>
    <style>
        /* Animasi loading (titik-titik) */
        .typing-dots span {
            animation: blink 1.4s infinite both;
            display: inline-block;
            width: 6px;
            height: 6px;
            background-color: currentColor;
            border-radius: 50%;
            margin: 0 2px;
        }
        .typing-dots span:nth-child(2) { animation-delay: 0.2s; }
        .typing-dots span:nth-child(3) { animation-delay: 0.4s; }
        @keyframes blink {
            0% { opacity: 0.2; transform: translateY(0); }
            20% { opacity: 1; transform: translateY(-2px); }
            100% { opacity: 0.2; transform: translateY(0); }
        }
    </style>
</head>
<body class="font-sans text-gray-800 antialiased bg-[#fafafa] min-h-screen flex flex-col">

    <!-- Navbar Simple -->
    <nav class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center sticky top-0 z-10">
        <a href="/" class="flex items-center gap-2">
            <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center text-white font-bold">S</div>
            <span class="font-bold text-xl tracking-tight">SalesMind <span class="text-brand-600">AI</span></span>
        </a>
        <a href="/" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition">&larr; Kembali ke Beranda</a>
    </nav>

    <!-- Main Chat Area -->
    <main class="flex-1 max-w-4xl w-full mx-auto p-4 flex flex-col h-[calc(100vh-70px)]">
        
        <!-- Info Card -->
        <div class="bg-brand-50 border border-brand-100 rounded-xl p-4 mb-4 text-sm text-brand-700 flex items-start gap-3 shadow-sm">
            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div>
                <strong>Mode Simulasi (Dummy Data)</strong>. Silakan klik salah satu pertanyaan contoh di bawah ini atau ketik pertanyaan Anda sendiri. AI akan merespons menggunakan data toko fiktif (Kopi Senja).
            </div>
        </div>

        <!-- Chat Container -->
        <div id="chat-container" class="flex-1 bg-white border border-gray-200 rounded-2xl shadow-sm p-6 overflow-y-auto mb-4 flex flex-col gap-6 scroll-smooth">
            <!-- Pesan Sambutan AI -->
            <div class="flex items-start gap-4">
                <div class="w-8 h-8 bg-brand-100 rounded-full flex items-center justify-center flex-shrink-0 text-brand-600">🤖</div>
                <div class="bg-gray-50 border border-gray-100 p-4 rounded-2xl rounded-tl-sm text-sm leading-relaxed max-w-[85%]">
                    Halo! Saya SalesMind AI Assistant. Saya sudah menganalisis data penjualan **Kopi Senja** bulan ini. Ada yang ingin Anda ketahui tentang tren penjualan, stok, atau rekomendasi bisnis hari ini?
                </div>
            </div>
        </div>

        <!-- Suggestions (Pertanyaan Cepat) -->
        <div class="flex gap-2 overflow-x-auto pb-2 scrollbar-hide mb-2">
            <button onclick="sendSuggestion('Produk apa yang paling laris bulan ini?')" class="whitespace-nowrap bg-white border border-gray-200 text-gray-600 hover:bg-brand-50 hover:text-brand-600 hover:border-brand-200 px-4 py-2 rounded-full text-xs font-medium transition shadow-sm">
                📈 Produk paling laris?
            </button>
            <button onclick="sendSuggestion('Stok apa yang harus segera saya restock?')" class="whitespace-nowrap bg-white border border-gray-200 text-gray-600 hover:bg-brand-50 hover:text-brand-600 hover:border-brand-200 px-4 py-2 rounded-full text-xs font-medium transition shadow-sm">
                📦 Cek stok kritis
            </button>
            <button onclick="sendSuggestion('Berikan ide promo untuk akhir pekan ini.')" class="whitespace-nowrap bg-white border border-gray-200 text-gray-600 hover:bg-brand-50 hover:text-brand-600 hover:border-brand-200 px-4 py-2 rounded-full text-xs font-medium transition shadow-sm">
                💡 Ide promo akhir pekan
            </button>
        </div>

        <!-- Input Form -->
        <form id="chat-form" class="flex gap-2 bg-white border border-gray-200 rounded-xl p-2 shadow-sm">
            <input type="text" id="chat-input" placeholder="Tanya sesuatu tentang bisnis Anda..." class="flex-1 bg-transparent border-none outline-none px-4 py-2 text-sm" autocomplete="off" required>
            <button type="submit" class="bg-brand-600 hover:bg-brand-700 text-white p-2.5 rounded-lg transition shadow-md shadow-brand-500/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
            </button>
        </form>
    </main>

    <!-- JavaScript Logic -->
    <script>
        const chatContainer = document.getElementById('chat-container');
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');

        // Fungsi untuk menambahkan pesan ke layar
        function appendMessage(role, text) {
            const isUser = role === 'user';
            
            const wrapper = document.createElement('div');
            wrapper.className = `flex items-start gap-4 ${isUser ? 'flex-row-reverse' : ''}`;
            
            const avatar = document.createElement('div');
            avatar.className = `w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 ${isUser ? 'bg-gray-800 text-white' : 'bg-brand-100 text-brand-600'}`;
            avatar.innerText = isUser ? 'Anda' : '🤖';
            
            const bubble = document.createElement('div');
            bubble.className = `p-4 rounded-2xl text-sm leading-relaxed max-w-[85%] ${
                isUser 
                ? 'bg-brand-600 text-white rounded-tr-sm shadow-md' 
                : 'bg-gray-50 border border-gray-100 text-gray-700 rounded-tl-sm shadow-sm'
            }`;
            
            // Mengubah markdown bold (**teks**) menjadi HTML <strong>
            bubble.innerHTML = text.replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>');

            wrapper.appendChild(avatar);
            wrapper.appendChild(bubble);
            chatContainer.appendChild(wrapper);
            
            // Scroll ke bawah
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Fungsi animasi loading AI
        function showTypingIndicator() {
            const wrapper = document.createElement('div');
            wrapper.id = 'typing-indicator';
            wrapper.className = 'flex items-start gap-4';
            
            wrapper.innerHTML = `
                <div class="w-8 h-8 bg-brand-100 rounded-full flex items-center justify-center flex-shrink-0 text-brand-600">🤖</div>
                <div class="bg-gray-50 border border-gray-100 px-4 py-3 rounded-2xl rounded-tl-sm text-gray-500 flex items-center h-[46px]">
                    <div class="typing-dots flex items-center"><span></span><span></span><span></span></div>
                </div>
            `;
            chatContainer.appendChild(wrapper);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        function removeTypingIndicator() {
            const indicator = document.getElementById('typing-indicator');
            if (indicator) indicator.remove();
        }

        // Fungsi utama untuk memproses pertanyaan
        function handleUserMessage(message) {
            if (!message.trim()) return;

            // 1. Tampilkan pesan user
            appendMessage('user', message);
            chatInput.value = '';

            // 2. Tampilkan loading AI
            showTypingIndicator();

            // 3. Simulasi waktu berfikir AI (1.5 detik)
            setTimeout(() => {
                removeTypingIndicator();
                let aiResponse = "";

                // Logika Dummy (Berdasarkan kata kunci)
                const lowerMsg = message.toLowerCase();

                if (lowerMsg.includes('laris') || lowerMsg.includes('terjual') || lowerMsg.includes('untung')) {
                    aiResponse = "Berdasarkan data bulan ini, produk Anda yang paling laris adalah **Kopi Susu Gula Aren** dengan total 412 terjual (meningkat 24% dari bulan lalu). Margin keuntungannya juga yang tertinggi, mencapai 65%. Saya sarankan Anda memastikan bahan bakunya selalu tersedia.";
                } 
                else if (lowerMsg.includes('stok') || lowerMsg.includes('restock') || lowerMsg.includes('habis')) {
                    aiResponse = "⚠️ **Peringatan Stok Kritis!**\n\n1. Biji Kopi Arabika (Sisa: 2 kg) - Cukup untuk 3 hari.\n2. Susu UHT (Sisa: 5 kotak) - Cukup untuk 2 hari.\n3. Gula Aren Cair (Sisa: 1 botol) - Cukup untuk 4 hari.\n\nSegera lakukan restock untuk menghindari kehabisan stok saat akhir pekan.";
                } 
                else if (lowerMsg.includes('promo') || lowerMsg.includes('akhir pekan') || lowerMsg.includes('weekend')) {
                    aiResponse = "Melihat tren penjualan, hari Sabtu dan Minggu adalah waktu paling ramai (omzet naik 40%).\n\n**Ide Promo:**\n- **Bundling:** Beli 2 Kopi Susu Gula Aren gratis 1 Croissant (sisa stok croissant Anda masih banyak, 45 pcs).\n- **Diskon Jam Sepi:** Diskon 15% untuk pembelian antara jam 14:00 - 16:00 (karena penjualan cenderung turun di jam ini).";
                }
                else if (lowerMsg.includes('omzet') || lowerMsg.includes('pendapatan') || lowerMsg.includes('uang')) {
                    aiResponse = "Total omzet Anda bulan ini mencapai **Rp 48.250.000**, naik 24% dibandingkan bulan lalu (Rp 38.900.000). Rata-rata transaksi per hari adalah 42 transaksi dengan nilai rata-rata keranjang (average basket size) sebesar Rp 38.000.";
                }
                else {
                    aiResponse = "Maaf, untuk demo ini saya hanya bisa menjawab pertanyaan seputar:\n- Produk terlaris / keuntungan\n- Cek stok kritis / restock\n- Ide promo / strategi\n- Total omzet\n\nSilakan coba klik tombol pertanyaan cepat di bawah, atau ketik salah satu topik di atas.";
                }

                appendMessage('ai', aiResponse);
            }, 1500);
        }

        // Event listener untuk form submit
        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            handleUserMessage(chatInput.value);
        });

        // Fungsi untuk tombol saran (Suggestion Chips)
        function sendSuggestion(text) {
            handleUserMessage(text);
        }
    </script>
</body>
</html>