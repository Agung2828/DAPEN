<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Dana Pensiun Bank Riau Kepri</title>

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
            background: rgba(0, 0, 0, 0.75);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
            overflow: hidden;
        }

        .loading-ring,
        .loading-text,
        .progress-container,
        .loading-percentage,
        .particle {
            display: none !important;
        }

        .logo-container {
            position: relative;
            margin: 0;
        }

        .pulsing-logo {
            width: 100px;
            object-fit: contain;
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

        #loader-wrapper.loader-hide {
            opacity: 0;
            visibility: hidden;
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
                <a href="{{ url('/dashboard') }}" class="nav-link active">Beranda</a>
                <a href="{{ url('/profile') }}" class="nav-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="nav-link">Kepesertaan</a>
                <a href="{{ url('/Peraturan') }}" class="nav-link">Peraturan</a>
                <a href="{{ url('/Warta') }}" class="nav-link">Warta</a>
            </nav>

            <!-- Mobile Nav -->
            <div class="mobile-nav" id="mobileNav">
                <a href="{{ url('/dashboard') }}" class="mobile-link active">Beranda</a>
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

        <!-- Quick Links -->
        <section class="quick-links">
            <div class="container">
                <div class="quick-links-grid">
                    <div class="quick-link-item" onclick="window.location.href='{{ route('Galeri') }}'">
                        <i class="fas fa-camera-retro"></i>
                        <span>Galeri Kegiatan</span>
                    </div>
                    <div class="quick-link-item" onclick="scrollToCalculator()">
                        <i class="fas fa-calculator"></i>
                        <span>Simulasi Manfaat</span>
                    </div>
                    <div class="quick-link-item" onclick="window.location.href='{{ route('formulir') }}'">
                        <i class="fas fa-download"></i>
                        <span>Download Formulir</span>
                    </div>
                    <div class="quick-link-item" onclick="window.location.href='{{ route('Pengaduan') }}'">
                        <i class="fas fa-headset"></i>
                        <span>Pengaduan</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
     NEWS PREVIEW (HOME)
========================= -->
        <section class="news-section" id="news-preview">
            <div class="main-content">
                <h2 class="section-title">Berita & Informasi Terkini</h2>
                <p class="section-subtitle">Update terbaru seputar Dana Pensiun Bank Riau Kepri</p>

                <!-- TAB FILTER -->
                <div class="news-tabs">
                    <button class="news-tab active" data-filter="semua">Semua Berita</button>
                    <button class="news-tab" data-filter="pengumuman">Pengumuman</button>
                    <button class="news-tab" data-filter="kegiatan">Kegiatan</button>
                    <button class="news-tab" data-filter="penghargaan">Penghargaan</button>
                </div>

                <!-- GRID BERITA -->
                <div class="news-grid">
                    @forelse ($berita as $item)
                        <div class="news-card tab-{{ strtolower($item->kategori) }}">
                            <div class="news-image1">
                                @php
                                    $fotoName = $item->foto ? basename(str_replace('\\', '/', $item->foto)) : null;
                                @endphp

                                @if ($fotoName)
                                    <img src="{{ asset('uploads/berita/' . rawurlencode($fotoName)) }}"
                                        alt="Foto Berita">
                                @else
                                    <img src="{{ asset('image/default.jpg') }}" alt="Foto Default">
                                @endif

                                <div class="news-date-badge">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </div>
                            </div>

                            <div class="news-content">
                                <div class="news-category">{{ strtoupper($item->kategori) }}</div>
                                <h3 class="news-title">{{ $item->judul }}</h3>
                                <p class="news-excerpt">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi, 150) }}
                                </p>
                                <a href="#" class="read-more">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @empty
                        <p style="padding:1rem; color:#666;">Belum ada berita yang ditambahkan.</p>
                    @endforelse
                </div>
            </div>
        </section>
        <style>
            .news-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 1.5rem;
            }

            .news-card {
                display: flex;
                flex-direction: column;
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            .news-image1 {
                position: relative;
                width: 100%;
                /* Gunakan padding-top untuk rasio gambar */
                padding-top: 56.25%;
                /* 16:9 ratio */
                overflow: hidden;
            }

            .news-image1 img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* agar menutupi kotak tanpa distorsi */
                display: block;
            }

            .news-date-badge {
                position: absolute;
                top: 10px;
                left: 10px;
                background: rgba(255, 0, 0, 0.9);
                color: #fff;
                padding: 5px 10px;
                border-radius: 10px;
                font-size: 0.8rem;
                font-weight: bold;
            }

            .news-content {
                padding: 1rem;
                display: flex;
                flex-direction: column;
            }

            .news-category {
                color: #c00;
                font-weight: bold;
                font-size: 0.8rem;
                text-transform: uppercase;
            }

            .news-title {
                margin: 0.5rem 0;
                font-size: 1.1rem;
                line-height: 1.3;
            }

            .news-excerpt {
                flex-grow: 1;
                margin-bottom: 0.5rem;
            }

            .read-more {
                color: #c00;
                font-weight: bold;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
            }

            .read-more i {
                margin-left: 5px;
            }
        </style>
        <!-- Why Choose Section -->
        <section class="why-choose">
            <div class="container">
                <h2 class="section-title" style="text-align: center;">Mengapa Memilih Dana Pensiun Bank Riau Kepri
                </h2>
                <p class="section-subtitle" style="text-align: center;">
                    Melayani lebih dari 25 tahun, Dana Pensiun Bank Riau Kepri senantiasa memberikan kemudahan dan
                    kecepatan
                    dalam merespon berbagai kebutuhan peserta dengan didukung oleh layanan yang prima
                </p>

                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3 class="feature-title">Terpercaya & Aman</h3>
                        <p class="feature-desc">Diawasi OJK dengan sistem keamanan berlapis untuk melindungi dana Anda
                        </p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-network-wired"></i></div>
                        <h3 class="feature-title">Pengelolaan Profesional</h3>
                        <p class="feature-desc">Tim ahli yang kompeten dan berpengalaman dalam mengelola dana pensiun
                        </p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-users"></i></div>
                        <h3 class="feature-title">Layanan Prima</h3>
                        <p class="feature-desc">Pelayanan terbaik untuk memenuhi kebutuhan peserta dengan responsif</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                        <h3 class="feature-title">Investasi Optimal</h3>
                        <p class="feature-desc">Pengelolaan investasi yang optimal untuk hasil maksimal dan
                            berkelanjutan</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-balance-scale"></i></div>
                        <h3 class="feature-title">Tata Kelola Baik</h3>
                        <p class="feature-desc">Menerapkan prinsip tata kelola yang baik dan transparan</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                        <h3 class="feature-title">Terus Berinovasi</h3>
                        <p class="feature-desc">Mengembangkan produk sesuai perkembangan untuk memenuhi kebutuhan
                            peserta</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Calculator Section -->
        <section class="calculator-section" id="simulasiManfaat">
            <h2 class="section-title">Simulasi Manfaat Pensiun</h2>
            <p class="section-subtitle">Rumus Manfaat Pensiun = 2,5% x Masa Kerja x PhDP</p>

            <div class="calculator-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>Masa Kerja (Tahun)</label>
                        <input type="number" id="masaKerjaInput" placeholder="Contoh: 25" step="0.01">
                        <small style="color: #666; font-size: 0.85rem; margin-top: 0.5rem; display: block;">
                            Akan otomatis terhitung jika tanggal diisi
                        </small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Tanggal Jadi Peserta</label>
                        <input type="date" id="joinDate">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pensiun</label>
                        <input type="date" id="retirementDate">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Penghasilan Dasar Pensiun (PhDP)</label>
                        <input type="text" id="phdp" placeholder="Contoh: 10000000">
                        <small style="color: #666; font-size: 0.85rem; margin-top: 0.5rem; display: block;">
                            PhDP = Gaji Pokok + Tunjangan Tetap
                        </small>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <button onclick="resetForm()"
                        style="background: linear-gradient(135deg, #ef5350 0%, #e53935 100%); color: white; padding: 1.2rem 3rem; border: none; border-radius: 50px; font-weight: 700; cursor: pointer; transition: all 0.3s; box-shadow: 0 8px 25px rgba(239, 83, 80, 0.3); font-size: 1.05rem;">
                        <i class="fas fa-redo"></i> Reset
                    </button>
                    <button class="calculate-btn" onclick="calculatePension()">
                        <i class="fas fa-calculator"></i> Hitung Estimasi
                    </button>
                </div>

                <div class="result-box" id="resultBox" style="display: none;">
                    <div class="result-label">Perkiraan Manfaat Pensiun Bulanan</div>
                    <div class="result-value" id="resultValue">Rp 0</div>
                    <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.3);">
                        <p style="font-size: 0.9rem; opacity: 0.9; line-height: 1.6;">
                            <strong>Rumus:</strong> 2,5% × Masa Kerja × PhDP<br>
                            <span id="formulaDetail" style="font-size: 0.85rem; opacity: 0.8;"></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function scrollToCalculator() {
                const targetElement = document.getElementById('simulasiManfaat');
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                function hitungMasaKerja() {
                    const join = document.getElementById("joinDate").value;
                    const retire = document.getElementById("retirementDate").value;
                    if (!join || !retire) return;

                    const joinDate = new Date(join);
                    const retireDate = new Date(retire);

                    let years = retireDate.getFullYear() - joinDate.getFullYear();
                    const m = retireDate.getMonth() - joinDate.getMonth();

                    if (m < 0 || (m === 0 && retireDate.getDate() < joinDate.getDate())) years--;
                    if (years < 0) years = 0;

                    document.getElementById("masaKerjaInput").value = years;
                }

                document.getElementById("joinDate").addEventListener("change", hitungMasaKerja);
                document.getElementById("retirementDate").addEventListener("change", hitungMasaKerja);

                window.calculatePension = function() {
                    const masaKerja = parseFloat(document.getElementById("masaKerjaInput").value);
                    const phdpRaw = document.getElementById("phdp").value;
                    const phdp = parseFloat(phdpRaw.replace(/[^0-9]/g, ""));

                    if (isNaN(masaKerja) || isNaN(phdp)) {
                        alert("Mohon isi Masa Kerja dan PhDP dengan benar!");
                        return;
                    }

                    const manfaat = 0.025 * masaKerja * phdp;

                    document.getElementById("resultValue").innerText =
                        "Rp " + manfaat.toLocaleString("id-ID");

                    document.getElementById("formulaDetail").innerText =
                        `2,5% × ${masaKerja} × ${phdp.toLocaleString("id-ID")}`;

                    document.getElementById("resultBox").style.display = "block";
                };

                window.resetForm = function() {
                    document.getElementById("masaKerjaInput").value = "";
                    document.getElementById("joinDate").value = "";
                    document.getElementById("retirementDate").value = "";
                    document.getElementById("phdp").value = "";
                    document.getElementById("resultBox").style.display = "none";
                };
            });
        </script>

    </div>
    </div>

    <!-- =========================
     HALAMAN BERITA (TAB MENU)
