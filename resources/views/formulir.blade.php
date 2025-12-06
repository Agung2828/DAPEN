<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Formulir - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* ============================
   LOADING SCREEN STYLES (VERSI TRANSPARAN)
============================ */
        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 99999;
            /* --- PERUBAHAN UTAMA DI SINI: Background semi-transparan --- */
            background: rgba(0, 0, 0, 0.75);
            /* Warna Hitam dengan Opacity 75% */
            /* Jika Anda ingin benar-benar transparan: background: transparent; */

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
            overflow: hidden;
        }

        /* ⚠️ SEMBUNYIKAN elemen tambahan yang tidak Anda inginkan */
        .loading-ring,
        .loading-text,
        .progress-container,
        .loading-percentage,
        .particle {
            display: none !important;
        }

        /* Logo Container (Tidak perlu diubah, tetap di tengah) */
        .logo-container {
            position: relative;
            /* Hapus margin agar logo benar-benar di tengah vertikal */
            margin: 0;
        }

        /* Logo dengan Pulse Animation */
        .pulsing-logo {
            width: 100px;
            object-fit: contain;
            /* Hilangkan drop-shadow yang mungkin mengganggu tampilan transparan */
            filter: none;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        /* Hapus keyframes spin, fadeInOut, loadProgress karena elemennya disembunyikan */

        #loader-wrapper.loader-hide {
            opacity: 0;
            visibility: hidden;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
        }

        /* Page Container */
        .page-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #1b5e20 0%, #43a047 100%);
            padding: 80px 40px;
            border-radius: 20px;
            margin-bottom: 50px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            letter-spacing: -1px;
        }

        .hero-section p {
            font-size: 1.3rem;
            opacity: 0.95;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Stats Section */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .stat-box {
            background: white;
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            border: 1px solid #e8e8e8;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            border-color: #43a047;
        }

        .stat-box i {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #b19912 0%, #c5c225e8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .stat-box h3 {
            font-size: 2rem;
            color: #2d3748;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .stat-box p {
            color: #718096;
            font-size: 0.95rem;
        }

        /* Main Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Card Styling */
        .form-card {
            background: white;
            border-radius: 16px;
            padding: 35px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid #e8e8e8;
            display: flex;
            flex-direction: column;
        }

        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #b9a91a 0%, #d46727 100%);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .form-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
            border-color: #e0d31f;
        }

        .form-card:hover::before {
            transform: scaleX(1);
        }

        /* Special Card for Complaints */
        .complaint-card {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            border: none;
        }

        .complaint-card::before {
            background: rgba(255, 255, 255, 0.3);
        }

        .complaint-card .card-header h2,
        .complaint-card .card-description {
            color: white !important;
        }

        .complaint-card .form-item {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .complaint-card .form-item:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateX(10px);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .complaint-card .form-name {
            color: white !important;
        }

        .complaint-card .form-item i {
            color: white;
        }

        /* Card Header */
        .card-header {
            margin-bottom: 28px;
            position: relative;
        }

        .card-icon {
            width: 65px;
            height: 65px;
            background: linear-gradient(135deg, #e4c61d 0%, #ceb630 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 6px 20px rgba(27, 94, 32, 0.3);
        }

        .complaint-card .card-icon {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.2);
        }

        .card-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .card-header h2 {
            font-size: 1.6rem;
            color: #2d3748;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .card-description {
            color: #718096;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Form Items */
        .form-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-item {
            display: flex;
            align-items: center;
            padding: 18px 20px;
            background: #f8f9fa;
            border-radius: 10px;
            border: 2px solid transparent;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .form-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(135deg, #dfbc20 0%, #beb423 100%);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .form-item:hover {
            background: #e8f5e9;
            border-color: #b5ce28;
            transform: translateX(8px);
        }

        .form-item:hover::before {
            transform: scaleY(1);
        }

        .form-item:active {
            transform: translateX(4px) scale(0.98);
        }

        .form-item i {
            font-size: 1.4rem;
            color: #d1ce26;
            margin-right: 18px;
            transition: transform 0.3s ease;
            min-width: 24px;
        }

        .form-item:hover i {
            transform: scale(1.15);
        }

        .form-name {
            flex: 1;
            font-size: 1rem;
            color: #2d3748;
            font-weight: 600;
        }

        .file-badge {
            background: linear-gradient(135deg, #e65b24 0%, #a05143 100%);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(27, 94, 32, 0.25);
        }

        .complaint-card .file-badge {
            background: white;
            color: #dc3545;
        }

        /* Download Success Animation */
        .form-item.downloading i {
            animation: downloadPulse 0.6s ease;
        }

        @keyframes downloadPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.3);
            }
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: white;
            padding: 18px 25px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 15px;
            transform: translateY(150%);
            transition: transform 0.4s ease;
            z-index: 2000;
        }

        .toast.show {
            transform: translateY(0);
        }

        .toast i {
            font-size: 1.5rem;
            color: #43a047;
        }

        .toast-content h4 {
            font-size: 1rem;
            color: #2d3748;
            margin-bottom: 4px;
        }

        .toast-content p {
            font-size: 0.85rem;
            color: #718096;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .content-grid {
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .page-container {
                padding: 30px 15px;
            }

            .hero-section {
                padding: 60px 30px;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1.1rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .form-card {
                padding: 25px;
            }

            .stats-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .hero-section {
                padding: 50px 20px;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }

            .stat-box {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Main Header -->

    <!-- LOADING SCREEN -->
    <div id="loader-wrapper">
        <div class="logo-container">
            <img src="{{ asset('image/Loadinglogo.png') }}" alt="Logo Dana Pensiun" class="pulsing-logo">
        </div>
    </div>

    <script>
        window.addEventListener("load", function() {
            const loader = document.getElementById("loader-wrapper");

            // Hapus logika progress bar karena sudah tidak digunakan
            // Cukup tambahkan delay sebelum menghilang
            setTimeout(function() {
                loader.classList.add("loader-hide");
            }, 1500); // Tunda 1.5 detik
        });
    </script>
    <!-- Main Header -->
    <header class="main-header" id="mainHeader">
        <div class="container">

            <!-- Logo -->
            <div class="logo-section">
                <a href="index.html" class="logo">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Main Nav -->
            <nav class="main-nav">
                <a href="{{ url('/dashboard') }}" class="nav-link active">Beranda</a>
                <a href="{{ url('/profile') }}" class="nav-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="nav-link">kepesertaan</a>
            </nav>

            <!-- Mobile Nav -->
            <div class="mobile-nav" id="mobileNav">
                <a href="index.html" class="mobile-link active">Beranda</a>
                <a href="Profil.html" class="mobile-link">Profil</a>
                <a href="Kepesertaan.html" class="mobile-link">Kepesertaan</a>
                <a href="Peraturan.html" class="mobile-link">Peraturan</a>
                <a href="Laporan.html" class="mobile-link">Laporan</a>
                <a href="Berita.html" class="mobile-link">Berita</a>
            </div>

            <!-- Header Actions -->
            <div class="header-actions">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
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

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
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
                    <button class="slide-btn" onclick="showPage('kepesertaan')">Daftar Sekarang</button>
                </div>
            </div>

            <div class="slide" style="background-image: url('{{ asset('image/SLIDER_PENDIDIKAN_25.jpg') }}');">
                <div class="slide-content">
                    <h1>Investasi Terpercaya<br>Untuk Masa Pensiun</h1>
                    <p>Pengelolaan dana pensiun yang amanah dan profesional dengan hasil investasi optimal untuk
                        kesejahteraan peserta.</p>
                    <button class="slide-btn">Pelajari Lebih Lanjut</button>
                </div>
            </div>

            <div class="slide"
                style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1600');">
                <div class="slide-content">
                    <h1>Layanan Prima<br>Untuk Peserta</h1>
                    <p>Tim ahli kami siap melayani kebutuhan kepesertaan Anda dengan profesional dan responsif.</p>
                    <button class="slide-btn">Hubungi Kami</button>
                </div>
            </div>

            <div class="slider-dots">
                <span class="dot active" onclick="changeSlide(0)"></span>
                <span class="dot" onclick="changeSlide(1)"></span>
                <span class="dot" onclick="changeSlide(2)"></span>
            </div>
        </div>

        <!-- Stats Section -->
        <section class="quick-links">
            <div class="container">
                <div class="stats-container">
                    <div class="stat-box">
                        <i class="fas fa-file-alt"></i>
                        <h3>20+</h3>
                        <p>Total Formulir</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-clock"></i>
                        <h3>24/7</h3>
                        <p>Akses Tersedia</p>
                    </div>
                    <div class="stat-box">
                        <i class="fas fa-shield-alt"></i>
                        <h3>100%</h3>
                        <p>Aman & Terpercaya</p>
                    </div>
                </div>

                <!-- Content Grid -->
                <div class="content-grid">
                    <!-- Manfaat Pensiun Card -->
                    <div class="form-card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <h2>Manfaat Pensiun (MP)</h2>
                            <p class="card-description">Formulir permohonan pembayaran manfaat pensiun sesuai jenis
                                klaim
                            </p>
                        </div>
                        <div class="form-list">
                            <a href="pdf/F-K10-01 Permohonan MP Normal.pdf" class="form-item" data-name="mp normal"
                                download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Normal</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K11-01 Permohonan MP Cacat.pdf" class="form-item" data-name="mp cacat"
                                download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Cacat</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K12-01 Permohonan MP Ditunda.pdf" class="form-item" data-name="mp ditunda"
                                download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Ditunda</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K13-01 Permohonan MP Ditunda Dialihkan.pdf" class="form-item"
                                data-name="mp ditunda dialihkan" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Ditunda Dialihkan</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K14-01 Permohonan MP Ditunda Jatuh Tempo.pdf" class="form-item"
                                data-name="mp ditunda jatuh tempo" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Ditunda Jatuh Tempo</span>
                                <span class="file-badge">PDF</span>
                            </a>
                        </div>
                    </div>

                    <!-- MP Khusus Card -->
                    <div class="form-card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h2>MP Khusus</h2>
                            <p class="card-description">Formulir untuk kondisi pensiun khusus dan ahli waris</p>
                        </div>
                        <div class="form-list">
                            <a href="pdf/F-K15-01 Permohonan MP Dipercepat.pdf" class="form-item"
                                data-name="mp dipercepat" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Dipercepat</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K16-01 Permohonan MP Janda-Duda.pdf" class="form-item"
                                data-name="mp janda duda" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Janda/Duda</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K17-01 Permohonan MP Anak.pdf" class="form-item" data-name="mp anak"
                                download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Anak</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/F-K18-01 Permohonan MP Sekaligus & -3 Tahun.pdf" class="form-item"
                                data-name="mp sekaligus" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Form MP Sekaligus & Kurang 3 Tahun</span>
                                <span class="file-badge">PDF</span>
                            </a>
                        </div>
                    </div>

                    <!-- Laporan Keuangan Card -->
                    <div class="form-card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h2>Laporan Keuangan</h2>
                            <p class="card-description">Laporan Keuangan Tahunan Dana Pensiun Bank Riau Kepri
                                Syariah</p>
                        </div>
                        <div class="form-list">
                            <a href="pdf/DPBRK-LKA-12-2024-00.pdf" class="form-item"
                                data-name="Laporan Keuangan 2024" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Laporan Keuangan 2024 (Audited)</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/DPBRK-LKA-12-2023-00.pdf" class="form-item"
                                data-name="Laporan Keuangan 2023" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Laporan Keuangan 2023 (Audited)</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/DPBRK-LKA-12-2022-00.pdf" class="form-item"
                                data-name="Laporan Keuangan 2022" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Laporan Keuangan 2022 (Audited)</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/DPBRK-LKA-12-2021-00.pdf" class="form-item"
                                data-name="Laporan Keuangan 2021" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Laporan Keuangan 2021 (Audited)</span>
                                <span class="file-badge">PDF</span>
                            </a>
                            <a href="pdf/DPBRK-LKA-12-2020-00.pdf" class="form-item"
                                data-name="Laporan Keuangan 2020" download>
                                <i class="fas fa-file-download"></i>
                                <span class="form-name">Laporan Keuangan 2020 (Audited)</span>
                                <span class="file-badge">PDF</span>
                            </a>
                        </div>
                    </div>

                    <!-- Layanan Pengaduan Card -->
                    <div class="form-card complaint-card">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h2>Layanan Pengaduan</h2>
                            <p class="card-description">Sampaikan pengaduan atau keluhan Anda melalui formulir
                                resmi</p>
                        </div>
                        <div class="form-list">
                            <a href="pdf/F-K04-00 Saran dan Pendapat.pdf" class="form-item"
                                data-name="pengaduan peserta" download>
                                <i class="fas fa-comment-dots"></i>
                                <span class="form-name">Form Layanan Pengaduan Peserta</span>
                                <span class="file-badge">PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toast Notification -->
            <div class="toast" id="toast">
                <i class="fas fa-check-circle"></i>
                <div class="toast-content">
                    <h4>Download Berhasil!</h4>
                    <p>Formulir sedang diunduh...</p>
                </div>
            </div>

            <script>
                // Download Functionality with Toast
                const toast = document.getElementById('toast');
                const formItems = document.querySelectorAll('.form-item');

                formItems.forEach(item => {
                    item.addEventListener('click', function(e) {
                        this.classList.add('downloading');
                        toast.classList.add('show');

                        const fileName = this.querySelector('.form-name').textContent;
                        toast.querySelector('p').textContent = `${fileName} sedang diunduh...`;

                        setTimeout(() => {
                            this.classList.remove('downloading');
                            toast.classList.remove('show');
                        }, 3000);
                    });
                });
            </script>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="footer-grid">

                        <div class="footer-section">
                            <h3>Tentang Kami</h3>
                            <p style="color: #d1d5db; font-size: 0.95rem; line-height: 1.9;">
                                Dana Pensiun Bank Riau Kepri memberikan jaminan kesejahteraan di masa pensiun dengan
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
                                    <img src="image/logo-ojk.jpg" alt="OJK Logo" class="logo-img bg-white">
                                </div>

                                <div class="compliance-item">
                                    <p>Terdaftar Sebagai Anggota:</p>
                                    <img src="image/adpi.jpg" alt="ADPI Logo" class="logo-img bg-white">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="footer-bottom">
                        <p>&copy; 2025 Dana Pensiun Bank Riau Kepri. All rights reserved.</p>
                    </div>
                </div>
            </footer>
</body>

</html>
