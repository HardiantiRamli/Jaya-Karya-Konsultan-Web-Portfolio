<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lihat dokumentasi proyek bangunan yang telah diselesaikan CV. Jaya Karya Konsultan sebagai konsultan bangunan profesional di Blitar dan sekitarnya.">
    <meta name="keywords" content="Jasa Konsultansi, Konsultan Profesional, Konsultan Pengawasan, Konsultan Bangunan, Jasa Konsultan Blitar, Perusahaan Konsultan, CV. Jaya Karya Konsultan, Industri 4.0">
    <meta name="author" content="CV. Jaya Karya Konsultan">
    <meta name="dcterms.title" content="Galeri Proyek | Konsultan Profesional">
    <meta name="dcterms.description" content="Lihat dokumentasi proyek bangunan yang telah diselesaikan CV. Jaya Karya Konsultan sebagai konsultan bangunan profesional di Blitar dan sekitarnya.">
    <meta name="dcterms.rights" content="CV. Jaya Karya Konsultan 2025">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Galeri Proyek | Konsultan Profesional">
    <meta property="og:description" content="Lihat dokumentasi proyek bangunan yang telah diselesaikan CV. Jaya Karya Konsultan sebagai konsultan bangunan profesional di Blitar dan sekitarnya.">
    <meta property="og:url" content="https://www.jayakaryakonsultan.com/galeri">
    <meta property="og:site_name" content="CV. Jaya Karya Konsultan">
    <meta property="og:type" content="website">
    <meta property="og:image:alt" content="CV. Jaya Karya Konsultan - Konsultan Bangunan Profesional">
    <title>Galeri Proyek | Konsultan Profesional</title>
    @vite('resources/css/app.css')
    <link rel="canonical" href="https://www.jayakaryakonsultan.com/galeri" />
    <link rel="icon" href="{{ asset('assets/img/logo-cv.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" media="print" onload="this.media='all'">
    <link rel="preload" as="image" href="{{ asset('assets/img/hero.webp') }}">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    </noscript>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <header id="navbar" class="h-11 fixed inset-x-0 top-0 z-[40] transition-all duration-300">
        <nav class="flex justify-between items-center px-4 py-2 relative">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/img/logo-cv.png') }}" alt="Logo CV. Jaya Karya Konsultan" class="logo h-6 md:h-8 w-auto">
                <span id="cv-title" class="text-white text-base md:text-lg font-bold transition-all duration-300">CV. Jaya Karya Konsultan</span>
            </div>

            <!-- Hamburger Menu Button -->
            <button id="menu-toggle" class="block md:hidden text-white focus:outline-none" aria-label='buka tombol navigasi'>
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>

            <!-- Navigation Links -->
            <ul id="nav-menu" class="absolute top-[2.5rem] left-0 w-full bg-white md:bg-transparent md:relative md:top-0 md:flex md:gap-4 md:w-auto transition-all duration-300 origin-top scale-y-0 opacity-0 md:opacity-100 md:scale-y-100">
                <li><a href="{{ route('user.home') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">Home</a></li>
                <li><a href="{{ route('user.galeri') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">Galeri</a></li>
                <li><a href="{{ route('user.blog') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">Blog Edukasi</a></li>
                <li><a href="{{ route('user.about') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">About</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner h-[55dvh] flex flex-col items-center justify-center text-center text-white" aria-label="Banner Section">
        <div class="max-w-3xl px-6">
            <h1 class="text-2xl md:text-4xl font-bold leading-tight drop-shadow-md">
                Galeri
            </h1>
        </div>
    </section>

    <main class="py-12 px-6 bg-gray-50">
        <div class="relative z-30">
            <h2 class="text-2xl text-blue-600 font-semibold">Dokumentasi Proyek Kami</h2>
        </div>

        <div class="mt-6 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($data as $dt)
            <div class="bg-white border rounded-lg shadow-sm overflow-hidden hover:translate-y-[-1.25rem] transition-all duration-300">
                <img src="{{ asset('img-galeri/' . $dt->img) }}" alt="{{ $dt->judul_gambar }}" class="w-full max-h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-900">{{ $dt->judul_gambar }}</h3>
                    <button data-modal-target="modal-{{ $dt->id }}" data-modal-toggle="modal-{{ $dt->id }}" class="mt-3 bg-blue-700 text-white px-4 py-2 rounded-lg">
                        Lihat Detail
                    </button>
                </div>
            </div>

            <!-- Modal -->
            <div id="modal-{{ $dt->id }}" class="hidden fixed inset-0 z-50 items-center justify-center bg-black bg-opacity-50">
                <div class="bg-white rounded-lg shadow-lg max-w-lg w-full">
                    <div class="p-5 border-b flex justify-between items-center">
                        <h3 class="text-xl font-semibold">{{ $dt->judul_gambar }}</h3>
                        <button data-modal-hide="modal-{{ $dt->id }}" class="text-gray-600 hover:text-gray-900">&times;</button>
                    </div>
                    <div class="p-5">
                        <img src="{{ asset('img-galeri/' . $dt->img) }}" alt="{{ $dt->judul_gambar }}" class="w-full h-64 object-cover rounded">
                        <p class="mt-3 text-gray-700"><strong>Lokasi:</strong> {{ $dt->lokasi }}</p>
                        <p class="text-gray-700"><strong>Waktu:</strong> {{ $dt->waktu }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-red-600 w-full">
        <div class="p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse" href="/">
                    <img src="{{ asset('assets/img/logo-cv.png') }}" class="h-8" alt="CV Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">CV. Jaya Karya Konsultan</span>
                </a>
                <ul class="flex gap-5 flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                    <li>
                        <h3 class="text-black">WhatsApp</h3>
                        <span class="text-white">{{ $wa }}</span>
                    </li>
                    <li>
                        <h3 class="text-black">Email</h3>
                        <span class="text-white">{{ $email }}</span>
                    </li>
                    <li>
                        <h3 class="text-black">Alamat</h3>
                        <span class="text-white">Jalan Aryo Blitar, RT 03, RW 02, Kota Blitar</span>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-white sm:mx-auto  lg:my-8" />
            <span class="block text-2xl font-bold sm:text-center text-white">"Jaya Karya Konsultan: Solusi Tepat untuk Setiap Proyek Anda!"</span>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const header = document.querySelector("header");
        const cvTitle = document.querySelector("#cv-title");
        const navLinks = document.querySelectorAll(".nav-link");
        const menuToggle = document.getElementById("menu-toggle");
        const navMenu = document.getElementById("nav-menu");

        window.addEventListener("scroll", function () {
            if (window.scrollY > header.offsetHeight) {
                header.classList.add("bg-white", "shadow-md");
                cvTitle.classList.remove("text-white");
                navLinks.forEach(link => link.classList.remove("md:text-white"));
                menuToggle.classList.remove("text-white");
            } else {
                header.classList.remove("bg-white", "shadow-md");
                cvTitle.classList.add("text-white");
                navLinks.forEach(link => link.classList.add("md:text-white"));
            }
        });

        menuToggle.addEventListener("click", function () {
            if (navMenu.classList.contains("scale-y-0")) {
                navMenu.classList.remove("scale-y-0", "opacity-0");
                navMenu.classList.add("scale-y-100", "opacity-100");
            } else {
                navMenu.classList.add("scale-y-0", "opacity-0");
                navMenu.classList.remove("scale-y-100", "opacity-100");
            }
        });
    });
    </script>
    
    <script type="text/javascript" defer>
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/680d7a86135eea190ea47cdb/1ipqad7ln';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
</body>
</html>
