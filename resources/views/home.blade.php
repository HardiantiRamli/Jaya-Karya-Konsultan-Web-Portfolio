<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cv. Jaya Karya Konsultan menyediakan layanan konsultan bangunan di Blitar, termasuk perencanaan proyek dan pengawasan konstruksi. Hubungi kami untuk solusi terbaik.">
    <meta name="keywords" content="Jasa Konsultansi, Konsultan Profesional, Konsultan Pengawasan, Konsultan Bangunan, Jasa Konsultan Blitar, Perusahaan Konsultan, CV. Jaya Karya Konsultan, Industri 4.0">
    <meta name="author" content="CV. Jaya Karya Konsultan">
    <meta name="dcterms.title" content="Konsultan Bangunan Blitar - Jasa Perencanaan & Pengawasan | Jaya Karya Konsultan​">
    <meta name="dcterms.description" content="CV. Jaya Karya Konsultan adalah konsultan bangunan profesional berbasis di Blitar, siap membantu perencanaan dan pengawasan proyek dengan pendekatan ilmiah dan teknologi industri 4.0.">
    <meta name="dcterms.rights" content="CV. Jaya Karya Konsultan 2025">
    <meta property="og:locale" content="id_ID">
    <meta property="og:title" content="Konsultan Bangunan Blitar - Jasa Perencanaan & Pengawasan | Jaya Karya Konsultan​">
    <meta property="og:description" content="Kami memberikan layanan konsultansi perencanaan dan pengawasan bangunan profesional di Blitar dan sekitarnya.">
    <meta property="og:url" content="https://www.jayakaryakonsultan.com/">
    <meta property="og:site_name" content="CV. Jaya Karya Konsultan">
    <meta property="og:type" content="website">
    <meta property="og:image:alt" content="CV. Jaya Karya Konsultan - Konsultan Bangunan Profesional">
    <title>Konsultan Bangunan Blitar - Jasa Perencanaan & Pengawasan | Jaya Karya Konsultan</title>
    @vite('resources/css/app.css')
    <link rel="canonical" href="https://jayakaryakonsultan.com/" />
    <link rel="icon" href="{{ asset('assets/img/logo-cv.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="preload" as="image" href="{{ asset('assets/img/hero.webp') }}">
    <link rel="preload" as="image" href="{{ asset('assets/img/hero-small.webp') }}">
