<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAGUS JANUARTA // ISSUE 02</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #FF5C1B;       /* Burnt Terracotta */
            --accent-soft: rgba(255, 92, 27, 0.14);
            --bg-main: #0E0E0D;
            --card-bg: #171715;
            --ink: #F3EFE6;
            --muted: #9E9A90;
            --line: #2C2B28;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--bg-main);
            color: var(--ink);
            background-image: radial-gradient(rgba(243, 239, 230, 0.08) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .font-display { font-family: 'Syne', sans-serif; }
        .font-mono-alt { font-family: 'Space Mono', monospace; }

        /* Tekstur Film Grain Halus */
        .grain-overlay {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 50;
            opacity: 0.045;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
        }

        /* Kartu Editorial */
        .zine-card {
            background-color: var(--card-bg);
            border: 1px solid var(--line);
            transition: border-color 0.25s ease, transform 0.25s ease;
        }
        .zine-card:hover {
            border-color: var(--accent);
            transform: translateY(-2px);
        }

        .accent-text { color: var(--accent); }
        .accent-bg { background-color: var(--accent); color: #0E0E0D; }
        .accent-pill {
            background-color: var(--accent-soft);
            color: var(--accent);
            border: 1px solid var(--accent);
        }

        /* Animasi Marquee */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 22s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }

        /* Animasi Vinyl Berputar */
        @keyframes spinVinyl {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .vinyl-spin {
            animation: spinVinyl 6s linear infinite;
        }
        .vinyl-paused {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="min-h-screen overflow-x-hidden selection:bg-[#FF5C1B] selection:text-black">
    <div class="grain-overlay"></div>

    <!-- Top Editorial Bar -->
    <header class="sticky top-0 z-40 border-b border-[#2C2B28] bg-[#0E0E0D]/85 backdrop-blur-md">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-3.5 text-xs font-mono-alt uppercase tracking-wider">
            <div class="flex items-center gap-3">
                <span class="inline-block h-2.5 w-2.5 rounded-full accent-bg animate-pulse"></span>
                <span>DENPASAR // <span id="liveClock">--:--:--</span> WITA</span>
            </div>
            <div class="hidden text-[#9E9A90] sm:block">
                KELOMPOK 02 — LARAVEL ARCHIVE
            </div>
            <a href="/" class="rounded-full border border-[#2C2B28] px-3.5 py-1.5 transition hover:border-[var(--accent)] hover:text-[var(--accent)]">
                ← BERANDA
            </a>
        </div>
    </header>

    <!-- Running Marquee Strip -->
    <div class="overflow-hidden border-b border-[#2C2B28] accent-bg py-2 font-mono-alt text-xs font-bold uppercase tracking-widest">
        <div class="animate-marquee">
            <span class="mx-6">✦ BAGUS JANUARTA</span>
            <span class="mx-6">✦ BAGUSCONTROLLER</span>
            <span class="mx-6">✦ INFORMATIKA 2026</span>
            <span class="mx-6">✦ CLEAN CODE &amp; GOOD COFFEE</span>
            <span class="mx-6">✦ PROYEK LARAVEL KELOMPOK 2</span>
            <span class="mx-6">✦ BAGUS JANUARTA</span>
            <span class="mx-6">✦ BAGUSCONTROLLER</span>
            <span class="mx-6">✦ INFORMATIKA 2026</span>
            <span class="mx-6">✦ CLEAN CODE &amp; GOOD COFFEE</span>
            <span class="mx-6">✦ PROYEK LARAVEL KELOMPOK 2</span>
        </div>
    </div>

    <!-- Main Content -->
    <main class="mx-auto max-w-6xl px-5 py-10 sm:py-14">

        <!-- Hero Section -->
        <section class="mb-10 grid grid-cols-1 items-end gap-6 border-b border-[#2C2B28] pb-10 lg:grid-cols-12">
            <div class="lg:col-span-8">
                <div class="mb-4 inline-flex items-center gap-2 rounded-full px-3.5 py-1 font-mono-alt text-xs uppercase accent-pill">
                    <span>VOL. 01</span>
                    <span>•</span>
                    <span>ROUTE /BAGUS</span>
                </div>
                <h1 class="font-display text-5xl leading-[0.95] font-extrabold tracking-tight sm:text-7xl">
                    BAGUS<br>
                    <span class="accent-text">JANUARTA.</span>
                </h1>
            </div>
            <div class="flex flex-col justify-between gap-4 lg:col-span-4 lg:text-right">
                <p class="text-sm leading-relaxed text-[#9E9A90] sm:text-base">
                    Halo, ini halaman pribadi <strong class="text-[#F3EFE6]">Bagus Januarta</strong> yang dibangun menggunakan
                    <code class="font-mono-alt accent-text">BagusController</code> dan view
                    <code class="font-mono-alt accent-text">bagusjanuarta.blade.php</code> di Laravel.
                </p>
                <div class="flex flex-wrap gap-2 lg:justify-end">
                    <button onclick="switchTheme()" class="cursor-pointer rounded-full accent-bg px-5 py-2.5 font-mono-alt text-xs font-bold uppercase tracking-wider transition hover:opacity-90 active:scale-95">
                        Ganti Palette Warna ↻
                    </button>
                </div>
            </div>
        </section>

        <!-- Bento Grid Layout -->
        <section class="grid grid-cols-1 gap-5 md:grid-cols-12">

            <!-- Card 1: Manifesto / About -->
            <div class="zine-card flex flex-col justify-between rounded-3xl p-7 md:col-span-7">
                <div>
                    <div class="flex items-center justify-between font-mono-alt text-xs uppercase text-[#9E9A90]">
                        <span>[ 01 / PROFILE ]</span>
                        <span class="accent-text">ACTIVE STATUS</span>
                    </div>
                    <h2 class="mt-5 font-display text-2xl font-bold leading-snug sm:text-3xl">
                        Ngoding rapi di siang hari, cari inspirasi di kedai kopi saat sore.
                    </h2>
                    <p class="mt-3 text-sm leading-relaxed text-[#9E9A90]">
                        Bagian dari kolaborasi <span class="text-[#F3EFE6]">Proyek Laravel Kelompok 2</span> dengan sistem arsitektur MVC terpisah—satu anggota, satu controller, nol konflik.
                    </p>
                </div>

                <div class="mt-8 flex flex-wrap gap-2 font-mono-alt text-xs">
                    <span class="rounded-lg border border-[#2C2B28] bg-[#0E0E0D] px-3 py-1.5 text-[#F3EFE6]">#Laravel</span>
                    <span class="rounded-lg border border-[#2C2B28] bg-[#0E0E0D] px-3 py-1.5 text-[#F3EFE6]">#PHP_MVC</span>
                    <span class="rounded-lg border border-[#2C2B28] bg-[#0E0E0D] px-3 py-1.5 text-[#F3EFE6]">#Informatika</span>
                    <span class="rounded-lg border border-[#2C2B28] bg-[#0E0E0D] px-3 py-1.5 accent-text">#Kelompok2</span>
                </div>
            </div>

            <!-- Card 2: Vinyl / Now Spinning Vibe -->
            <div class="zine-card flex flex-col justify-between rounded-3xl p-7 md:col-span-5">
                <div class="flex items-center justify-between font-mono-alt text-xs uppercase text-[#9E9A90]">
                    <span>[ 02 / ON ROTATION ]</span>
                    <span id="vinylStatus" class="accent-text">● SPINNING</span>
                </div>

                <div class="my-6 flex items-center gap-5">
                    <!-- Piringan Vinyl CSS -->
                    <button onclick="toggleVinyl()" title="Klik untuk Pause / Play" class="group relative flex h-24 w-24 shrink-0 cursor-pointer items-center justify-center rounded-full border-2 border-[#2C2B28] bg-[#0B0B0A] shadow-xl vinyl-spin" id="vinylDisc">
                        <div class="h-16 w-16 rounded-full border border-white/10"></div>
                        <div class="absolute h-10 w-10 rounded-full border border-white/10"></div>
                        <div class="absolute flex h-8 w-8 items-center justify-center rounded-full accent-bg">
                            <div class="h-2.5 w-2.5 rounded-full bg-[#0E0E0D]"></div>
                        </div>
                    </button>

                    <div class="min-w-0">
                        <p class="font-mono-alt text-[11px] uppercase tracking-wider text-[#9E9A90]">CODING PLAYLIST</p>
                        <h3 id="trackTitle" class="truncate text-lg font-bold text-[#F3EFE6]">Pure &amp; Innocent</h3>
                        <p id="trackArtist" class="truncate text-sm text-[#9E9A90]">Indie / Folk-Punk Mood</p>
                        <button onclick="nextTrack()" class="mt-2.5 cursor-pointer font-mono-alt text-xs uppercase underline decoration-dotted underline-offset-4 accent-text hover:opacity-80">
                            Next Vibe →
                        </button>
                    </div>
                </div>

                <div class="border-t border-[#2C2B28] pt-3 font-mono-alt text-[11px] text-[#9E9A90]">
                    Klik piringan vinyl untuk play/pause animasi.
                </div>
            </div>

            <!-- Card 3: Mini Terminal Info -->
            <div class="zine-card rounded-3xl p-7 md:col-span-5">
                <div class="mb-4 flex items-center justify-between">
                    <span class="font-mono-alt text-xs uppercase text-[#9E9A90]">[ 03 / SYSTEM LOG ]</span>
                    <div class="flex gap-1.5">
                        <span class="h-2.5 w-2.5 rounded-full bg-[#3A3935]"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-[#3A3935]"></span>
                        <span class="h-2.5 w-2.5 rounded-full accent-bg"></span>
                    </div>
                </div>
                <div class="space-y-2 rounded-2xl border border-[#2C2B28] bg-[#0B0B0A] p-4 font-mono-alt text-xs leading-relaxed">
                    <p><span class="accent-text">$</span> php artisan route:check</p>
                    <p class="text-[#9E9A90]">→ URI      : <span class="text-[#F3EFE6]">GET /bagus</span></p>
                    <p class="text-[#9E9A90]">→ ACTION   : <span class="text-[#F3EFE6]">BagusController@index</span></p>
                    <p class="text-[#9E9A90]">→ VIEW     : <span class="text-[#F3EFE6]">bagusjanuarta.blade.php</span></p>
                    <p class="text-[#9E9A90]">→ STATUS   : <span class="accent-text">200 OK [VERIFIED]</span></p>
                </div>
            </div>

            <!-- Card 4: Daily Note / Kalcer Quote + Navigasi -->
            <div class="zine-card flex flex-col justify-between rounded-3xl p-7 md:col-span-7">
                <div>
                    <div class="flex items-center justify-between font-mono-alt text-xs uppercase text-[#9E9A90]">
                        <span>[ 04 / FIELD NOTES ]</span>
                        <span id="themeName" class="font-bold accent-text">THEME: TERRACOTTA</span>
                    </div>
                    <blockquote id="quoteText" class="mt-5 text-xl font-medium italic leading-relaxed text-[#F3EFE6] sm:text-2xl">
                        "Bikin kode itu mirip main musik—kalau strukturnya rapi, hasilnya enak dinikmati siapa saja."
                    </blockquote>
                </div>

                <div class="mt-8 flex flex-wrap items-center justify-between gap-3 border-t border-[#2C2B28] pt-5">
                    <button onclick="nextQuote()" class="cursor-pointer rounded-full border border-[#2C2B28] px-4 py-2 font-mono-alt text-xs uppercase transition hover:border-[var(--accent)] hover:text-[var(--accent)]">
                        Acak Catatan ✦
                    </button>
                    <div class="flex flex-wrap gap-2">
                        <a href="/" class="rounded-full border border-[#2C2B28] px-4 py-2 font-mono-alt text-xs uppercase transition hover:bg-[#F3EFE6] hover:text-[#0E0E0D]">
                            Home
                        </a>
                        <a href="/wisnu" class="rounded-full border border-[#2C2B28] px-4 py-2 font-mono-alt text-xs uppercase transition hover:border-[var(--accent)] hover:text-[var(--accent)]">
                            Halaman Wisnu ↗
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Footer -->
        <footer class="mt-12 flex flex-col items-center justify-between gap-2 border-t border-[#2C2B28] pt-6 font-mono-alt text-xs text-[#9E9A90] sm:flex-row">
            <span>© 2026 BAGUS JANUARTA — PROYEK LARAVEL KELOMPOK 2</span>
            <span>BUILT WITH LARAVEL BLADE &amp; TAILWIND CSS</span>
        </footer>
    </main>

    <script>
        // 1. Live Clock WITA
        function updateClock() {
            const now = new Date();
            const wita = new Intl.DateTimeFormat('id-ID', {
                timeZone: 'Asia/Makassar',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            }).format(now);
            document.getElementById('liveClock').textContent = wita.replace(/\./g, ':');
        }
        updateClock();
        setInterval(updateClock, 1000);

        // 2. Palette / Theme Switcher
        const themes = [
            { name: 'TERRACOTTA', color: '#FF5C1B', soft: 'rgba(255, 92, 27, 0.14)' },
            { name: 'ACID LIME',  color: '#C8FF2E', soft: 'rgba(200, 255, 46, 0.14)' },
            { name: 'MATCHA',     color: '#7AE582', soft: 'rgba(122, 229, 130, 0.14)' },
            { name: 'COBALT',     color: '#5CA4FF', soft: 'rgba(92, 164, 255, 0.14)' }
        ];
        let themeIdx = 0;

        function switchTheme() {
            themeIdx = (themeIdx + 1) % themes.length;
            const t = themes[themeIdx];
            document.documentElement.style.setProperty('--accent', t.color);
            document.documentElement.style.setProperty('--accent-soft', t.soft);
            document.getElementById('themeName').textContent = 'THEME: ' + t.name;
        }

        // 3. Interactive Vinyl
        const tracks = [
            { title: 'Pure & Innocent', artist: 'Indie / Folk-Punk Mood' },
            { title: 'Midnight Espresso', artist: 'Lo-Fi Coding Session' },
            { title: 'Sore di Denpasar', artist: 'Acoustic Chill Tape' },
            { title: 'No Merge Conflict', artist: 'Git Push Anthem' }
        ];
        let trackIdx = 0;

        function nextTrack() {
            trackIdx = (trackIdx + 1) % tracks.length;
            document.getElementById('trackTitle').textContent = tracks[trackIdx].title;
            document.getElementById('trackArtist').textContent = tracks[trackIdx].artist;
        }

        function toggleVinyl() {
            const disc = document.getElementById('vinylDisc');
            const status = document.getElementById('vinylStatus');
            disc.classList.toggle('vinyl-paused');
            status.textContent = disc.classList.contains('vinyl-paused') ? '❚❚ PAUSED' : '● SPINNING';
        }

        // 4. Field Notes Switcher
        const quotes = [
            '"Bikin kode itu mirip main musik—kalau strukturnya rapi, hasilnya enak dinikmati siapa saja."',
            '"Jangan lupa git pull origin main sebelum push, biar pertemanan kelompok tetap utuh."',
            '"Kopi dingin, terminal bersih, route 200 OK—definisi malam yang tenang."',
            '"Satu controller satu orang, fokus jalan masing-masing tapi tetap satu tujuan."'
        ];
        let quoteIdx = 0;

        function nextQuote() {
            quoteIdx = (quoteIdx + 1) % quotes.length;
            document.getElementById('quoteText').textContent = quotes[quoteIdx];
        }
    </script>
</body>
</html>