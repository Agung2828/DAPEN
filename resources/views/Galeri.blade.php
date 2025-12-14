<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Arial', sans-serif;
            color: #ffffff;
            line-height: 1.6;
            background: #fafafa;
            overflow-x: hidden;
        } */

        /* .main-header {
            position: fixed;
            top: 0.5rem;
            left: 0;
            right: 0;
            z-index: 999;
            background: transparent;
            transition: all 0.4s ease;
            padding: 1rem 0;
        }

        .main-header.scrolled {
            background: rgba(250, 163, 1, 0.651);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 15px rgba(255, 255, 255, 0.1);
            top: 0;
            padding: 0.75rem 0;
        }

        .main-header .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        } */

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            animation: slideInLeft 0.6s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .logo img {
            height: 80px;
            transition: height 0.4s ease;
            object-fit: contain;
        }

        .main-header.scrolled .logo img {
            height: 60px;
        }

        /* Navigation */
        .main-nav {
            display: flex;
            gap: 0.25rem;
            align-items: center;
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .nav-link {
            color: rgb(8, 8, 8);
            text-decoration: none;
            font-size: 0.938rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            text-shadow: 0 1px 2px rgba(250, 247, 247, 0.2);
        }

        .main-header.scrolled .nav-link {
            color: #333;
            text-shadow: none;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            transition: left 0.3s;
            z-index: -1;
            border-radius: 8px;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            left: 0;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #dc2626;
            transform: translateY(-2px);
        }

        /* Header Actions */
        .header-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .search-btn,
        .mobile-menu-btn {
            background: transparent;
            border: none;
            color: rgb(8, 8, 8);
            font-size: 1.25rem;
            cursor: pointer;
            padding: 0.5rem;
            transition: all 0.3s ease;
            border-radius: 50%;
        }

        .search-btn:hover,
        .mobile-menu-btn:hover {
            background: rgba(221, 31, 31, 0.589);
            transform: scale(1.1);
            color: white;
        }

        .main-header.scrolled .search-btn,
        .main-header.scrolled .mobile-menu-btn {
            color: #0f0f0f;
        }

        .main-header.scrolled .search-btn:hover,
        .main-header.scrolled .mobile-menu-btn:hover {
            background: rgb(243, 243, 243);
        }

        /* Mobile Navigation */
        .mobile-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 100vh;
            background: white;
            padding: 5rem 2rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            transform: translateY(-100%);
            transition: transform 0.4s ease;
            z-index: 998;
            overflow-y: auto;
        }

        .mobile-nav.active {
            transform: translateY(0);
        }

        .mobile-link {
            color: #333;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .mobile-link:hover,
        .mobile-link.active {
            color: #dc2626;
        }

        /* Mobile Menu Button Animation */
        .mobile-menu-btn {
            width: 35px;
            height: 35px;
            position: relative;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .mobile-menu-btn .line {
            width: 25px;
            height: 3px;
            background: #333;
            position: absolute;
            transition: 0.4s ease;
            border-radius: 5px;
        }

        .mobile-menu-btn .line1 {
            transform: translateY(-6px);
        }

        .mobile-menu-btn .line2 {
            transform: translateY(6px);
        }

        .mobile-menu-btn.active .line1 {
            transform: rotate(45deg);
        }

        .mobile-menu-btn.active .line2 {
            transform: rotate(-45deg);
        }

        /* Hero Section with Image */
        .hero-section {
            position: relative;
            width: 100%;
            height: 650px;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.5) 0%, rgba(220, 38, 38, 0.3) 100%);
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: zoomIn 1.5s ease-out;
        }

        @keyframes zoomIn {
            from {
                transform: scale(1.1);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(251, 191, 36, 0.7) 0%, rgba(239, 68, 68, 0.6) 100%);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            animation: slideUp 1s ease-out 0.3s both;
            text-align: center;
            color: #ffffff;
            max-width: 1200px;
            padding: 0 2rem;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translate(-50%, -40%);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 800;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.35rem;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
            line-height: 1.8;
        }

        /* Container */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Gallery Grid Section */
        .gallery-wrapper {
            padding: 5rem 0;
        }

        .gallery-section {
            background: #ffffff;
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 3rem;
            margin-bottom: 4rem;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(251, 191, 36, 0.15);
        }

        .gallery-title {
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 700;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #fbbf24 0%, #ef4444 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            padding-bottom: 1rem;
        }

        .gallery-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #fbbf24, #ef4444);
            border-radius: 2px;
        }

        /* Modern Grid Layout */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            aspect-ratio: 4/3;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(251, 191, 36, 0.4) 0%, rgba(239, 68, 68, 0.4) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: 1;
        }

        .gallery-item:hover::before {
            opacity: 1;
        }

        .gallery-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 50px rgba(251, 191, 36, 0.5);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1.5rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
            transform: translateY(100%);
            transition: transform 0.4s ease;
            z-index: 2;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-overlay-text {
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* View All Button */
        .view-all-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2rem;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #fbbf24 0%, #ef4444 100%);
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(251, 191, 36, 0.4);
        }

        .view-all-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(251, 191, 36, 0.6);
        }

        /* Lightbox */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            animation: fadeIn 0.3s ease;
        }

        .lightbox.active {
            display: flex;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .lightbox-content {
            max-width: 90vw;
            max-height: 90vh;
            position: relative;
            animation: zoomIn 0.3s ease;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            border-radius: 15px;
            box-shadow: 0 25px 100px rgba(0, 0, 0, 0.8);
        }

        .lightbox-close {
            position: absolute;
            top: -50px;
            right: 0;
            background: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            color: #1e293b;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-close:hover {
            background: #fbbf24;
            color: white;
            transform: rotate(90deg);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            color: #1e293b;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-nav:hover {
            background: #ef4444;
            color: white;
            transform: translateY(-50%) scale(1.1);
        }

        .lightbox-nav.prev {
            left: 20px;
        }

        .lightbox-nav.next {
            right: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-nav {
                display: none;
            }

            .mobile-menu-btn {
                display: flex;
            }

            .hero-section {
                height: 450px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .gallery-section {
                padding: 2rem 1.5rem;
                margin-bottom: 2.5rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .container {
                padding: 0 1rem;
            }

            .lightbox-nav {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .main-nav {
                display: flex;
            }

            .mobile-menu-btn,
            .mobile-nav {
                display: none;
            }
        }

        /* Loading Animation */
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .loading-skeleton {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.05) 25%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.05) 75%);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
            border-radius: 20px;
        }



        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            color: #fff;
            max-width: 600px;
            width: min(600px, 90vw);
            /* biar aman di mobile */
            z-index: 5;

            text-align: center;
            /* kalau mau teksnya ikut center */
            padding: 0 16px;
            /* biar nggak mepet di layar kecil */
        }

        .slide-content h1 {
            font-size: clamp(2rem, 5vw, 4.2rem);
            /* responsif mobile-desktop */
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .slide-content p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            line-height: 1.7;
            max-width: 550px;
            margin: 0 auto;
            /* biar paragraf tetap center */
            opacity: 0.95;
        }
    </style>
