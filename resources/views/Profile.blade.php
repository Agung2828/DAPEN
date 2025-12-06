<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            padding: 6rem 2rem 4rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(251, 191, 36, 0.2) 0%, transparent 70%);
            border-radius: 50%;
        }

        .page-header h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: 800;
            position: relative;
            z-index: 1;
        }

        .page-header p {
            font-size: 1.3rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Main Content */
        .main-content {
            padding: 4rem 0;
        }

        /* Section */
        .section {
            margin-bottom: 5rem;
        }

        .section-title {
            font-size: 2.5rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
            font-weight: 800;
            text-align: center;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #dc2626 0%, #fbbf24 100%);
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 3rem;
        }

        /* Visi Misi Cards */
        .visi-misi-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }

        .visi-card,
        .misi-card {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .visi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #fbbf24 0%, #f59e0b 100%);
        }

        .misi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #16a34a 0%, #15803d 100%);
        }

        .visi-card:hover,
        .misi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .visi-card .card-icon {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }

        .misi-card .card-icon {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
        }

        .card-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1a1a1a;
        }

        .card-content {
            font-size: 1.1rem;
            color: #4b5563;
            line-height: 1.9;
        }

        .misi-list {
            list-style: none;
            padding: 0;
        }

        .misi-list li {
            padding: 1rem 0;
            padding-left: 2.5rem;
            position: relative;
            color: #4b5563;
            font-size: 1.05rem;
            line-height: 1.8;
            border-bottom: 1px solid #f0f0f0;
        }

        .misi-list li:last-child {
            border-bottom: none;
        }

        .misi-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #16a34a;
            font-size: 1.2rem;
            top: 1rem;
        }

        /* Profile Cards */
        .profile-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .profile-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #dc2626 0%, #fbbf24 100%);
        }

        .profile-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #dc2626;
            border: 5px solid #fff;
            box-shadow: 0 5px 20px rgba(220, 38, 38, 0.2);
        }

        .profile-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.5rem;
        }

        .profile-position {
            font-size: 1rem;
            color: #dc2626;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .profile-period {
            font-size: 0.9rem;
            color: #666;
            padding: 0.5rem 1rem;
            background: #f9fafb;
            border-radius: 20px;
            display: inline-block;
        }

        .profile-info {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #f0f0f0;
        }

        .profile-info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
            font-size: 0.95rem;
        }

        .profile-info-label {
            color: #666;
            font-weight: 500;
        }

        .profile-info-value {
            color: #1a1a1a;
            font-weight: 600;
        }

        /* Struktur Organisasi */
        .struktur-container {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-top: 3rem;
        }

        .struktur-image {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        }

        .struktur-placeholder {
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            height: 600px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 1rem;
            color: #9ca3af;
        }

        .struktur-placeholder i {
            font-size: 4rem;
        }

        .struktur-placeholder p {
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* Tab Navigation */
        .tab-navigation {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
            border-bottom: 3px solid #f0f0f0;
            flex-wrap: wrap;
            justify-content: center;
        }

        .tab-btn {
            padding: 1rem 2rem;
            background: none;
            border: none;
            color: #666;
            font-weight: 600;
            cursor: pointer;
            position: relative;
            transition: all 0.3s;
            border-radius: 8px 8px 0 0;
            font-size: 1rem;
        }

        .tab-btn:hover {
            color: #dc2626;
            background: #fef2f2;
        }

        .tab-btn.active {
            color: #dc2626;
            background: #fef2f2;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #dc2626 0%, #fbbf24 100%);
            border-radius: 3px 3px 0 0;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .profile-grid {
                grid-template-columns: 1fr;
            }

            .visi-misi-container {
                gap: 2rem;
            }

            .card-header {
                flex-direction: column;
                text-align: center;
            }

            .tab-navigation {
                flex-direction: column;
            }

            .tab-btn {
                width: 100%;
            }

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

            // Hapus logika progress bar karena sudah tidak digunakan
            // Cukup tambahkan delay sebelum menghilang
            setTimeout(function() {
                loader.classList.add("loader-hide");
            }, 1500); // Tunda 1.5 detik
        });
    </script>
    <!-- Page Header -->
    <!-- Main Header -->
    <header class="main-header" id="mainHeader">
        <div class="container">
            <div class="logo-section">
                <a href="index.html" class="logo">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo">
                </a>
            </div>
            <nav class="main-nav">
                <a href="{{ url('/dashboard') }}" class="nav-link">Beranda</a>
                <a href="{{ url('/profile') }}" class="nav-link active">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="nav-link">kepesertaan</a>
            </nav>
            <div></div>
            <div class="mobile-nav" id="mobileNav">
                <a href="index.html" class="mobile-link">Beranda</a>
                <a href="Profil.html" class="mobile-link active">Profil</a>
                <a href="#" class="mobile-link">Kepesertaan</a>
                <a href="#" class="mobile-link">Peraturan</a>
                <a href="#" class="mobile-link">Laporan</a>
                <a href="#" class="mobile-link">Berita</a>
            </div>
            <script>
                document.querySelector(".mobile-menu-btn").addEventListener("click", function() {
                    this.classList.toggle("active");
                });
            </script>
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
    <script>
        const mobileBtn = document.querySelector(".mobile-menu-btn");
        const mobileNav = document.getElementById("mobileNav");
        mobileBtn.addEventListener("click", () => {
            mobileNav.classList.toggle("active");
        });
    </script>
    <script>
        // Scroll effect
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
            <div class="slide active" style="background-image: url('{{ asset('image/STANDAR_LAYANAN.jpg') }}');">
                <div class="slide-content">
                    <h1>Jaminan Masa Depan<br>Yang Cerah</h1>
                    <p>Dana Pensiun Bank Riau Kepri memberikan perlindungan finansial untuk hari tua Anda dengan
                        pengelolaan profesional dan transparan.</p>
                    <button class="slide-btn" onclick="showPage('kepesertaan')">Daftar Sekarang</button>
                </div>
            </div>

            <div class="slide" style="background-image: url('{{ asset('image/informasi_publik.jpg') }}');">
                <div class="slide-content">
                    <h1>Investasi Terpercaya<br>Untuk Masa Pensiun</h1>
                    <p>Pengelolaan dana pensiun yang amanah dan profesional dengan hasil investasi optimal untuk
                        kesejahteraan peserta.</p>
                    <button class="slide-btn">Pelajari Lebih Lanjut</button>
                </div>
            </div>

            <div class="slide" style="background-image: url('image/profile_ppid.jpg');">
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

        <!-- Main Content -->
        <section class="quick-links">
            <div class="container">

                <!-- Visi & Misi Section -->
                <section class="section">
                    <h2 class="section-title">Visi & Misi</h2>
                    <p class="section-subtitle">Komitmen kami dalam memberikan pelayanan terbaik</p>

                    <div class="visi-misi-container">
                        <!-- Visi Card -->
                        <div class="visi-card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h3 class="card-title">Visi</h3>
                            </div>
                            <div class="card-content">
                                Menjadi Dana Pensiun Yang Sehat dan mampu Menjunjung Kepentingan
                                Stakeholder/Pemangku
                                Kepentingan Guna Jaminan Terpeliharanya kesinambungan Penghasilan Hari Tua Bagi
                                Peserta
                            </div>
                        </div>

                        <!-- Misi Card -->
                        <div class="misi-card">
                            <div class="card-header">
                                <div class="card-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3 class="card-title">Misi</h3>
                            </div>
                            <div class="card-content">
                                <ul class="misi-list">
                                    <li>Melaksanakan Peraturan Dana Pensiun, Sehingga Peserta Menerima Haknya Dengan
                                        Tepat Jumlah dan Tepat Waktu</li>
                                    <li>Mengelola Kekayaan Dana Pensiun Secara Efektif, Efisien Dan Hasil Maksimal,
                                        Sehingga Memberikan Motivasi, Rasa Aman Dan Ketenangan Dalam Bekerja Bagi
                                        Peserta Sehingga Meningkatkan Produktivitas Perusahaan, Karena Hari Tuanya
                                        Terjamin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Profil Organisasi Section -->
                <section class="section">
                    <h2 class="section-title">Profil Organisasi</h2>
                    <p class="section-subtitle">Struktur kepemimpinan Dana Pensiun Bank Riau Kepri</p>

                    <!-- Tab Navigation -->
                    <div class="tab-navigation">
                        <button class="tab-btn active" onclick="openTab('dewan-pengawas')">Dewan Pengawas</button>
                        <button class="tab-btn" onclick="openTab('pengurus')">Pengurus</button>
                        <button class="tab-btn" onclick="openTab('kepala-dept')">Kepala Departemen</button>
                    </div>

                    <!-- Dewan Pengawas Tab -->
                    <div id="dewan-pengawas" class="tab-content active">
                        <div class="profile-grid">
                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3 class="profile-name">Said Syamsuri</h3>
                                <p class="profile-position">Ketua Dewan Pengawas</p>
                                <p class="profile-period">Periode: 2023-2027</p>
                                <div class="profile-info">
                                    <div class="profile-info-item">
                                        <span class="profile-info-label">Status</span>
                                        <span class="profile-info-value">Wakil Pendiri</span>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <h3 class="profile-name">M. Affan</h3>
                                <p class="profile-position">Anggota Dewan Pengawas</p>
                                <p class="profile-period">Periode: 2021-2025</p>
                                <div class="profile-info">
                                    <div class="profile-info-item">
                                        <span class="profile-info-label">Status</span>
                                        <span class="profile-info-value">Wakil Peserta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pengurus Tab -->
                    <div id="pengurus" class="tab-content">
                        <div class="profile-grid">
                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <h3 class="profile-name">Edirison</h3>
                                <p class="profile-position">Direktur Kepesertaan & Umum</p>
                                <div style="margin: 0.5rem 0; font-size: 0.9rem; color: #666; font-style: italic;">
                                    Merangkap Plt. Direktur Utama
                                </div>
                                <p class="profile-period">Periode: 2025-2026</p>
                            </div>

                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="profile-name">Yuharman</h3>
                                <p class="profile-position">Direktur Investasi</p>
                                <p class="profile-period">Periode: 2021-2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- Kepala Departemen Tab -->
                    <div id="kepala-dept" class="tab-content">
                        <div class="profile-grid">
                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <h3 class="profile-name">Firmansyah</h3>
                                <p class="profile-position">Kepala Departemen Akuntansi & SI</p>
                            </div>

                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <h3 class="profile-name">Aresfanber</h3>
                                <p class="profile-position">Kepala Departemen Umum & Kepesertaan</p>
                            </div>

                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <h3 class="profile-name">Nanang Eko Fadli</h3>
                                <p class="profile-position">Kepala Departemen Investasi</p>
                            </div>

                            <div class="profile-card">
                                <div class="profile-avatar">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="profile-name">Dede Ermania</h3>
                                <p class="profile-position">Kepala Satuan Pengawas Internal (SPI)</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Struktur Organisasi Section -->
                <section class="section">
                    <h2 class="section-title">Struktur Organisasi</h2>
                    <p class="section-subtitle">Bagan organisasi Dana Pensiun Bank Riau Kepri</p>

                    <div class="struktur-container">
                        <img src="{{ asset('image/Struktur organisasi.png') }}" alt="Struktur Organisasi"
                            class="struktur-image">
                </section>

            </div>
    </div>
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
                        <a><i class="fab fa-facebook-f"></i></a>
                        <a><i class="fab fa-twitter"></i></a>
                        <a><i class="fab fa-instagram"></i></a>
                        <a><i class="fab fa-linkedin-in"></i></a>
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
                            <span>Pekanbaru, Riau 28125</span>
                        </li>
                        <li style="display: flex; gap: 0.75rem; color: #d1d5db; margin-bottom: 0.5rem;">
                            <i class="fas fa-phone" style="color: #fbbf24;"></i>
                            <span>(0761) 5781181</span>
                        </li>
                        <li style="display: flex; gap: 0.75rem; color: #d1d5db; margin-bottom: 1rem;">
                            <i class="fas fa-envelope" style="color: #fbbf24;"></i>
                            <span>dapenbankriau@gmail.com</span>
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

    <script>
        // Slider functionality
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

        // Auto slide
        setInterval(() => {
            currentSlide++;
            showSlide(currentSlide);
        }, 5000);

        // Page navigation
        function showPage(pageId) {
            document.querySelectorAll('.page-content').forEach(page => {
                page.classList.remove('active');
            });

            document.getElementById(pageId).classList.add('active');

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        // Tab Functionality
        function openTab(tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all buttons
            const tabBtns = document.querySelectorAll('.tab-btn');
            tabBtns.forEach(btn => {
                btn.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(tabName).classList.add('active');

            // Add active class to clicked button
            event.target.classList.add('active');
        }
    </script>
</body>

</html>