</head>
<body>
    <header id="navbar" class="h-11 fixed inset-x-0 top-0 z-50 transition-all duration-300">
        <nav class="flex justify-between items-center px-4 py-2 relative">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/img/logo-cv.webp') }}" alt="Logo CV. Jaya Karya Konsultan" class="logo h-6 md:h-8 w-auto">
                <span id="cv-title" class="text-white text-base md:text-lg font-bold transition-all duration-300">CV. Jaya Karya Konsultan</span>
            </div>

            <!-- Hamburger Menu Button -->
            <button id="menu-toggle" class="block md:hidden text-white focus:outline-none" aria-label="Buka menu navigasi">
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

    <section class="hero relative flex flex-col items-center justify-center text-center text-white" aria-label="Hero Section">
        <img
            src="{{ asset('assets/img/hero-small.webp') }}" 
            srcset="
             {{ asset('assets/img/hero-small.webp') }} 768w,
             {{ asset('assets/img/hero.webp') }} 1200w
            "
            sizes="(max-width: 768px) 100vw, 1200px"
            alt="Deskripsi hero"
            class="hero-image"
            loading="eager"
            fetchpriority="high"
            decoding="async"
        />
        <div class="gradient"></div>
        <div class="text-wrapper max-w-3xl px-6">
            <h1 class="text-2xl md:text-4xl font-bold leading-tight drop-shadow-md">
                Konsultan Bangunan Profesional di Blitar
            </h1>
            <p class="mt-4 text-base md:text-lg text-gray-200">
                CV. Jaya Karya Konsultan hadir sebagai konsultan bangunan terpercaya di Blitar, siap mendampingi proyek pembangunan Anda dengan layanan konsultansi terbaik yang didukung teknologi serta pendekatan ilmiah terkini.
            </p>
            <div class="mt-6 flex gap-4 justify-center">
                <a href="{{ route('user.about') }}"
                   class="border border-white hover:border-[#D70654] text-white font-semibold px-2 md:px-6 py-3 rounded-lg transition-all duration-300 hover:bg-[#D70654] shadow-lg hover:shadow-red-500/50">
                    Pelajari Lebih Lanjut
                </a>
                <a href="{{ route('user.galeri') }}"
                   class="border border-white hover:border-[#003192] text-white font-semibold px-2 md:px-6 py-3 rounded-lg transition-all duration 300 hover:bg-[#003192] shadow-lg hover:shadow-[#003192]/50">
                    Lihat Proyek Kami
                </a>
            </div>
        </div>
    </section>

    <section class="layanan h-auto w-full flex items-center justify-center py-12">
        <div class="wrapper w-3/4 h-full flex flex-col justify-center items-center">
            <h2 class="text-xl text-blue-600 font-semibold text-center">Tentang Kami</h2>
            <div class="flex gap-5 w-full h-full mt-6">
                <div class="text-wrapper w-full">
                    <p class="text-justify text-base sm:text-xl">Jaya Karya Konsultan adalah penyedia jasa konsultan bangunan yang berbasis di Blitar, dengan pengalaman luas dalam menangani berbagai proyek konstruksi, mulai dari rumah tinggal, gedung sekolah, fasilitas publik, hingga bangunan komersial. Kami hadir untuk memberikan solusi perencanaan dan pengawasan teknis yang profesional, efisien, serta sesuai dengan standar konstruksi yang berlaku. Dengan pendekatan yang transparan dan berorientasi pada kebutuhan klien, kami memastikan setiap proyek berjalan sesuai rencana—baik dari sisi waktu, anggaran, maupun kualitas.</p>
                </div>
            </div>
        </div>
    </section>

    <main class="relative h-auto py-12 px-6 bg-gray-50 overflow-hidden" aria-label="Layanan Kami">
        <div class="absolute inset-0 z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#8080800a_1.5px,transparent_1.5px),linear-gradient(to_bottom,#8080800a_1.5px,transparent_1.5px)] bg-[size:50px_50px]"></div>
        <div class="absolute z-10 -top-40 left-0 w-[60vw] h-[60vh] -translate-x-1/2 bg-gradient-to-br from-[#003192] to-[#D70654] opacity-30 blur-[100px]"></div>
        <div class="absolute z-10 bottom-0 left-[100%] w-[60vw] h-[60vh] -translate-x-1/2 bg-gradient-to-tr from-[#D70654] to-[#003192] opacity-30 blur-[100px]"></div>
        <div class="absolute z-10 bottom-0 left-0 w-full h-full bg-gradient-to-t from-white to-transparent"></div>
        <div class="absolute z-10 top-0 left-0 w-full h-[30dvh] bg-gradient-to-b from-white to-transparent"></div>

        <div class="text-center relative z-30">
            <h2 class="text-xl text-blue-600 font-semibold">Layanan Kami</h2>
            <h3 class="text-4xl font-bold text-gray-800 mt-2">
                Solusi Konsultansi Profesional untuk Kebutuhan Anda
            </h3>
            <p class="text-lg text-gray-700 max-w-4xl mx-auto mt-4 leading-relaxed">
                CV. Jaya Karya Konsultan menyediakan layanan konsultansi terbaik dalam perencanaan, dan pengawasan.
                Dengan pengalaman dan teknologi terkini, kami siap membantu mewujudkan proyek Anda dengan hasil yang optimal dan sesuai standar industri.
            </p>
        </div>

        <div class="card-wrapper mt-10 flex flex-wrap justify-center relative z-30 gap-6">
            <div class="card max-w-[25rem] bg-white px-6 py-6 border transition-all duration-300 shadow-lg hover:shadow-blue-500/50 border-gray-200 rounded-lg">
                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-950">Perencanaan Proyek</h4>
                <p class="font-normal text-gray-700">Kami membantu dalam perencanaan proyek yang matang untuk memastikan efisiensi dan efektivitas.</p>
            </div>
            <div class="card max-w-[25rem] bg-white px-6 py-6 border transition-all duration-300 shadow-lg hover:shadow-blue-500/50 border-gray-200 rounded-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Pengawasan Konstruksi</h5>
                <p class="font-normal text-gray-700">Pengawasan ketat terhadap setiap tahap konstruksi guna memastikan kualitas yang optimal.</p>
            </div>
        </div>
    </main>

    <section class="klien h-auto w-full py-12 text-center" aria-label="Klien Section">
        <h2 class="text-base md:text-xl text-red-600 font-semibold">Klien Kami</h2>
        <div class="logo-container h-[40dvh] pt-10 w-full relative overflow-hidden">
            <div class="absolute z-10 top-0 left-0 left-container w-[20%] h-full bg-gradient-to-r from-gray-100 to-transparent"></div>
            <div class="absolute z-10 top-0 right-0 right-container w-[20%] h-full bg-gradient-to-l from-gray-100 to-transparent"></div>

            <div class="logo-slider flex justify-center gap-20" id="logoSlider">
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_lingkungan_hidup_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Lingkungan Hidup</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_kebudayaan_dan_pariwisata_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Kebudayaan dan Pariwisata</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_pendistribusian_dan_perdagangan_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Pendistribusian dan Perdagangan</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Kesehatan</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Ketahanan Pangan dan Pertanian</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Perhubungan</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm w-full">Dinas Pekerjaan Umum dan Penataan Ruang</span>
                </div>
                <div class="logo-wrapper flex flex-col items-center">
                    <img src="{{ asset('assets/img/logo-dinas.png') }}" alt="logo_dinas_kota_blitar" width=807 height=1076 class="h-28 w-auto" loading='lazy'>
                    <span class="text-sm">Dinas Kepemudaan dan Olahraga</span>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-red-600 w-full">
        <div class="p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/img/logo-cv.webp') }}" class="h-8" alt="CV Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">CV. Jaya Karya Konsultan</span>
                </a>
                <ul class="flex gap-5 flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                    <li>
                        <h3 class="text-white">WhatsApp</h3>
                        <span class="text-white">{{ $wa }}</span>
                    </li>
                    <li>
                        <h3 class="text-white">Email</h3>
                        <span class="text-white">{{ $email }}</span>
                    </li>
                    <li>
                        <h3 class="text-white">Alamat</h3>
                        <span class="text-white">Jalan Aryo Blitar, RT 03, RW 02, Kota Blitar</span>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-white sm:mx-auto  lg:my-8" />
            <span class="block text-2xl font-bold sm:text-center text-white">"Jaya Karya Konsultan: Solusi Tepat untuk Setiap Proyek Anda!"</span>
        </div>
    </footer>

    <script defer>
        document.addEventListener("DOMContentLoaded", function () {
        const header = document.querySelector("header");
        const cvTitle = document.querySelector("#cv-title");
        const navLinks = document.querySelectorAll(".nav-link");
        const menuToggle = document.getElementById("menu-toggle");
        const navMenu = document.getElementById("nav-menu");
        const slider = document.getElementById("logoSlider");
        const logos = Array.from(slider.children);

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
                menuToggle.classList.add("text-white");
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

        logos.forEach((logo) => {
            let clone = logo.cloneNode(true);
            slider.appendChild(clone);
        });
    });
    </script>
    
    <!--Start of Tawk.to Script-->
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
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "CV. Jaya Karya Konsultan",
      "image": "https://www.jayakaryakonsultan.com/assets/img/logo-cv.ico",
      "@id": "https://www.jayakaryakonsultan.com",
      "url": "https://www.jayakaryakonsultan.com",
      "telephone": "+62{{ $wa }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jalan Aryo Blitar, RT 03, RW 02",
        "addressLocality": "Kota Blitar",
        "addressRegion": "Jawa Timur",
        "postalCode": "66121",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -8.0956,
        "longitude": 112.1685
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "08:00",
        "closes": "16:00"
      },
      "sameAs": [
        "https://wa.me/{{ $wa }}"
      ]
    }
    </script>
    
    <!-- FAQPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Apa itu CV. Jaya Karya Konsultan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CV. Jaya Karya Konsultan adalah perusahaan jasa konsultansi bangunan yang berbasis di Blitar."
          }
        },
        {
          "@type": "Question",
          "name": "Apa saja layanan yang ditawarkan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Kami menyediakan layanan perencanaan proyek dan pengawasan konstruksi profesional."
          }
        }
      ]
    }
    </script>
</body>
</html>
