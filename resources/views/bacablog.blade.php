<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Isi blog edukasi cv. jaya karya konsultan">
    <meta name="keywords" content="Jasa Konsultansi, Konsultan Profesional, Konsultan Pengawasan, Konsultan Pembangunan, Jasa Konsultan Blitar, Perusahaan Konsultan, CV. Jaya Karya Konsultan, Industri 4.0">
    <meta name="author" content="CV. Jaya Karya Konsultan">
    <title>{{ $data->judul_blog }} | Konsultan Profesional</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('assets/img/logo-cv.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        #isi_blog h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        #isi_blog h2 {
            font-size: 1.75rem;
            font-weight: semi-bold;
            margin-top: 1.25rem;
            margin-bottom: 0.75rem;
        }
        #isi_blog h3 {
            font-size: 1.5rem;
            font-weight: medium;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <header id="navbar" class="h-11 fixed inset-x-0 top-0 z-[40] transition-all duration-300">
        <nav class="flex justify-between items-center px-4 py-2 relative">
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/img/logo-cv.png') }}" alt="Logo CV. Jaya Karya Konsultan" class="logo h-6 md:h-8 w-auto">
                <span id="cv-title" class="text-white text-base md:text-lg font-bold transition-all duration-300">CV. Jaya Karya Konsultan</span>
            </div>
            <button id="menu-toggle" class="block md:hidden text-white focus:outline-none">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>
            <ul id="nav-menu" class="absolute top-[2.5rem] left-0 w-full bg-white md:bg-transparent md:relative md:top-0 md:flex md:gap-4 md:w-auto transition-all duration-300 origin-top scale-y-0 opacity-0 md:opacity-100 md:scale-y-100">
                <li><a href="{{ route('user.home') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">Home</a></li>
                <li><a href="{{ route('user.galeri') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">Galeri</a></li>
                <li><a href="{{ route('user.blog') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">Blog Edukasi</a></li>
                <li><a href="{{ route('user.about') }}" class="nav-link block px-4 py-2 md:px-0 md:py-0 text-black md:text-white">About</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner h-[55dvh] relative flex flex-col items-center justify-center text-center text-white" aria-label="Banner Section">
        <div class="article-banner absolute inset-0 z-10">
            <img src="{{ asset('img-blog/' . $data->img) }}" alt="Banner Image" class="w-full h-full object-cover">
        </div>

        <div class="absolute inset-0 z-20 bg-[#00309280]"></div>
    </section>

    <main class="relative h-auto py-8 px-6 bg-gray-50 overflow-hidden" aria-label="Layanan Kami">
        <div class="absolute inset-0 z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#8080800a_1.5px,transparent_1.5px),linear-gradient(to_bottom,#8080800a_1.5px,transparent_1.5px)] bg-[size:40px_40px]"></div>
        <div class="relative z-30 max-w-9xl mx-auto bg-white shadow-lg rounded-lg p-6 md:p-10">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-700 leading-tight">
                {{ $data->judul_blog }}
            </h1>
            <div class="mt-3 text-gray-600 text-sm md:text-base">
                <p><span class="font-semibold">Author:</span> {{ $data->user->name }}</p>
                <p><span class="font-semibold">Tanggal:</span> {{ \Carbon\Carbon::parse($data->created_at)->locale('id')->translatedFormat('d F Y') }}</p>
            </div>
            <div class="mt-6 text-gray-800 text-justify leading-relaxed" id="isi_blog">
                {!! $data->isi_blog !!}
            </div>
            <div class="mt-6 text-right">
                <a href="{{ route('user.blog') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">Kembali</a>
            </div>
        </div>
    </main>


    <footer class="bg-red-600 w-full">
        <div class="p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
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
        const isiBlog = document.getElementById("isi-blog");

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