========================= -->
    <div class="news-grid">
        @forelse ($berita as $item)
            @php
                $fotoName = $item->foto ? basename(str_replace('\\', '/', $item->foto)) : null;
            @endphp

            <a href="{{ route('berita.show', $item->id) }}" class="news-card tab-{{ strtolower($item->kategori) }}">

                <div class="news-image1">
                    <img src="{{ $fotoName ? asset('uploads/berita/' . rawurlencode($fotoName)) : asset('image/default.jpg') }}"
                        alt="Foto Berita">

                    <div class="news-date-badge">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                    </div>
                </div>

                <div class="news-content">
                    <div class="news-category">{{ strtoupper($item->kategori) }}</div>
                    <h3 class="news-title">{{ $item->judul }}</h3>

                    <p class="news-excerpt">
                        {{ \Illuminate\Support\Str::limit($item->deskripsi, 150) }}
                    </p>

                    <span class="read-more">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </span>
                </div>

            </a>
        @empty
            <p style="padding:1rem; color:#666;">Belum ada berita yang ditambahkan.</p>
        @endforelse
    </div>


    <!-- =========================
     SCRIPT FILTER UNTUK 2 SECTION
========================= -->
    <script>
        document.querySelectorAll("#news-preview, #berita").forEach(section => {
            const tabs = section.querySelectorAll(".news-tab");
            const cards = section.querySelectorAll(".news-card");
            if (!tabs.length) return;

            tabs.forEach(tab => {
                tab.addEventListener("click", () => {
                    tabs.forEach(t => t.classList.remove("active"));
                    tab.classList.add("active");

                    const filter = tab.dataset.filter;

                    cards.forEach(card => {
                        card.classList.remove("hidden");
                        if (filter !== "semua" && !card.classList.contains("tab-" +
                                filter)) {
                            card.classList.add("hidden");
                        }
                    });
                });
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
                        Dana Pensiun Bank Riau Kepri memberikan jaminan kesejahteraan di masa pensiun dengan pengelolaan
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
                            <img src="{{ asset('image/logo-ojk.jpg') }}" alt="OJK Logo" class="logo-img bg-white">
                        </div>

                        <div class="compliance-item">
                            <p>Terdaftar Sebagai Anggota:</p>
                            <img src="{{ asset('image/adpi.jpg') }}" alt="ADPI Logo" class="logo-img bg-white">
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Dana Pensiun Bank Riau Kepri. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Slider functionality -->
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

</body>

</html>
