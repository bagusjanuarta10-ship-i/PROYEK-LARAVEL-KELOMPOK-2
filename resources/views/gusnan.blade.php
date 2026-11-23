<!DOCTYPE html>
<html lang="id" x-data="portfolio()" :class="{dark: dark}" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portofolio Gusnan, mahasiswa Informatika semester 5 Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar.">
  <meta name="author" content="Gusnan">
  <meta property="og:title" content="Gusnan | Mahasiswa Informatika">
  <meta property="og:description" content="Perjalanan belajar Gusnan dari SMK menuju Informatika, ditambah minat membaca komik dan menonton anime.">
  <meta property="og:type" content="website">
  <title>Gusnan | Mahasiswa Informatika</title>
  <link rel="icon" href="/gusnan-profile.png" type="image/png">

  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          fontFamily: { sans: ['Poppins', 'sans-serif'] },
          colors: {
            ink: '#171713',
            paper: '#f4f1e8',
            moss: '#536a42',
            saffron: '#f0a33a'
          }
        }
      }
    }
  </script>
  <style>
    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-padding-top: 96px; }
    body { font-family: 'Poppins', sans-serif; }
    [x-cloak] { display: none !important; }
    button, a, summary, select, label[for], input, textarea { cursor: pointer; }
    button:disabled, [aria-disabled="true"] { cursor: not-allowed; }
    :focus-visible { outline: 3px solid #f0a33a; outline-offset: 3px; }
    .reveal { opacity: 0; transform: translateY(32px); transition: opacity 700ms cubic-bezier(.22,1,.36,1), transform 700ms cubic-bezier(.22,1,.36,1); }
    .reveal.in { opacity: 1; transform: translateY(0); }
    .map-frame { aspect-ratio: 4 / 3; }
    .map-frame iframe { width: 100%; height: 100%; border: 0; }
    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
      .reveal { opacity: 1; transform: none; transition: none; }
    }
  </style>
