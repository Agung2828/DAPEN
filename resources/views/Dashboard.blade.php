<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Dana Pensiun Bank Riau Kepri</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
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
                    <a href="{{ url('/Peraturan') }}" class="nav-link">Peraturan</a>
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
                <div class="slide active"
                    style="background-image: url('{{ asset('image/SLIDER_BARU_2_copy1.jpg') }}');">
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

            <!-- Quick Links -->
            <section class="quick-links">
                <div class="container">
                    <div class="quick-links-grid">
                        <div class="quick-link-item" onclick="showPage('Galeri')">
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
                        <div class="quick-link-item"onclick="window.location.href='{{ route('Pengaduan') }}'">>
                            <i class="fas fa-headset"></i>
                            <span>Pengaduan</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <div class="main-content">
                <!-- News Section -->
                <section class="news-section">

                    <h2 class="section-title">Berita & Informasi Terkini</h2>
                    <p class="section-subtitle">Update terbaru seputar Dana Pensiun Bank Riau Kepri</p>

                    <!-- Tabs -->
                    <div class="news-tabs">
                        <button class="news-tab active">Semua Berita</button>
                        <button class="news-tab">Pengumuman</button>
                        <button class="news-tab">Kegiatan</button>
                        <button class="news-tab">Penghargaan</button>
                    </div>

                    <!-- Grid -->
                    <div class="news-grid">

                        <!-- PENGHARGAAN -->
                        <div class="news-card tab-penghargaan">
                            <div class="news-image1">
                                <div class="news-date-badge">15 Nov 2025</div>
                            </div>
                            <div class="news-content">
                                <div class="news-category">PENGHARGAAN</div>
                                <h3 class="news-title">Apresiasi OJK untuk Kinerja Dana Pensiun 2024</h3>
                                <p class="news-excerpt">Dana Pensiun Bank Riau Kepri menerima apresiasi dari OJK...</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <!-- KEGIATAN -->
                        <div class="news-card tab-kegiatan">
                            <div class="news-image2">
                                <div class="news-date-badge">10 Nov 2025</div>
                            </div>
                            <div class="news-content">
                                <div class="news-category">KEGIATAN</div>
                                <h3 class="news-title">Sosialisasi Program Pensiun Baru</h3>
                                <p class="news-excerpt">Kegiatan sosialisasi program pensiun yang dihadiri peserta...
                                </p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>

                        <!-- PENGUMUMAN -->
                        <div class="news-card tab-pengumuman">
                            <div class="news-image3">
                                <div class="news-date-badge">8 Nov 2025</div>
                            </div>
                            <div class="news-content">
                                <div class="news-category">PENGUMUMAN</div>
                                <h3 class="news-title">Informasi Penting untuk Peserta</h3>
                                <p class="news-excerpt">Pengumuman terbaru terkait hak dan kewajiban peserta...</p>
                                <a href="#" class="read-more">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Why Choose Section -->
                <section class="why-choose">
                    <div class="container">
                        <h2 class="section-title" style="text-align: center;">Mengapa Memilih Dana Pensiun Bank Riau
                            Kepri
                        </h2>
                        <p class="section-subtitle" style="text-align: center;">Melayani lebih dari 25 tahun, Dana
                            Pensiun
                            Bank Riau Kepri senantiasa memberikan kemudahan dan kecepatan dalam merespon berbagai
                            kebutuhan
                            peserta dengan didukung oleh layanan yang prima</p>

                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 class="feature-title">Terpercaya & Aman</h3>
                                <p class="feature-desc">Diawasi OJK dengan sistem keamanan berlapis untuk melindungi
                                    dana
                                    Anda</p>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <h3 class="feature-title">Pengelolaan Profesional</h3>
                                <p class="feature-desc">Tim ahli yang kompeten dan berpengalaman dalam mengelola dana
                                    pensiun</p>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3 class="feature-title">Layanan Prima</h3>
                                <p class="feature-desc">Pelayanan terbaik untuk memenuhi kebutuhan peserta dengan
                                    responsif
                                </p>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="feature-title">Investasi Optimal</h3>
                                <p class="feature-desc">Pengelolaan investasi yang optimal untuk hasil maksimal dan
                                    berkelanjutan</p>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-balance-scale"></i>
                                </div>
                                <h3 class="feature-title">Tata Kelola Baik</h3>
                                <p class="feature-desc">Menerapkan prinsip tata kelola yang baik dan transparan</p>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h3 class="feature-title">Terus Berinovasi</h3>
                                <p class="feature-desc">Mengembangkan produk sesuai perkembangan untuk memenuhi
                                    kebutuhan
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
                            <div
                                style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.3);">
                                <p style="font-size: 0.9rem; opacity: 0.9; line-height: 1.6;">
                                    <strong>Rumus:</strong> 2,5% × Masa Kerja × PhDP<br>
                                    <span id="formulaDetail" style="font-size: 0.85rem; opacity: 0.8;"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <script>
                    /**
                     * Fungsi untuk menggulir ke bagian Kalkulator Manfaat Pensiun
                     */
                    function scrollToCalculator() {
                        // Mendapatkan elemen tujuan (kalkulator) berdasarkan ID
                        const targetElement = document.getElementById('simulasiManfaat');

                        if (targetElement) {
                            // Menggunakan method scrollIntoView() untuk menggulir ke elemen tersebut
                            targetElement.scrollIntoView({
                                behavior: 'smooth', // Animasi guliran yang halus
                                block: 'start' // Gulir hingga elemen berada di bagian atas viewport
                            });
                        }
                    }
                    document.addEventListener("DOMContentLoaded", function() {

                        // =============================
                        // Hitung otomatis masa kerja
                        // =============================
                        function hitungMasaKerja() {
                            const join = document.getElementById("joinDate").value;
                            const retire = document.getElementById("retirementDate").value;

                            if (!join || !retire) return;

                            const joinDate = new Date(join);
                            const retireDate = new Date(retire);

                            let years = retireDate.getFullYear() - joinDate.getFullYear();
                            const m = retireDate.getMonth() - joinDate.getMonth();

                            if (m < 0 || (m === 0 && retireDate.getDate() < joinDate.getDate())) {
                                years--;
                            }

                            if (years < 0) years = 0;
                            document.getElementById("masaKerjaInput").value = years;
                        }

                        document.getElementById("joinDate").addEventListener("change", hitungMasaKerja);
                        document.getElementById("retirementDate").addEventListener("change", hitungMasaKerja);

                        // =============================
                        // Fungsi HITUNG MANFAAT PENSIUN
                        // =============================
                        window.calculatePension = function() {
                            const masaKerja = parseFloat(document.getElementById("masaKerjaInput").value);

                            // Ambil nilai PhDP dan bersihkan karakter selain angka
                            const phdpRaw = document.getElementById("phdp").value;
                            const phdp = parseFloat(phdpRaw.replace(/[^0-9]/g, ""));

                            if (isNaN(masaKerja) || isNaN(phdp)) {
                                alert("Mohon isi Masa Kerja dan PhDP dengan benar!");
                                return;
                            }

                            // Rumus: 2,5% x masa kerja x phdp
                            const manfaat = 0.025 * masaKerja * phdp;

                            document.getElementById("resultValue").innerText =
                                "Rp " + manfaat.toLocaleString("id-ID");

                            document.getElementById("formulaDetail").innerText =
                                `2,5% × ${masaKerja} × ${phdp.toLocaleString("id-ID")}`;

                            document.getElementById("resultBox").style.display = "block";
                        };

                        // =============================
                        // Fungsi RESET
                        // =============================
                        window.resetForm = function() {
                            document.getElementById("masaKerjaInput").value = "";
                            document.getElementById("joinDate").value = "";
                            document.getElementById("retirementDate").value = "";
                            document.getElementById("phdp").value = "";

                            document.getElementById("resultBox").style.display = "none";
                        };

                    });
                </script>
                <!--Formulir --->
                <div id="Formulir" class="page-content">
                    <div class="main-content">

                        <div class="page-header page-header-download">
                            <h1>Unduh Formulir</h1>
                            <p>Akses cepat ke semua dokumen dan formulir penting Dana Pensiun.</p>
                        </div>

                        <div class="download-container">

                            <div class="download-group">
                                <h2 class="group-title">Permohonan Pembayaran Manfaat Pensiun (MP)</h2>
                                <p class="group-description">Pilih dan unduh formulir yang sesuai dengan jenis klaim
                                    Manfaat Pensiun yang diajukan.</p>

                                <div class="form-list">
                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Normal.pdf') }}" target="_blank"
                                        class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Normal</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Cacat.pdf') }}" target="_blank"
                                        class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Cacat</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Ditunda_Dialihkan.pdf') }}"
                                        target="_blank" class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Ditunda Dialihkan</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Ditunda_Jatuh_Tempo.pdf') }}"
                                        target="_blank" class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Ditunda Jatuh Tempo</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Dipercepat.pdf') }}"
                                        target="_blank" class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Dipercepat</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Janda_Duda.pdf') }}"
                                        target="_blank" class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Janda/Duda</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Anak.pdf') }}" target="_blank"
                                        class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Anak</span>
                                        <span class="file-type">PDF</span>
                                    </a>

                                    <a href="{{ asset('formulir/Form_Permohonan_MP_Sekaligus.pdf') }}"
                                        target="_blank" class="form-item">
                                        <i class="fas fa-file-download"></i>
                                        <span class="form-name">Form Permohonan MP Sekaligus & Kurang 3 Tahun</span>
                                        <span class="file-type">PDF</span>
                                    </a>
                                </div>
                            </div>

                            <div class="download-group complaint-group">
                                <h2 class="group-title">Layanan Pengaduan Peserta</h2>
                                <p class="group-description">Apabila ada pengaduan peserta yang ingin disampaikan,
                                    dapat
                                    mengisi formulir di bawah ini.</p>

                                <div class="form-list">
                                    <a href="{{ asset('formulir/Form_Layanan_Pengaduan_Peserta.pdf') }}"
                                        target="_blank" class="form-item form-item-highlight">
                                        <i class="fas fa-bullhorn"></i>
                                        <span class="form-name">Form Layanan Pengaduan Peserta</span>
                                        <span class="file-type">PDF</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Info Cards -->
                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fas fa-file-contract"></i>
                            </div>
                            <h3 class="info-card-title">Peraturan Dana Pensiun</h3>
                        </div>
                        <div class="info-card-content">
                            Peraturan Dana Pensiun yang telah disahkan oleh Dewan Pengawas dan disetujui oleh Otoritas
                            Jasa
                            Keuangan mengatur hak dan kewajiban peserta.
                        </div>
                        <a href="#" class="info-card-link" onclick="showPage('peraturan')">
                            Lihat Peraturan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="info-card-title">Penghargaan</h3>
                        </div>
                        <div class="info-card-content">
                            Dana Pensiun Bank Riau Kepri telah menerima berbagai penghargaan atas pengelolaan dana
                            pensiun
                            yang profesional dan transparan.
                        </div>
                        <a href="#" class="info-card-link">
                            Lihat Penghargaan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h3 class="info-card-title">Layanan Pengaduan</h3>
                        </div>
                        <div class="info-card-content">
                            Kami menyediakan layanan pengaduan untuk peserta yang membutuhkan bantuan atau ingin
                            menyampaikan keluhan.
                        </div>
                        <a href="#" class="info-card-link">
                            Ajukan Pengaduan
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profil Page -->
        <div id="profil" class="page-content">
            <div class="main-content">
                <div class="page-header">
                    <h1>Profil Organisasi</h1>
                    <p>Dana Pensiun Bank Riau Kepri</p>
                </div>

                <div class="content-card">
                    <h2>Tentang Kami</h2>
                    <p>Dana Pensiun Bank Riau Kepri didirikan oleh PT Bank Riau Kepri Syariah sebagai wujud kepedulian
                        terhadap kesejahteraan karyawan di masa pensiun. Dengan pengalaman lebih dari 25 tahun, kami
                        telah
                        melayani ribuan peserta dengan pengelolaan dana yang profesional dan transparan sesuai dengan
                        peraturan perundang-undangan yang berlaku.</p>

                    <h3>Visi</h3>
                    <p>Menjadi Dana Pensiun yang terpercaya, profesional, dan berkelanjutan dalam memberikan jaminan
                        kesejahteraan bagi peserta pada masa pensiun dengan pengelolaan yang amanah dan transparan.</p>

                    <h3>Misi</h3>
                    <ul>
                        <li>Mengelola dana pensiun secara profesional dan optimal</li>
                        <li>Memberikan pelayanan prima kepada seluruh peserta</li>
                        <li>Menjaga keamanan dan pertumbuhan dana pensiun</li>
                        <li>Menerapkan tata kelola yang baik dan transparan</li>
                        <li>Meningkatkan kesejahteraan peserta secara berkelanjutan</li>
                    </ul>
                </div>

                <div class="stats-grid-page">
                    <div class="stat-box">
                        <h3>Tahun Berdiri</h3>
                        <div class="value">1999</div>
                    </div>
                    <div class="stat-box">
                        <h3>Total Peserta</h3>
                        <div class="value">5,000+</div>
                    </div>
                    <div class="stat-box">
                        <h3>Dana Kelolaan</h3>
                        <div class="value">Rp 500M+</div>
                    </div>
                    <div class="stat-box">
                        <h3>Penghargaan</h3>
                        <div class="value">15+</div>
                    </div>
                </div>

                <div class="content-card">
                    <h2>Struktur Organisasi</h2>
                    <h3>Dewan Pengawas</h3>
                    <p>Dewan Pengawas bertugas mengawasi pengelolaan dana pensiun dan memastikan bahwa pengelolaan
                        dilakukan
                        sesuai dengan peraturan yang berlaku.</p>

                    <h3>Pengurus</h3>
                    <p>Pengurus bertanggung jawab atas pengelolaan dana pensiun sehari-hari dan pelaksanaan keputusan
                        yang
                        telah ditetapkan oleh Pendiri dan Dewan Pengawas.</p>
                </div>
            </div>
        </div>

        <!-- Kepesertaan Page -->
        <div id="kepesertaan" class="page-content">
            <div class="main-content">
                <div class="page-header" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                    <h1>Kepesertaan</h1>
                    <p>Informasi Program & Layanan Peserta</p>
                </div>

                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon"
                                style="background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 class="info-card-title">Hak Peserta</h3>
                        </div>
                        <div class="info-card-content">
                            <ul style="list-style: none; padding: 0;">
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #16a34a;"></i>
                                    Menerima manfaat pensiun sesuai ketentuan
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #16a34a;"></i>
                                    Mendapat informasi perkembangan dana
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #16a34a;"></i>
                                    Menyampaikan saran dan pendapat
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #16a34a;"></i>
                                    Mengajukan klaim manfaat pensiun
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #16a34a;"></i>
                                    Akses layanan pengaduan peserta
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <h3 class="info-card-title">Kewajiban Peserta</h3>
                        </div>
                        <div class="info-card-content">
                            <ul style="list-style: none; padding: 0;">
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #dc2626;"></i>
                                    Membayar iuran tepat waktu
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #dc2626;"></i>
                                    Melaporkan perubahan data pribadi
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #dc2626;"></i>
                                    Mengikuti peraturan dana pensiun
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #dc2626;"></i>
                                    Menjaga kerahasiaan data akun
                                </li>
                                <li style="padding: 0.5rem 0; padding-left: 1.5rem; position: relative;">
                                    <i class="fas fa-check" style="position: absolute; left: 0; color: #dc2626;"></i>
                                    Melakukan verifikasi data berkala
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-card-header">
                            <div class="info-card-icon"
                                style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <h3 class="info-card-title">Program Iuran</h3>
                        </div>
                        <div class="info-card-content">
                            Iuran dana pensiun dibayarkan setiap bulan sesuai dengan persentase yang telah ditetapkan
                            dalam
                            peraturan dana pensiun. Iuran terdiri dari iuran peserta dan iuran pemberi kerja.
                        </div>
                        <a href="#" class="info-card-link">
                            Detail Iuran
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="content-card">
                    <h2>Program Manfaat Pensiun</h2>
                    <p>Dana Pensiun Bank Riau Kepri menyelenggarakan Program Pensiun Manfaat Pasti (PPMP) yang
                        memberikan
                        manfaat pensiun berdasarkan formula yang telah ditetapkan.</p>

                    <h3>Jenis Manfaat</h3>
                    <ul>
                        <li>Manfaat Pensiun Normal - Diberikan kepada peserta yang mencapai usia pensiun normal</li>
                        <li>Manfaat Pensiun Dipercepat - Diberikan kepada peserta yang pensiun sebelum usia pensiun
                            normal
                        </li>
                        <li>Manfaat Pensiun Cacat - Diberikan kepada peserta yang mengalami cacat total dan tetap</li>
                        <li>Manfaat Pensiun Janda/Duda - Diberikan kepada janda/duda peserta yang meninggal dunia</li>
                        <li>Manfaat Pensiun Anak - Diberikan kepada anak peserta yang memenuhi syarat</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Peraturan Page -->
        <div id="peraturan" class="page-content">
            <div class="main-content">
                <div class="page-header" style="background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                    <h1>Peraturan Dana Pensiun</h1>
                    <p>Dasar Hukum & Peraturan</p>
                </div>

                <div class="content-card">
                    <h2>Peraturan Dana Pensiun</h2>
                    <p>Peraturan Dana Pensiun Bank Riau Kepri telah disahkan dan disetujui oleh Otoritas Jasa Keuangan
                        sebagai dasar penyelenggaraan program pensiun.</p>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Dokumen</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Peraturan Dana Pensiun (Perubahan Ke-5)</td>
                                <td>2024</td>
                                <td><span style="color: #16a34a; font-weight: 700;">Berlaku</span></td>
                                <td><a href="#" class="download-btn"><i class="fas fa-download"></i> Unduh</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pedoman Investasi</td>
                                <td>2024</td>
                                <td><span style="color: #16a34a; font-weight: 700;">Berlaku</span></td>
                                <td><a href="#" class="download-btn"><i class="fas fa-download"></i> Unduh</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Standard Operating Procedure (SOP)</td>
                                <td>2024</td>
                                <td><span style="color: #16a34a; font-weight: 700;">Berlaku</span></td>
                                <td><a href="#" class="download-btn"><i class="fas fa-download"></i> Unduh</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="content-card">
                    <h2>Dasar Hukum</h2>
                    <ul>
                        <li>Undang-Undang Nomor 11 Tahun 1992 tentang Dana Pensiun</li>
                        <li>Peraturan Pemerintah Nomor 76 Tahun 1992 tentang Dana Pensiun Pemberi Kerja</li>
                        <li>Peraturan Menteri Keuangan terkait Dana Pensiun</li>
                        <li>Peraturan Otoritas Jasa Keuangan tentang Dana Pensiun</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Laporan Page -->
        <div id="Galeri" class="page-content">

            <div class="page-header-video-container">

                <video autoplay muted loop id="galeriVideo" class="background-video-small">
                    <source src="{{ asset('image/Profile Company Bank Riau Kepri 2020.mp4') }}" type="video/mp4">
                    <source src="{{ asset('video/hero_video.webm') }}" type="video/webm">
                    Browser Anda tidak mendukung tag video.
                </video>

                <div class="header-content-small">
                    <h1>Album Kegiatan</h1>
                    <p>Koleksi Foto Sosialisasi & Pertemuan Peserta</p>
                </div>

                <div class="video-overlay-small"></div>
            </div>

            <div class="main-content">

                <div class="gallery-album">
                    <h2 class="album-title">Sosialisasi bersama Pensiunan di Tanjung Pinang</h2>
                    <p class="album-description">Kegiatan sosialisasi yang diikuti para pensiunan untuk memberikan
                        pemahaman terkait hak pensiun.</p>

                    <div class="album-grid">
                        <div class="album-photo">
                            <img src="{{ asset('image/penghargaan.jpeg') }}" alt="Foto 1 Sosialisasi Pensiunan">
                        </div>
                        <div class="album-photo">
                            <img src="{{ asset('image/pensiunan_detail1.jpg') }}" alt="Foto 2 Sosialisasi Pensiunan">
                        </div>
                        <div class="album-photo">
                            <img src="{{ asset('image/pensiunan_detail2.jpg') }}" alt="Foto 3 Sosialisasi Pensiunan">
                        </div>
                        <div class="album-photo">
                            <img src="{{ asset('image/pensiunan_detail3.jpg') }}" alt="Foto 4 Sosialisasi Pensiunan">
                        </div>
                    </div>
                </div>

                <div class="gallery-album">
                    <h2 class="album-title">Sosialisasi bersama Pegawai Bank Riau Kepri di Tanjung Pinang</h2>
                    <p class="album-description">Pemaparan program manfaat pensiun kepada pegawai Bank Riau Kepri
                        cabang
                        Tanjung Pinang.</p>

                    <div class="album-grid">
                        <div class="album-photo">
                            <img src="{{ asset('image/galeri2.jpg') }}" alt="Foto 1 Sosialisasi BRKS">
                        </div>
                        <div class="album-photo">
                            <img src="{{ asset('image/brks_detail1.jpg') }}" alt="Foto 2 Sosialisasi BRKS">
                        </div>
                        <div class="album-photo">
                            <img src="{{ asset('image/brks_detail2.jpg') }}" alt="Foto 3 Sosialisasi BRKS">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <style>
            /* ----------------------------------- */
            /* 1. Global & Utility Styles */
            /* ----------------------------------- */

            .page-content {
                padding: 0;
                background-color: #f4f7f6;
            }

            .main-content {
                max-width: 2000px;
                margin: 0 auto;
            }

            /* ----------------------------------- */
            /* 2. Page Header Video (Untuk Halaman Sub) */
            /* ----------------------------------- */

            .page-header-video-container {
                position: relative;
                width: 100%;
                /* Tinggi yang lebih kecil dari Hero utama */
                height: 500px;
                overflow: hidden;
                margin-bottom: 40px;
                text-align: center;
            }

            .background-video-small {
                position: absolute;
                top: 50%;
                left: 50%;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                z-index: 0;
                transform: translate(-50%, -50%);
                object-fit: cover;
            }

            .video-overlay-small {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                /* Overlay yang lebih gelap untuk kontras teks yang lebih baik */
                background: rgba(0, 0, 0, 0.65);
                z-index: 1;
            }

            .header-content-small {
                position: relative;
                z-index: 2;
                color: white;
                padding-top: 80px;
                /* Pusatkan secara vertikal */
            }

            .header-content-small h1 {
                font-size: 44px;
                font-weight: 800;
                margin-bottom: 12px;
                text-transform: uppercase;
                letter-spacing: 2px;
                text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            }

            .header-content-small p {
                font-size: 18px;
                font-weight: 400;
                opacity: 0.9;
                text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
            }

            /* ----------------------------------- */
            /* 3. Gallery Album Container */
            /* ----------------------------------- */

            .gallery-album {
                background: #ffffff;
                margin: 40px auto;
                padding: 30px;
                border-radius: 18px;
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
                max-width: 1160px;
                border: 1px solid #e0e0e0;
            }

            .album-title {
                font-size: 28px;
                font-weight: 700;
                color: #0d47a1;
                margin-bottom: 5px;
                border-bottom: 2px solid #e0e0e0;
                padding-bottom: 10px;
            }

            .album-description {
                font-size: 16px;
                color: #666;
                margin-bottom: 30px;
                font-style: italic;
            }

            /* ----------------------------------- */
            /* 4. Photo Grid & Items */
            /* ----------------------------------- */

            .album-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 15px;
            }

            .album-photo {
                overflow: hidden;
                border-radius: 12px;
                position: relative;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .album-photo:hover {
                transform: scale(1.02);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
                z-index: 10;
            }

            .album-photo img {
                width: 100%;
                height: 200px;
                object-fit: cover;
                display: block;
                transition: filter 0.3s ease, transform 0.3s ease;
            }

            .album-photo:hover img {
                filter: brightness(1.1);
                transform: scale(1.05);
            }

            /* ----------------------------------- */
            /* 5. Responsiveness */
            /* ----------------------------------- */

            @media (max-width: 768px) {
                .page-header-video-container {
                    height: 200px;
                }

                .header-content-small {
                    padding-top: 60px;
                }

                .header-content-small h1 {
                    font-size: 32px;
                }

                .album-grid {
                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                }

                .album-photo img {
                    height: 150px;
                }

                .gallery-album {
                    margin: 20px 10px;
                    padding: 20px;
                    border-radius: 12px;
                }
            }
        </style>
        <!-- Berita Page -->
        <div id="berita" class="page-content">
            <div class="main-content">
                <div class="page-header" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                    <h1>Berita & Informasi</h1>
                    <p>Update Terkini Seputar Dana Pensiun</p>
                </div>

                <div class="news-tabs">
                    <button class="news-tab active">Semua Berita</button>
                    <button class="news-tab">Pengumuman</button>
                    <button class="news-tab">Kegiatan</button>
                    <button class="news-tab">Penghargaan</button>
                </div>

                <div class="news-grid">
                    <div class="news-card">
                        <div class="news-image1">
                            <img src="{{ asset('image/penghargaan.jpg') }}" alt="Foto berita">
                            <div class="news-date-badge">15 Nov 2025</div>
                        </div>
                        <div class="news-content">
                            <div class="news-category">PENGHARGAAN</div>
                            <h3 class="news-title">Apresiasi OJK untuk Kinerja Dana Pensiun 2024</h3>
                            <p class="news-excerpt">Dana Pensiun Bank Riau Kepri menerima apresiasi dari Otoritas Jasa
                                Keuangan atas kinerja pengelolaan dana yang optimal dan tata kelola yang baik sepanjang
                                tahun 2024.</p>
                            <a href="#" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-card">
                        <div class="news-image2">
                            <div class="news-date-badge">10 Nov 2025</div>
                        </div>
                        <div class="news-content">
                            <div class="news-category">KEGIATAN</div>
                            <h3 class="news-title">Sosialisasi Program Pensiun Baru untuk Peserta</h3>
                            <p class="news-excerpt">Kegiatan sosialisasi program pensiun yang dihadiri oleh seluruh
                                peserta
                                dan calon peserta dana pensiun untuk memberikan pemahaman mengenai hak dan kewajiban
                                peserta.</p>
                            <a href="#" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-card">
                        <div class="news-image3">
                            <div class="news-date-badge">5 Nov 2025</div>
                        </div>
                        <div class="news-content">
                            <div class="news-category">LAPORAN</div>
                            <h3 class="news-title">Publikasi Laporan Keuangan Q3 2025</h3>
                            <p class="news-excerpt">Laporan keuangan triwulan ketiga tahun 2025 telah dipublikasikan
                                dan
                                dapat diunduh oleh seluruh peserta melalui website resmi Dana Pensiun Bank Riau Kepri.
                            </p>
                            <a href="#" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-card">
                        <div class="news-image">
                            <div class="news-date-badge">1 Nov 2025</div>
                        </div>
                        <div class="news-content">
                            <div class="news-category">PENGUMUMAN</div>
                            <h3 class="news-title">Perubahan Jam Operasional Layanan</h3>
                            <p class="news-excerpt">Mulai 1 November 2025, jam operasional layanan Dana Pensiun Bank
                                Riau
                                Kepri berubah menjadi Senin-Jumat pukul 08:00-16:00 WIB untuk melayani peserta dengan
                                lebih
                                baik.</p>
                            <a href="#" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const tabs = document.querySelectorAll(".news-tab");
            const cards = document.querySelectorAll(".news-card");

            tabs.forEach(tab => {
                tab.addEventListener("click", () => {

                    // Hapus active
                    tabs.forEach(t => t.classList.remove("active"));
                    tab.classList.add("active");

                    // Nama tab terpilih
                    const selected = tab.textContent.trim().toLowerCase();

                    // Filter kartu
                    cards.forEach(card => {
                        card.classList.remove("hidden");

                        if (selected !== "semua berita") {
                            if (!card.classList.contains("tab-" + selected)) {
                                card.classList.add("hidden");
                            }
                        }
                    });
                });
            });
        </script>

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

            // Calculator function
            function calculatePension() {
                const currentAge = parseInt(document.getElementById('currentAge').value);
                const retirementAge = parseInt(document.getElementById('retirementAge').value);
                const salary = parseInt(document.getElementById('salary').value);
                const contribution = parseFloat(document.getElementById('contribution').value) / 100;
                const returnRate = parseFloat(document.getElementById('returnRate').value) / 100;

                const years = retirementAge - currentAge;
                const monthlyContribution = salary * contribution;
                const months = years * 12;

                let futureValue = 0;
                for (let i = 0; i < months; i++) {
                    futureValue = (futureValue + monthlyContribution) * (1 + returnRate / 12);
                }

                document.getElementById('resultBox').style.display = 'block';
                document.getElementById('resultValue').textContent =
                    'Rp ' + Math.round(futureValue).toLocaleString('id-ID');
            }
        </script>
    </body>

</html>
