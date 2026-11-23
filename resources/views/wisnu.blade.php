<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Wisnu & Rachel ✨</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
        h1, h2 {
            font-family: 'Fredoka', sans-serif;
        }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(3deg); }
        }
        @keyframes floatReverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(10px) rotate(-5deg); }
        }
        .animate-float {
            animation: floatSlow 4s ease-in-out infinite;
        }
        .animate-float-delay {
            animation: floatReverse 5s ease-in-out infinite;
        }
    </style>
</head>
<body class="relative min-h-screen overflow-x-hidden bg-gradient-to-br from-pink-100 via-rose-50 to-fuchsia-100 text-rose-950">

    <!-- Dekorasi Latar Pastel -->
    <div class="pointer-events-none fixed inset-0 overflow-hidden">
        <div class="absolute -top-16 -left-16 h-64 w-64 rounded-full bg-pink-300/40 blur-3xl"></div>
        <div class="absolute -bottom-20 -right-16 h-72 w-72 rounded-full bg-fuchsia-300/40 blur-3xl"></div>
        <div class="absolute top-1/4 right-12 hidden text-4xl opacity-80 sm:block animate-float">🌸</div>
        <div class="absolute bottom-1/4 left-12 hidden text-3xl opacity-80 sm:block animate-float-delay">✨</div>
        <div class="absolute top-20 left-1/4 hidden text-2xl opacity-70 md:block animate-float-delay">🎀</div>
        <div class="absolute bottom-16 right-1/4 hidden text-3xl opacity-75 md:block animate-float">🌷</div>
    </div>

    <!-- Konten Utama -->
    <main class="relative z-10 flex min-h-screen items-center justify-center px-5 py-10">
        <section class="w-full max-w-lg rounded-[2rem] border-2 border-pink-200/80 bg-white/85 p-8 text-center shadow-[0_20px_50px_rgba(244,114,182,0.22)] backdrop-blur-md sm:p-10">
            
            <!-- Badge Atas -->
            <div class="inline-flex items-center gap-2 rounded-full bg-pink-100 px-4 py-1.5 text-sm font-bold text-pink-600 shadow-sm">
                <span>🌸</span>
                <span>Welcome to My Space</span>
                <span>✨</span>
            </div>

            <!-- Bingkai Foto Profil -->
            <div class="mx-auto mt-6 h-36 w-36 rounded-full bg-gradient-to-tr from-pink-400 via-rose-300 to-fuchsia-300 p-1.5 shadow-lg shadow-pink-200 animate-float">
                <img src="{{ asset('rachel.jpeg') }}"
                     alt="Foto Rachel"
                     onerror="this.src='https://ui-avatars.com/api/?name=Rachel&background=fce7f3&color=db2777&size=256'"
                     class="h-full w-full rounded-full bg-pink-50 object-cover">
            </div>

            <!-- Nama Rachel & Judul -->
            <div class="mt-4 inline-flex items-center gap-1.5 rounded-full bg-rose-100/80 px-4 py-1 text-sm font-bold text-rose-500">
                <span>🎀</span>
                <span>Rachel</span>
                <span>💖</span>
            </div>

            <h1 class="mt-3 text-3xl font-bold tracking-wide text-pink-600 sm:text-4xl">
                Halo, Ini Halaman Wisnu & Rachel!
            </h1>
            <p class="mt-3 text-base leading-relaxed font-semibold text-rose-700/80">
                Halaman ini dibuat menggunakan <span class="rounded-md bg-pink-100 px-2 py-0.5 text-pink-600">WisnuController</span> 
                dan view <span class="rounded-md bg-pink-100 px-2 py-0.5 text-pink-600">wisnu.blade.php</span> di Laravel.
            </p>

            <!-- Label Mini -->
            <div class="mt-6 flex flex-wrap justify-center gap-2 text-xs font-bold">
                <span class="rounded-full border border-pink-200 bg-rose-50 px-3.5 py-1.5 text-pink-500">💖 Kelompok 2</span>
                <span class="rounded-full border border-fuchsia-200 bg-fuchsia-50 px-3.5 py-1.5 text-fuchsia-500">⚡ Laravel</span>
                <span class="rounded-full border border-pink-200 bg-pink-50 px-3.5 py-1.5 text-rose-500">🌷 Good Vibes Only</span>
            </div>

            <!-- Pesan Ceria Interaktif -->
            <div id="moodBox" class="mt-6 rounded-2xl border border-dashed border-pink-300 bg-pink-50/70 px-4 py-3 text-sm font-semibold text-pink-600 transition-all">
                ✨ Semoga harimu semanis permen kapas hari ini, Rachel! ✨
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-7 flex flex-col justify-center gap-3 sm:flex-row">
                <button onclick="gantiPesan()"
                        class="inline-flex cursor-pointer items-center justify-center gap-2 rounded-full bg-gradient-to-r from-pink-500 to-rose-400 px-6 py-3 font-bold text-white shadow-md shadow-pink-300/60 transition hover:scale-105 hover:from-pink-600 hover:to-rose-500 active:scale-95">
                    <span>💖</span> Kirim Semangat
                </button>
                <a href="/"
                   class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-pink-200 bg-white px-6 py-3 font-bold text-pink-500 transition hover:scale-105 hover:bg-pink-50 active:scale-95">
                    <span>🏠</span> Kembali ke Beranda
                </a>
            </div>
        </section>
    </main>

    <script>
        const pesanCeria = [
            "✨ Semoga harimu semanis permen kapas hari ini, Rachel! ✨",
            "🌸 Tetap semangat ngoding, kamu hebat banget! 🌸",
            "💖 Jangan lupa senyum dan minum air putih ya! 💖",
            "🎀 Hari yang cerah untuk proyek Laravel Kelompok 2! 🎀",
            "🌷 You're doing amazing, keep shining! 🌷"
        ];
        let indexPesan = 0;

        function gantiPesan() {
            indexPesan = (indexPesan + 1) % pesanCeria.length;
            const box = document.getElementById('moodBox');
            box.style.transform = 'scale(0.95)';
            setTimeout(() => {
                box.textContent = pesanCeria[indexPesan];
                box.style.transform = 'scale(1)';
            }, 120);
        }
    </script>
</body>
</html>