</head>
<body class="bg-paper text-ink antialiased dark:bg-[#131209] dark:text-[#f4f1e8]">
  <a href="#main" class="fixed left-4 top-4 z-[60] -translate-y-20 rounded-lg bg-ink px-4 py-3 text-sm font-semibold text-white focus:translate-y-0 dark:bg-white dark:text-ink">Lewati ke konten</a>

  <header class="fixed inset-x-0 top-4 z-50 px-4">
    <nav class="mx-auto flex max-w-6xl items-center justify-between rounded-2xl border border-black/10 bg-paper/90 px-4 py-3 backdrop-blur-md dark:border-white/10 dark:bg-[#181818]/90" aria-label="Navigasi utama">
      <a href="#beranda" class="flex items-center gap-3 font-semibold" aria-label="Gusnan, kembali ke beranda">
        <span class="grid h-10 w-10 place-items-center overflow-hidden rounded-full bg-moss text-sm text-white">G</span>
        <span>Gusnan</span>
      </a>

      <div class="hidden items-center gap-8 md:flex">
        <a href="#tentang" class="text-sm font-medium text-ink/70 hover:text-ink dark:text-white/70 dark:hover:text-white">Tentang</a>
        <a href="#perjalanan" class="text-sm font-medium text-ink/70 hover:text-ink dark:text-white/70 dark:hover:text-white">Pendidikan</a>
        <a href="#minat" class="text-sm font-medium text-ink/70 hover:text-ink dark:text-white/70 dark:hover:text-white">Minat</a>
      </div>

      <div class="flex items-center gap-2">
        <button @click="toggleTheme()" type="button" class="grid h-11 w-11 place-items-center rounded-full border border-black/10 hover:bg-black/5 dark:border-white/10 dark:hover:bg-white/10" :aria-label="dark ? 'Gunakan mode terang' : 'Gunakan mode gelap'">
          <svg x-show="!dark" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"/></svg>
          <svg x-show="dark" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.42 1.42M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.42-1.42M17.66 6.34l1.41-1.41"/></svg>
        </button>
        <button @click="menuOpen = !menuOpen" type="button" class="grid h-11 w-11 place-items-center rounded-full border border-black/10 md:hidden dark:border-white/10" :aria-expanded="menuOpen" aria-controls="mobile-menu" aria-label="Buka menu">
          <svg x-show="!menuOpen" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
          <svg x-show="menuOpen" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 6 12 12M18 6 6 18"/></svg>
        </button>
      </div>
    </nav>

    <div id="mobile-menu" x-show="menuOpen" x-cloak class="mx-auto mt-2 max-w-6xl rounded-2xl border border-black/10 bg-paper p-4 shadow-xl md:hidden dark:border-white/10 dark:bg-[#181818]">
      <a href="#tentang" @click="menuOpen=false" class="block rounded-lg px-3 py-3 font-medium hover:bg-black/5 dark:hover:bg-white/10">Tentang</a>
      <a href="#perjalanan" @click="menuOpen=false" class="block rounded-lg px-3 py-3 font-medium hover:bg-black/5 dark:hover:bg-white/10">Pendidikan</a>
      <a href="#minat" @click="menuOpen=false" class="block rounded-lg px-3 py-3 font-medium hover:bg-black/5 dark:hover:bg-white/10">Minat</a>
    </div>
  </header>

  <main id="main">
    <section id="beranda" class="flex min-h-screen items-center px-6 pb-16 pt-32">
      <div class="mx-auto grid w-full max-w-6xl items-center gap-12 md:grid-cols-[1.25fr_.75fr]">
        <div>
          <p class="reveal mb-6 text-sm font-semibold uppercase tracking-[0.18em] text-moss dark:text-[#a8bb8f]">Mahasiswa Informatika</p>
          <h1 class="reveal text-balance text-5xl font-semibold leading-[1.05] sm:text-6xl">Halo, saya Gusnan.</h1>
          <p class="reveal mt-6 max-w-2xl text-lg leading-8 text-ink/70 dark:text-white/70">
            Saya sedang menempuh semester 5 di Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar.
          </p>
          <div class="reveal mt-8 flex flex-wrap gap-3">
            <a href="#perjalanan" class="inline-flex min-h-11 items-center justify-center rounded-xl bg-ink px-5 py-3 text-sm font-semibold text-white hover:bg-moss active:translate-y-px dark:bg-white dark:text-ink dark:hover:bg-saffron">Lihat perjalanan</a>
            <a href="#tentang" class="inline-flex min-h-11 items-center justify-center rounded-xl border border-ink/20 px-5 py-3 text-sm font-semibold hover:bg-white/60 active:translate-y-px dark:border-white/20 dark:hover:bg-white/10">Kenali saya</a>
          </div>
        </div>

        <figure class="reveal relative mx-auto w-full max-w-sm">
          <div class="absolute -left-4 top-8 h-24 w-24 rounded-full bg-saffron"></div>
          <div class="relative aspect-square overflow-hidden rounded-[2rem] border-8 border-paper bg-white shadow-2xl shadow-black/10 dark:border-[#181818]">
            <img src="/gusnan-profile.png" alt="Gusnan" width="1024" height="1024" fetchpriority="high" class="h-full w-full object-cover">
          </div>
          <figcaption class="mt-4 text-center text-sm font-medium text-ink/60 dark:text-white/60">Denpasar, Bali</figcaption>
        </figure>
      </div>
    </section>

    <section id="tentang" class="border-y border-ink/10 px-6 py-24 dark:border-white/10">
      <div class="mx-auto grid max-w-6xl gap-12 md:grid-cols-[.75fr_1.25fr]">
        <div>
          <p class="reveal text-sm font-semibold uppercase tracking-[0.18em] text-moss dark:text-[#a8bb8f]">Tentang saya</p>
          <h2 class="reveal mt-3 text-4xl font-semibold">Belajar lewat membangun</h2>
        </div>
        <div class="reveal max-w-2xl text-lg leading-8 text-ink/70 dark:text-white/70">
          <p>Minat saya pada Informatika berawal saat duduk di SMK. Saya punya teman yang suka coding, lalu mulai mencoba dan mengikutinya.</p>
          <p class="mt-5">Awalnya saya mengembangkan bot Discord, bot Telegram, dan bot WhatsApp. Dari situ, saya melangkah ke pengembangan website dan aplikasi.</p>
          <div class="mt-8 grid gap-3 sm:grid-cols-3">
            <span class="rounded-xl border border-ink/10 px-4 py-3 text-sm font-medium dark:border-white/10">Bot Discord</span>
            <span class="rounded-xl border border-ink/10 px-4 py-3 text-sm font-medium dark:border-white/10">Bot Telegram</span>
            <span class="rounded-xl border border-ink/10 px-4 py-3 text-sm font-medium dark:border-white/10">Website &amp; aplikasi</span>
          </div>
        </div>
      </div>
    </section>

    <section id="perjalanan" class="px-6 py-24">
      <div class="mx-auto max-w-6xl">
        <div class="mb-12 max-w-2xl">
          <p class="reveal text-sm font-semibold uppercase tracking-[0.18em] text-moss dark:text-[#a8bb8f]">Pendidikan</p>
          <h2 class="reveal mt-3 text-4xl font-semibold">Jejak perjalanan</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
          <article class="reveal rounded-2xl border border-ink/10 bg-white/50 p-4 dark:border-white/10 dark:bg-white/5">
            <div class="map-frame overflow-hidden rounded-xl">
              <iframe title="Peta TK Cita Karya Pejaten" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7890.418017840296!2d115.10065417770993!3d-8.57589209999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a1d94058777%3A0xfca3354bbecd3812!2sTk%20Cipta%20Karya%20Pejaten!5e0!3m2!1sid!2sid!4v1795437373689!5m2!1sid!2sid" width="400" height="300" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="p-4"><p class="text-sm text-ink/50 dark:text-white/50">Taman Kanak Kanak</p><h3 class="mt-1 text-xl font-semibold">TK Cita Karya Pejaten</h3></div>
          </article>

          <article class="reveal rounded-2xl border border-ink/10 bg-white/50 p-4 dark:border-white/10 dark:bg-white/5">
            <div class="map-frame overflow-hidden rounded-xl">
              <iframe title="Peta SDN 1 Pejaten" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15780.808182928015!2d115.0905572117159!3d-8.576562643470302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd239f62a9aaaab%3A0xfcb070475a82548f!2sSDN%201%20Pejaten!5e0!3m2!1sid!2sid!4v1795437413080!5m2!1sid!2sid" width="400" height="300" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="p-4"><p class="text-sm text-ink/50 dark:text-white/50">Sekolah Dasar</p><h3 class="mt-1 text-xl font-semibold">SDN 1 Pejaten</h3></div>
          </article>

          <article class="reveal rounded-2xl border border-ink/10 bg-white/50 p-4 dark:border-white/10 dark:bg-white/5">
            <div class="map-frame overflow-hidden rounded-xl">
              <iframe title="Peta SMPN 2 Kediri" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.243006031868!2d115.10473107404583!3d-8.572617486975572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a1cbe3c0f51%3A0xd66f867ad7a8c67d!2sSMP%20Negeri%202%20Kediri!5e0!3m2!1sid!2sid!4v1795437449656!5m2!1sid!2sid" width="400" height="300" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="p-4"><p class="text-sm text-ink/50 dark:text-white/50">Sekolah Menengah Pertama</p><h3 class="mt-1 text-xl font-semibold">SMPN 2 Kediri</h3></div>
          </article>

          <article class="reveal rounded-2xl border border-ink/10 bg-white/50 p-4 dark:border-white/10 dark:bg-white/5">
            <div class="map-frame overflow-hidden rounded-xl">
              <iframe title="Peta SMKN 3 Tabanan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.928190443221!2d115.05895337404438!3d-8.506353586118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2302456067c6d%3A0x960409958ca78b52!2sSMK%20Negeri%203%20Tabanan%2C%20Jl.%20Kahyangan%20No.45%2C%20Bantas%2C%20Kec.%20Selemadeg%20Tim.%2C%20Kabupaten%20Tabanan%2C%20Bali%2082161!5e0!3m2!1sid!2sid!4v1795437472819!5m2!1sid!2sid" width="400" height="300" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="p-4"><p class="text-sm text-ink/50 dark:text-white/50">Sekolah Menengah Kejuruan</p><h3 class="mt-1 text-xl font-semibold">SMKN 3 Tabanan</h3></div>
          </article>

          <article class="reveal md:col-span-2 rounded-2xl border border-ink/10 bg-white/50 p-4 dark:border-white/10 dark:bg-white/5">
            <div class="map-frame max-h-[480px] overflow-hidden rounded-xl">
              <iframe title="Peta Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.519208790512!2d115.22517447404641!3d-8.642067887881579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f7baea29ae7%3A0xda83c37052788666!2sUniversitas%20Hindu%20Negeri%20I%20Gusti%20Bagus%20Sugriwa%20Denpasar!5e0!3m2!1sid!2sid!4v1795437521907!5m2!1sid!2sid" width="400" height="300" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="p-4"><p class="text-sm text-ink/50 dark:text-white/50">Perguruan Tinggi</p><h3 class="mt-1 text-xl font-semibold">Universitas Hindu Negeri I Gusti Bagus Sugriwa Denpasar</h3><p class="mt-2 text-sm text-ink/60 dark:text-white/60">Program Studi Informatika, semester 5</p></div>
          </article>
        </div>
      </div>
    </section>

    <section id="minat" class="border-t border-ink/10 px-6 py-24 dark:border-white/10">
      <div class="mx-auto max-w-6xl">
        <div class="mb-12 max-w-2xl">
          <p class="reveal text-sm font-semibold uppercase tracking-[0.18em] text-moss dark:text-[#a8bb8f]">Di luar kampus</p>
          <h2 class="reveal mt-3 text-4xl font-semibold">Komik dan anime</h2>
        </div>

        <div class="reveal grid gap-6 md:grid-cols-3">
          <article class="rounded-2xl bg-moss p-6 text-white">
            <p class="text-sm text-white/70">Komik</p>
            <h3 class="mt-2 text-2xl font-semibold">Membaca komik</h3>
            <p class="mt-4 leading-7 text-white/80">Hobi yang memberi jeda sekaligus sumber cerita dan ide visual baru.</p>
          </article>

          <a href="https://myanimelist.net/anime/32281/Kimi_no_Na_wa" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-ink/10 p-6 hover:border-saffron dark:border-white/10">
            <p class="text-sm text-ink/50 dark:text-white/50">Anime</p>
            <h3 class="mt-2 text-2xl font-semibold group-hover:text-moss dark:group-hover:text-[#a8bb8f]">Kimi no Na wa</h3>
            <p class="mt-4 text-sm font-medium">Buka di MyAnimeList</p>
          </a>

          <a href="https://myanimelist.net/anime/20/Naruto" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-ink/10 p-6 hover:border-saffron dark:border-white/10">
            <p class="text-sm text-ink/50 dark:text-white/50">Anime</p>
            <h3 class="mt-2 text-2xl font-semibold group-hover:text-moss dark:group-hover:text-[#a8bb8f]">Naruto</h3>
            <p class="mt-4 text-sm font-medium">Buka di MyAnimeList</p>
          </a>

          <a href="https://myanimelist.net/anime/2393/Doraemon_Movie_24__Nobita_to_Fushigi_Kaze_Tsukai" target="_blank" rel="noopener noreferrer" class="group rounded-2xl border border-ink/10 p-6 hover:border-saffron md:col-span-2 dark:border-white/10">
            <p class="text-sm text-ink/50 dark:text-white/50">Anime</p>
            <h3 class="mt-2 text-2xl font-semibold group-hover:text-moss dark:group-hover:text-[#a8bb8f]">Doraemon Movie 24: Nobita and the Windmasters</h3>
            <p class="mt-4 text-sm font-medium">Buka di MyAnimeList</p>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-ink/10 px-6 py-8 dark:border-white/10">
    <div class="mx-auto flex max-w-6xl flex-col gap-2 text-sm text-ink/60 sm:flex-row sm:items-center sm:justify-between dark:text-white/60">
      <p>&copy; <span id="year"></span> Gusnan</p>
      <p>Draft tanpa arah visual.</p>
    </div>
  </footer>

  <script>
    function portfolio() {
      return {
        dark: localStorage.getItem('theme') === 'dark'
          || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches),
        menuOpen: false,
        toggleTheme() {
          this.dark = !this.dark;
          localStorage.setItem('theme', this.dark ? 'dark' : 'light');
        },
        init() {
          document.getElementById('year').textContent = new Date().getFullYear();
          const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('in');
                observer.unobserve(entry.target);
              }
            });
          }, { threshold: 0.08, rootMargin: '0px 0px -32px 0px' });
          document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        }
      }
    }
  </script>
</body>
</html>
