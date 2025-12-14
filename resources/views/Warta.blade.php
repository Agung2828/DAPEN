<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fafafa;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
        /* .main-header {
            background: rgba(250, 163, 1, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 999;
        } */

        /* .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 60px;
            object-fit: contain;
        } */

        /* .main-nav {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: #dc2626;
            transition: width 0.3s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        } */

        /* Hero Section */
        /* .hero-section {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        /* Main Content */
        /* .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }  */

        /* Category Section */
        .category-section {
            margin-bottom: 5rem;
        }

        .category-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2.5rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid #f0f0f0;
        }

        .category-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .category-header h2 {
            font-size: 2rem;
            color: #1a1a1a;
            font-weight: 700;
        }

        /* Image Slider */
        .image-slider {
            position: relative;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 2rem;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 50%;
        }

        .slide-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
        }

        .slide-item.active {
            opacity: 1;
        }

        .slide-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: #f5f5f5;
        }

        .slide-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            color: #333;
            transition: all 0.3s;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide-arrow:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .slide-prev {
            left: 2rem;
        }

        .slide-next {
            right: 2rem;
        }

        .slide-dots {
            position: absolute;
            bottom: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.75rem;
            z-index: 10;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid rgba(255, 255, 255, 0.8);
        }

        .dot:hover {
            background: rgba(255, 255, 255, 0.8);
            transform: scale(1.2);
        }

        .dot.active {
            background: white;
            width: 35px;
            border-radius: 6px;
        }

        .slider-description {
            background: linear-gradient(135deg, #fef9c3 0%, #fef3c7 100%);
            padding: 1.5rem 2rem;
            border-radius: 12px;
            margin-top: 1.5rem;
            border-left: 4px solid #f59e0b;
        }

        .slider-description p {
            margin: 0;
            color: #78350f;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .slider-description i {
            color: #f59e0b;
            margin-right: 0.5rem;
        }

        /* PDF Cards Grid */
        .pdf-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .pdf-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .pdf-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(220, 38, 38, 0.2);
            border-color: #dc2626;
        }

        .pdf-preview {
            position: relative;
            height: 350px;
            background: #f8f9fa;
            overflow: hidden;
        }

        .pdf-preview iframe {
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: none;
        }

        .pdf-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .pdf-card:hover .pdf-overlay {
            opacity: 1;
        }

        .pdf-overlay-content {
            text-align: center;
            color: white;
            transform: translateY(20px);
            transition: transform 0.3s;
        }

        .pdf-card:hover .pdf-overlay-content {
            transform: translateY(0);
        }

        .pdf-overlay-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .pdf-overlay-text {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .pdf-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);
        }

        .pdf-content {
            padding: 1.5rem;
        }

        .pdf-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .pdf-description {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .pdf-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #e5e7eb;
        }

        .pdf-date {
            color: #999;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .pdf-action {
            color: #dc2626;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* PDF Modal */
        .pdf-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .pdf-modal.active {
            display: flex;
        }

        .pdf-modal-content {
            width: 100%;
            max-width: 1200px;
            height: 90vh;
            background: white;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .pdf-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 2rem;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
        }

        .pdf-modal-title {
            font-size: 1.3rem;
            font-weight: 700;
        }

        .pdf-modal-actions {
            display: flex;
            gap: 1rem;
        }

        .pdf-modal-btn {
            background: white;
            color: #dc2626;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
        }

        .pdf-modal-btn:hover {
            background: #fef2f2;
            transform: translateY(-2px);
        }

        .pdf-modal-close {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .pdf-modal-close:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .pdf-modal-viewer {
            flex: 1;
            overflow: hidden;
        }

        .pdf-modal-viewer iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Warta Grid */
        .warta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .warta-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
        }

        .warta-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        /* PDF Preview Container */
        .warta-image {
            width: 100%;
            height: 280px;
            background: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            border-bottom: 2px solid #f0f0f0;
        }

        .warta-image iframe {
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: none;
        }

        .pdf-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0);
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
        }

        .warta-card:hover .pdf-overlay {
            background: rgba(0, 0, 0, 0.7);
        }

        .pdf-overlay-content {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.3s;
        }

        .warta-card:hover .pdf-overlay-content {
            opacity: 1;
            transform: scale(1);
        }

        .pdf-overlay-icon {
            font-size: 3rem;
            color: white;
            margin-bottom: 0.5rem;
        }

        .pdf-overlay-text {
            color: white;
            font-weight: 600;
            font-size: 1rem;
        }

        .warta-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(220, 38, 38, 0.9);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 10;
        }

        .warta-content {
            padding: 1.5rem;
        }

        .warta-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .warta-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .warta-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #f0f0f0;
        }

        .warta-date {
            font-size: 0.85rem;
            color: #999;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .warta-action {
            color: #dc2626;
            font-weight: 700;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: gap 0.3s;
            text-decoration: none;
        }

        .warta-card:hover .warta-action {
            gap: 0.75rem;
        }

        /* PDF Modal */
        .pdf-modal {
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
        }

        .pdf-modal.active {
            display: flex;
        }

        .pdf-modal-content {
            width: 90%;
            height: 90%;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .pdf-modal-header {
            background: #dc2626;
            color: white;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pdf-modal-title {
            font-size: 1.1rem;
            font-weight: 700;
        }

        .pdf-modal-actions {
            display: flex;
            gap: 1rem;
        }

        .pdf-modal-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .pdf-modal-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .pdf-modal-close {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .pdf-modal-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .pdf-modal-viewer {
            flex: 1;
            overflow: hidden;
        }

        .pdf-modal-viewer iframe {
            width: 100%;
            height: 100%;
            border: none;
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
                <a href="{{ url('/Warta') }}" class="nav-link active">Warta</a>
            </nav>

            <!-- Mobile Nav -->
            <div class="mobile-nav" id="mobileNav">
                <a href="{{ url('/dashboard') }}" class="mobile-link active">Beranda</a>
                <a href="{{ url('/profile') }}" class="mobile-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="mobile-link">Kepesertaan</a>
                <a href="{{ url('/Peraturan') }}" class="mobile-link">Peraturan</a>
                <a href="{{ url('/Warta') }}" class="mobile-link active">Warta</a>
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
                    <h1>Jaminan Masa Depan<br>Yang Cerah</h1>
                    <p>Dana Pensiun Bank Riau Kepri memberikan perlindungan finansial untuk hari tua Anda dengan
                        pengelolaan profesional dan transparan.</p>
                </div>
            </div>

            <div class="slide" style="background-image: url('{{ asset('image/SLIDER_PENDIDIKAN_25.jpg') }}');">
                <div class="slide-content">
                    <h1>Investasi Terpercaya<br>Untuk Masa Pensiun</h1>
                    <p>Pengelolaan dana pensiun yang amanah dan profesional dengan hasil investasi optimal untuk
                        kesejahteraan peserta.</p>
                </div>
            </div>

            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1600');">
                <div class="slide-content">
                    <h1>Layanan Prima<br>Untuk Peserta</h1>
                    <p>Tim ahli kami siap melayani kebutuhan kepesertaan Anda dengan profesional dan responsif.</p>
                </div>
            </div>

            <div class="slider-dots">
                <span class="dot active" onclick="changeSlide(0)"></span>
                <span class="dot" onclick="changeSlide(1)"></span>
                <span class="dot" onclick="changeSlide(2)"></span>
            </div>
        </div>
        <section class="quick-links">
            <!-- Main Content -->
            <main class="main-content">
                <!-- Apresiasi OJK 2023 -->
                {{-- <section class="quick-links">
            <div class="container"> --}}
                <section class="category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h2>Apresiasi OJK 2023</h2>
                    </div>

                    <div class="image-slider">
                        <div class="slider-wrapper">
                            <div class="slide-item active">
                                <img src="image/apresiasi-jan-2023.jpg" alt="Slide 1">
                            </div>
                            <div class="slide-item">
                                <img src="image/apresiasi-agu-2023.jpg" alt="Slide 2">
                            </div>
                            <div class="slide-item">
                                <img src="image/apresiasi-des-2023.jpg" alt="Slide 3">
                            </div>
                            <div class="slide-item">
                                <img src="image/apresiasi-okt-2023.jpg" alt="Slide 3">
                            </div>
                            <div class="slide-item">
                                <img src="image/apresiasi-nov-2023.jpg" alt="Slide 3">
                            </div>
                        </div>

                        <button class="slide-arrow slide-prev" onclick="moveSlide(-1)">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="slide-arrow slide-next" onclick="moveSlide(1)">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                        <div class="slide-dots">
                            <span class="dot active" onclick="currentSlide(0)"></span>
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                        </div>
                    </div>

                    <div class="slider-description">
                        <p><i class="fas fa-info-circle"></i> Dana Pensiun dengan Penyampaian Laporan Keuangan
                            Bulanan
                            Januari
                            2023 Tercepat dan Lengkap</p>
                    </div>
                </section>

                <!-- Majalah Info ADPI -->
                <section class="category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <h2>Majalah Info ADPI</h2>
                    </div>
                    <div class="warta-grid">
                        @foreach ($wartas as $warta)
                            <div class="pdf-card"
                                onclick="openPDF('{{ asset('storage/' . $warta->file_pdf) }}', '{{ $warta->judul }}')">

                                <!-- PREVIEW PDF -->
                                <div class="pdf-preview">
                                    <iframe
                                        src="{{ asset('storage/' . $warta->file_pdf) }}#page=1&view=FitH&toolbar=0&navpanes=0"
                                        scrolling="no">
                                    </iframe>

                                    <!-- OVERLAY -->
                                    <div class="pdf-overlay">
                                        <div class="pdf-overlay-content">
                                            <div class="pdf-overlay-icon">
                                                <i class="fas fa-eye"></i>
                                            </div>
                                            <div class="pdf-overlay-text">
                                                Klik untuk Lihat & Download
                                            </div>
                                        </div>
                                    </div>

                                    <!-- BADGE -->
                                    <span class="pdf-badge">
                                        {{ $warta->kategori }} {{ $warta->tanggal }}
                                    </span>
                                </div>

                                <!-- KETERANGAN BAWAH -->
                                <div class="pdf-content">
                                    <h3 class="pdf-title">{{ $warta->judul }}</h3>

                                    <p class="pdf-description">
                                        {{ $warta->deskripsi }}
                                    </p>

                                    <div class="pdf-meta">
                                        <span class="pdf-date">
                                            <i class="far fa-calendar"></i>
                                            {{ $warta->tanggal }}
                                        </span>

                                        <span class="pdf-action">
                                            Lihat PDF <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </section>

            </main>

            <!-- PDF Modal -->
            <div class="pdf-modal" id="pdfModal">
                <div class="pdf-modal-content">
                    <div class="pdf-modal-header">
                        <div class="pdf-modal-title" id="pdfTitle">Dokumen PDF</div>
                        <div class="pdf-modal-actions">
                            <button class="pdf-modal-btn" onclick="downloadPDF()">
                                <i class="fas fa-download"></i>
                                Download
                            </button>
                            <button class="pdf-modal-close" onclick="closePDF()">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="pdf-modal-viewer">
                        <iframe id="pdfViewer" src=""></iframe>
                    </div>
                </div>
            </div>
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
                // Image Slider
                let currentIndex = 0;
                const slides = document.querySelectorAll('.slide-item');
                const dots = document.querySelectorAll('.dot');
                let autoSlideInterval;

                function showSlide(index) {
                    if (index >= slides.length) {
                        currentIndex = 0;
                    } else if (index < 0) {
                        currentIndex = slides.length - 1;
                    } else {
                        currentIndex = index;
                    }

                    slides.forEach((slide, i) => {
                        slide.classList.remove('active');
                        if (i === currentIndex) {
                            slide.classList.add('active');
                        }
                    });

                    dots.forEach((dot, i) => {
                        dot.classList.remove('active');
                        if (i === currentIndex) {
                            dot.classList.add('active');
                        }
                    });
                }

                function moveSlide(direction) {
                    showSlide(currentIndex + direction);
                    resetAutoSlide();
                }

                function currentSlide(index) {
                    showSlide(index);
                    resetAutoSlide();
                }

                function autoSlide() {
                    currentIndex++;
                    showSlide(currentIndex);
                }

                function startAutoSlide() {
                    autoSlideInterval = setInterval(autoSlide, 4000);
                }

                function resetAutoSlide() {
                    clearInterval(autoSlideInterval);
                    startAutoSlide();
                }

                startAutoSlide();

                const sliderElement = document.querySelector('.image-slider');
                if (sliderElement) {
                    sliderElement.addEventListener('mouseenter', () => {
                        clearInterval(autoSlideInterval);
                    });

                    sliderElement.addEventListener('mouseleave', () => {
                        startAutoSlide();
                    });
                }

                showSlide(0);

                // PDF Modal Functions
                let currentPDFUrl = '';

                function openPDF(url, title) {
                    currentPDFUrl = url;
                    document.getElementById('pdfTitle').textContent = title;
                    document.getElementById('pdfViewer').src = url;
                    document.getElementById('pdfModal').classList.add('active');
                    document.body.style.overflow = 'hidden';
                }

                function closePDF() {
                    document.getElementById('pdfModal').classList.remove('active');
                    document.getElementById('pdfViewer').src = '';
                    document.body.style.overflow = 'auto';
                }

                function downloadPDF() {
                    const link = document.createElement('a');
                    link.href = currentPDFUrl;
                    link.download = document.getElementById('pdfTitle').textContent + '.pdf';
                    link.click();
                }

                // Close modal on outside click
                document.getElementById('pdfModal').addEventListener('click', function(e) {
                    if (e.target === this) {
                        closePDF();
                    }
                });
            </script>

</body>

</html>