</head>

<body>
    <!-- LOADING SCREEN -->
    <div id="loader-wrapper">
        <div class="logo-container">
            <img src="{{ asset('image/Loadinglogo.png') }}" alt="Logo Dana Pensiun" class="pulsing-logo">
        </div>
    </div>

    <script>
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader-wrapper");
            setTimeout(function() {
                loader.classList.add("loader-hide");
            }, 1500);
        });
    </script>

    <!-- Main Header -->
    <header class="main-header" id="mainHeader">
        <div class="container">

            <!-- Logo -->
            <div class="logo-section">
                <a href="{{ url('/dashboard') }}" class="logo">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Main Nav -->
            <nav class="main-nav">
                <a href="{{ url('/dashboard') }}" class="nav-link">Beranda</a>
                <a href="{{ url('/profile') }}" class="nav-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="nav-link">Kepesertaan</a>
                <a href="{{ url('/Peraturan') }}" class="nav-link">Peraturan</a>
                <a href="{{ url('/Warta') }}" class="nav-link">Warta</a>
            </nav>

            <!-- Mobile Nav -->
            <div class="mobile-nav" id="mobileNav">
                <a href="{{ url('/dashboard') }}" class="mobile-link">Beranda</a>
                <a href="{{ url('/profile') }}" class="mobile-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="mobile-link">Kepesertaan</a>
                <a href="{{ url('/Peraturan') }}" class="mobile-link">Peraturan</a>
                <a href="{{ url('/Warta') }}" class="mobile-link">Warta</a>
            </div>

            <!-- Header Actions -->
            <div class="header-actions">
                {{-- <button class="search-btn"> --}}
                {{-- <i class="fas fa-search"></i> --}}
                </button>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

        </div>
    </header>

    <!-- MOBILE NAV SCRIPT -->
    <script>
        const mobileBtn = document.querySelector(".mobile-menu-btn");
        const mobileNav = document.getElementById("mobileNav");

        mobileBtn.addEventListener("click", () => {
            mobileNav.classList.toggle("active");
        });
    </script>

    <!-- SCROLL EFFECT -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 50) header.classList.add('scrolled');
            else header.classList.remove('scrolled');
        });
    </script>

    <!-- Home Page -->
    <div id="home" class="page-content active">
        <!-- Hero Slider -->
        <div class="hero-slider">
            <div class="slide active" style="background-image: url('{{ asset('image/SLIDER_BARU_2_copy1.jpg') }}');">
                <div class="slide-content">
                    <h1>Galeri</h1>
                    <P>Dokumentasi kegiatan dan aktivitas Dana Pensiun Bank Riau Kepri dalam memberikan layanan terbaik
                        untuk para peserta.</P>
                </div>
            </div>
        </div>
        <section class="quick-links">
            {{-- <div class="container"> --}}
            <!-- Gallery Sections -->
            <div class="container">
                <!-- Gallery 1 -->
                <div class="gallery-wrapper">
                    @foreach ($galleries as $gallery)
                        <div class="gallery-section">
                            <h2 class="gallery-title">
                                {{ $gallery->judul }}
                            </h2>

                            <div class="gallery-grid" id="gallery{{ $gallery->id }}">
                                @foreach ($gallery->items as $item)
                                    <div class="gallery-item"
                                        onclick="openLightbox(this, 'gallery{{ $gallery->id }}')">

                                        <img src="{{ asset('storage/' . $item->image) }}"
                                            alt="{{ $item->caption ?? 'Gallery Image' }}">

                                        <div class="gallery-overlay">
                                            <p class="gallery-overlay-text">
                                                {{ $item->caption }}
                                            </p>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            <!-- Lightbox -->
            <div class="lightbox" id="lightbox" onclick="closeLightbox(event)">
                <div class="lightbox-content" onclick="event.stopPropagation()">
                    <button class="lightbox-close" onclick="closeLightbox()">
                        <i class="fas fa-times"></i>
                    </button>
                    <button class="lightbox-nav prev" onclick="navigateLightbox(-1)">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <img id="lightbox-img" src="" alt="Preview">
                    <button class="lightbox-nav next" onclick="navigateLightbox(1)">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <script>
                let currentIndex = 0;
                let galleryImages = [];

                function openLightbox(element, galleryId) {
                    const gallery = document.getElementById(galleryId);
                    galleryImages = Array.from(gallery.querySelectorAll('.gallery-item img'));

                    currentIndex = galleryImages.indexOf(element.querySelector('img'));

                    const lightbox = document.getElementById('lightbox');
                    const img = document.getElementById('lightbox-img');

                    img.src = galleryImages[currentIndex].src;
                    lightbox.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }

                function closeLightbox(e) {
                    if (e) e.stopPropagation();
                    document.getElementById('lightbox').classList.remove('active');
                    document.body.style.overflow = '';
                }

                function navigateLightbox(direction) {
                    if (!galleryImages.length) return;

                    currentIndex = (currentIndex + direction + galleryImages.length) % galleryImages.length;

                    const img = document.getElementById('lightbox-img');
                    img.style.opacity = '0';

                    setTimeout(() => {
                        img.src = galleryImages[currentIndex].src;
                        img.style.opacity = '1';
                    }, 150);
                }

                // Keyboard support
                document.addEventListener('keydown', function(e) {
                    const lightbox = document.getElementById('lightbox');
                    if (!lightbox.classList.contains('active')) return;

                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowRight') navigateLightbox(1);
                    if (e.key === 'ArrowLeft') navigateLightbox(-1);
                });
            </script>

            <!-- Slider functionality -->
            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="footer-grid">

                        <div class="footer-section">
                            <h3>Tentang Kami</h3>
                            <p style="color: #d1d5db; font-size: 0.95rem; line-height: 1.9;">
                                Dana Pensiun Bank Riau Kepri memberikan jaminan kesejahteraan di masa pensiun
                                dengan
                                pengelolaan
                                yang profesional dan transparan.
                            </p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                        <div class="footer-section">
                            <h3>Tautan Cepat</h3>
                            <ul>
                                <li><a>Beranda</a></li>
                                <li><a>Profil</a></li>
                                <li><a>Kepesertaan</a></li>
                                <li><a>Laporan</a></li>
                                <li><a>Berita</a></li>
                            </ul>
                        </div>

                        <div class="footer-section">
                            <h3>Layanan</h3>
                            <ul>
                                <li><a>Program Pensiun</a></li>
                                <li><a>Simulasi Manfaat</a></li>
                                <li><a>Pengaduan</a></li>
                                <li><a>FAQ</a></li>
                                <li><a>Download Formulir</a></li>
                            </ul>
                        </div>

                        <div class="footer-section">
                            <h3 style="margin-bottom: 1rem;">Kontak & Legalitas</h3>
                            <ul style="margin-bottom: 2rem;">
                                <li style="display: flex; gap: 0.75rem; color: #d1d5db; margin-bottom: 0.5rem;">
                                    <i class="fas fa-map-marker-alt" style="margin-top: 0.25rem; color: #fbbf24;"></i>
                                    <span>Pekanbaru, Riau 28116</span>
                                </li>
                                <li style="display: flex; gap: 0.75rem; color: #d1d5db; margin-bottom: 0.5rem;">
                                    <i class="fas fa-phone" style="color: #fbbf24;"></i>
                                    <span>(0761) 123-4567</span>
                                </li>
                                <li style="display: flex; gap: 0.75rem; color: #d1d5db; margin-bottom: 1rem;">
                                    <i class="fas fa-envelope" style="color: #fbbf24;"></i>
                                    <span>info@dapenbankbrk.co.id</span>
                                </li>
                            </ul>

                            <div class="compliance-group">
                                <div class="compliance-item">
                                    <p>Terdaftar dan Diawasi Oleh:</p>
                                    <img src="{{ asset('image/logo-ojk.jpg') }}" alt="OJK Logo"
                                        class="logo-img bg-white">
                                </div>

                                <div class="compliance-item">
                                    <p>Terdaftar Sebagai Anggota:</p>
                                    <img src="{{ asset('image/adpi.jpg') }}" alt="ADPI Logo"
                                        class="logo-img bg-white">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="footer-bottom">
                        <p>&copy; 2025 Dana Pensiun Bank Riau Kepri. All rights reserved.</p>
                    </div>
                </div>
            </footer>
            <script>
                let currentSlide = 0;
                const slides = document.querySelectorAll('.slide');
                const dots = document.querySelectorAll('.dot');

                function showSlide(n) {
                    slides.forEach(slide => slide.classList.remove('active'));
                    dots.forEach(dot => dot.classList.remove('active'));

                    currentSlide = n;
                    if (currentSlide >= slides.length) currentSlide = 0;
                    if (currentSlide < 0) currentSlide = slides.length - 1;

                    slides[currentSlide].classList.add('active');
                    dots[currentSlide].classList.add('active');
                }

                function changeSlide(n) {
                    showSlide(n);
                }

                setInterval(() => {
                    currentSlide++;
                    showSlide(currentSlide);
                }, 5000);

                function showPage(pageId) {
                    document.querySelectorAll('.page-content').forEach(page => {
                        page.classList.remove('active');
                    });

                    const el = document.getElementById(pageId);
                    if (el) el.classList.add('active');

                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            </script>
            <script>
                // Mobile Menu Toggle
                const mobileBtn = document.getElementById('mobileMenuBtn');
                const mobileNav = document.getElementById('mobileNav');

                mobileBtn.addEventListener('click', () => {
                    mobileNav.classList.toggle('active');
                    mobileBtn.classList.toggle('active');
                });

                // Close mobile menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!mobileBtn.contains(e.target) && !mobileNav.contains(e.target)) {
                        mobileNav.classList.remove('active');
                        mobileBtn.classList.remove('active');
                    }
                });

                // Scroll Effect for Header
                window.addEventListener('scroll', function() {
                    const header = document.getElementById('mainHeader');
                    if (window.scrollY > 50) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                });

                // Gallery Lightbox
                let currentGallery = '';
                let currentIndex = 0;
                let galleryImages = [];

                function openLightbox(element, galleryId) {
                    currentGallery = galleryId;
                    const gallery = document.getElementById(galleryId);
                    galleryImages = Array.from(gallery.querySelectorAll('.gallery-item img'));
                    currentIndex = galleryImages.indexOf(element.querySelector('img'));

                    const lightbox = document.getElementById('lightbox');
                    const img = document.getElementById('lightbox-img');

                    img.src = galleryImages[currentIndex].src;
                    lightbox.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }

                function closeLightbox(event) {
                    if (event) event.stopPropagation();
                    const lightbox = document.getElementById('lightbox');
                    lightbox.classList.remove('active');
                    document.body.style.overflow = '';
                }

                function navigateLightbox(direction) {
                    currentIndex += direction;
                    if (currentIndex < 0) currentIndex = galleryImages.length - 1;
                    if (currentIndex >= galleryImages.length) currentIndex = 0;

                    const img = document.getElementById('lightbox-img');
                    img.style.opacity = '0';
                    setTimeout(() => {
                        img.src = galleryImages[currentIndex].src;
                        img.style.opacity = '1';
                    }, 150);
                }

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    const lightbox = document.getElementById('lightbox');
                    if (lightbox.classList.contains('active')) {
                        if (e.key === 'Escape') closeLightbox();
                        if (e.key === 'ArrowLeft') navigateLightbox(-1);
                        if (e.key === 'ArrowRight') navigateLightbox(1);
                    }
                });

                // Smooth image transition
                document.getElementById('lightbox-img').style.transition = 'opacity 0.15s ease';
            </script>

</body>

</html>
