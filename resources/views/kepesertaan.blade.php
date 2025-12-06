<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepesertaan - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        /* Hero Section */
        .hero-section {
            background-color: #2a5298;
            background-image: url('image/profile_ppid.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 50vh;
            color: rgb(255, 252, 252);
            padding: 80px 20px 60px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }


        .hero-section h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero-section p {
            font-size: 20px;
            opacity: 0.95;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Stats Section */
        .stats-section {
            background: white;
            margin: -40px auto 40px;
            max-width: 1160px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
            z-index: 2;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .stats-header h2 {
            font-size: 32px;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .stats-date {
            color: #666;
            font-size: 16px;
            font-style: italic;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            /* Disesuaikan untuk 6 kartu + 1 total */
            gap: 20px;
            margin-top: 30px;
        }

        /* Modifikasi stats-grid untuk menampung total di luar grid utama data */
        .data-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
        }


        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .stat-card.active-stat {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Section */
        .section {
            background: white;
            margin: 40px auto;
            max-width: 1160px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            padding: 50px 40px;
        }

        .section-title {
            font-size: 28px;
            color: #1e3c72;
            margin-bottom: 10px;
            padding-bottom: 15px;
            border-bottom: 3px solid #fbbf24;
            display: inline-block;
        }

        .section-subtitle {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
        }

        /* Tabs */
        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
            border-bottom: 2px solid #e5e7eb;
        }

        .tab-btn {
            padding: 12px 24px;
            background: transparent;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            color: #666;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
            margin-bottom: -2px;
        }

        .tab-btn:hover {
            color: #1e3c72;
        }

        .tab-btn.active {
            color: #1e3c72;
            border-bottom-color: #fbbf24;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
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

        /* Info Box */
        .info-box {
            background: #f8f9fa;
            border-left: 4px solid #fbbf24;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .info-box h3 {
            color: #1e3c72;
            margin-bottom: 10px;
            font-size: 20px;
        }

        /* List Styles */
        .custom-list {
            list-style: none;
            padding: 0;
        }

        .custom-list li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            border-bottom: 1px solid #e5e7eb;
        }

        .custom-list li:last-child {
            border-bottom: none;
        }

        .custom-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #10b981;
            font-size: 18px;
        }

        /* Table */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .data-table th,
        .data-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        .data-table th {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            font-weight: 600;
        }

        .data-table tr:hover {
            background: #f8f9fa;
        }

        /* Formula Box */
        .formula-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin: 20px 0;
            text-align: center;
        }

        .formula-box h4 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .formula {
            font-size: 24px;
            font-weight: 700;
            font-family: 'Courier New', monospace;
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin: 10px 0;
        }

        /* Card Grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 30px 0;
        }

        .info-card {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease;
        }

        .info-card:hover {
            border-color: #fbbf24;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .info-card h3 {
            color: #1e3c72;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .info-card ul {
            list-style: none;
            padding: 0;
        }

        .info-card li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
        }

        .info-card li::before {
            content: '\f105';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #fbbf24;
        }

        /* Contact Box */
        .contact-box {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin: 30px 0;
        }

        .contact-box h3 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .contact-info {
            display: grid;
            gap: 15px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .contact-item i {
            font-size: 20px;
            color: #fbbf24;
            width: 30px;
        }

        /* Button */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(251, 191, 36, 0.4);
        }

        .btn i {
            margin-left: 8px;
        }

        /* Process Steps */
        .process-steps {
            display: grid;
            gap: 20px;
            margin: 30px 0;
        }

        .process-step {
            display: flex;
            gap: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
            align-items: center;
        }

        .process-step:nth-child(even) {
            background: #e9ecef;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .step-content h4 {
            color: #1e3c72;
            margin-bottom: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 32px;
            }

            .hero-section p {
                font-size: 16px;
            }

            .section {
                padding: 30px 20px;
            }

            .stats-section {
                padding: 25px 20px;
            }

            .tabs {
                overflow-x: auto;
            }

            .tab-btn {
                white-space: nowrap;
            }

            .card-grid {
                grid-template-columns: 1fr;
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
                <a href="{{ url('/dashboard') }}" class="nav-link">Beranda</a>
                <a href="{{ url('/profile') }}" class="nav-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="nav-link active">kepesertaan</a>
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

    <div class="hero-section">
        <div class="hero-content">
            <h1>Kepesertaan</h1>
            <p>Informasi Lengkap Program & Layanan Peserta Dana Pensiun Bank Riau Kepri</p>
        </div>
    </div>

    <div class="stats-section">
        <div class="stats-header">
            <h2>Jumlah Peserta</h2>
            {{-- <p class="stats-date">Per: 31 Oktober 2025</p> --}}
        </div>
        <div class="data-stats-grid">
            <div class="stat-card active-stat">
                <div class="stat-number">695</div>
                <div class="stat-label">Peserta Aktif</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">71</div>
                <div class="stat-label">Pensiun Ditunda</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">157</div>
                <div class="stat-label">Pensiun Normal</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">123</div>
                <div class="stat-label">Pensiun Dipercepat</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">73</div>
                <div class="stat-label">Pensiun Janda/Duda</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">9</div>
                <div class="stat-label">Pensiun Anak</div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 2px solid #e5e7eb;">
            <h3 style="color: #1e3c72; font-size: 28px;">Total Peserta: <span style="color: #fbbf24;">1,128</span> Orang
            </h3>
        </div>
    </div>

    <div class="section">
        <h2 class="section-title">Informasi Kepesertaan</h2>
        <p class="section-subtitle">Panduan lengkap hak, kewajiban, dan program manfaat pensiun</p>

        <div class="tabs">
            <button class="tab-btn active" onclick="openTab(event, 'hak-kewajiban')">Hak & Kewajiban</button>
            <button class="tab-btn" onclick="openTab(event, 'program')">Program Pensiun</button>
            <button class="tab-btn" onclick="openTab(event, 'iuran')">Iuran Pensiun</button>
            <button class="tab-btn" onclick="openTab(event, 'syarat')">Syarat Klaim</button>
            <button class="tab-btn" onclick="openTab(event, 'pengkinian')">Pengaduan & Kontak</button>
        </div>

        <div id="hak-kewajiban" class="tab-content active">
            <div class="card-grid">
                <div class="info-card">
                    <h3><i class="fas fa-check-circle" style="color: #10b981;"></i> Hak Peserta</h3>
                    <ul>
                        <li>Menyampaikan pendapat dan saran mengenai perkembangan portofolio investasi</li>
                        <li>Menerima **Manfaat Pensiun Normal** setelah mencapai usia pensiun</li>
                        <li>Memperoleh **Manfaat Pensiun Dipercepat** sesuai ketentuan</li>
                        <li>Mendapatkan **Manfaat Pensiun Cacat** bila mengalami cacat</li>
                        <li>Hak atas **Pensiun Ditunda** dengan masa kepesertaan minimal 3 tahun</li>
                        <li>Pengembalian **iuran peserta + bunga** untuk masa kepesertaan < 3 tahun</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3><i class="fas fa-exclamation-circle" style="color: #ef4444;"></i> Kewajiban Peserta</h3>
                    <ul>
                        <li>Membayar **Iuran Peserta** tepat waktu setiap bulan</li>
                        <li>Memberikan data kepesertaan yang lengkap dan akurat</li>
                        <li>Mendaftarkan Istri/Suami dan Anak yang sah</li>
                        <li>Melaporkan setiap **perubahan susunan keluarga**</li>
                        <li>Mentaati Peraturan Dana Pensiun yang berlaku</li>
                        <li>Bertanggung jawab atas **kebenaran data** yang diberikan</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="program" class="tab-content">
            <div class="info-box">
                <h3>Jenis Program</h3>
                <p>Jenis Dana Pensiun adalah **Dana Pensiun Pemberi Kerja (DPPK)** dengan Program: **Program Pensiun
                    Manfaat Pasti (PPMP)**</p>
            </div>

            <h3 style="color: #1e3c72; margin: 30px 0 20px;">Jenis Manfaat Pensiun</h3>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Jenis Manfaat</th>
                        <th>Deskripsi</th>
                        <th>Usia Minimum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**Pensiun Normal** (MPN)</td>
                        <td>Manfaat bagi peserta yang pensiun pada usia normal</td>
                        <td>56 tahun</td>
                    </tr>
                    <tr>
                        <td>**Pensiun Dipercepat** (MPD)</td>
                        <td>Manfaat bagi peserta yang pensiun sebelum usia normal</td>
                        <td>46 tahun</td>
                    </tr>
                    <tr>
                        <td>**Pensiun Ditunda** (PD)</td>
                        <td>Hak yang ditunda pembayarannya hingga usia pensiun dipercepat</td>
                        <td>Min. 46 tahun</td>
                    </tr>
                    <tr>
                        <td>**Pensiun Cacat** (MPC)</td>
                        <td>Manfaat bagi peserta yang mengalami cacat total dan tetap</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>**Pensiun Janda/Duda**</td>
                        <td>Manfaat setelah peserta/pensiunan meninggal dunia</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>**Pensiun Anak**</td>
                        <td>Manfaat setelah janda/duda kawin lagi atau meninggal</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>

            <h3 style="color: #1e3c72; margin: 30px 0 20px;">Rumus Perhitungan Manfaat Pensiun</h3>

            <div class="formula-box">
                <h4>Rumus Utama (MPN, MPD, MPC) Sebulan</h4>
                <div class="formula">
                    $$MP = \text{(Faktor Penghargaan)} \times \text{Masa Kerja} \times \text{PhDP}$$
                </div>
                <p style="margin-top: 10px; font-size: 14px; opacity: 0.9;">
                    *Catatan: Faktor Penghargaan tidak disebutkan namun diwakili 2,5% pada rumus selanjutnya.
                    PhDP = Penghasilan Dasar Pensiun.*
                </p>
            </div>

            <div class="formula-box" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
                <h4>Hak Pensiun Ditunda (PD)</h4>
                <div class="formula">
                    $$PD = \text{Nilai Sekarang} \times (\text{Faktor Penghargaan} \times \text{Masa Kerja} \times
                    \text{PhDP})$$
                </div>
            </div>
        </div>

        <div id="iuran" class="tab-content">
            <h3 style="color: #1e3c72; margin-bottom: 20px;">Struktur Iuran Pensiun</h3>

            <div class="card-grid">
                <div class="info-card">
                    <h3>Iuran Normal Peserta</h3>
                    <p style="margin: 15px 0;"><strong style="font-size: 32px; color: #fbbf24;">5%</strong> dari
                        **PhDP** per bulan</p>
                    <ul>
                        <li>Dipungut langsung oleh Pemberi Kerja setiap bulan</li>
                        <li>Berlaku sejak menjadi peserta hingga PHK/meninggal</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3>Iuran Normal Pemberi Kerja</h3>
                    <p style="margin: 15px 0;">Selisih antara total iuran yang diperlukan dengan iuran peserta</p>
                    <ul>
                        <li>Dihitung berdasarkan Laporan Aktuaris terakhir</li>
                        <li>Wajib disetorkan setiap bulan, selambatnya **tanggal 15** bulan berikutnya</li>
                    </ul>
                </div>
            </div>

            <div class="info-box" style="margin-top: 30px;">
                <h3>Iuran Tambahan (Past Service Liabilities - PSL)</h3>
                <p>Iuran yang disetor dalam rangka melunasi **Defisit**. Besarnya ditetapkan berdasarkan hasil **Valuasi
                    Aktuaria** terakhir.</p>
            </div>

            <div class="info-box" style="background: #fef3c7; border-left-color: #f59e0b;">
                <h3>Penghasilan Dasar Pensiun (PhDP)</h3>
                <p>PhDP adalah penghasilan yang digunakan sebagai dasar perhitungan besarnya iuran pensiun dan manfaat
                    pensiun.</p>
            </div>
        </div>

        <div id="syarat" class="tab-content">
            <h3 style="color: #1e3c72; margin-bottom: 20px;">Dokumen Syarat Pembayaran Manfaat Pensiun</h3>
            <p style="color: #666; margin-bottom: 25px;">Untuk Pensiun Normal, Dipercepat, dan Cacat</p>

            <ul class="custom-list">
                <li>Asli **Kartu Peserta** Dana Pensiun</li>
                <li>Fotokopi **Surat Keputusan Pemutusan Hubungan Kerja (SK PHK)** dari Pemberi Kerja</li>
                <li>Fotokopi **Surat Nikah/Akte Nikah**</li>
                <li>Fotokopi **Kartu Tanda Penduduk (KTP)** yang masih berlaku</li>
                <li>**Pas Foto Berwarna** Peserta</li>
                <li>Fotokopi **Kartu Keluarga (KK)**</li>
                <li>Fotokopi **Nomor Pokok Wajib Pajak (NPWP)**</li>
                <li>Fotokopi **Buku Rekening Bank/Tabungan** (untuk transfer manfaat pensiun)</li>
                <li>**Daftar Susunan Keluarga** sesuai yang terdaftar pada Dana Pensiun</li>
                <li>Nomor Telepon yang dapat dihubungi</li>
                <li>Dokumen lain yang ditentukan Dana Pensiun</li>
            </ul>

            <div style="text-align: center; margin: 30px 0;">
                <a href="#" class="btn">
                    <i class="fas fa-download"></i> Download Formulir Permohonan Pembayaran Manfaat Pensiun
                </a>
            </div>

            <h3 style="color: #1e3c72; margin: 40px 0 20px;">Ringkasan Tahapan Klaim Manfaat Pensiun</h3>

            <div class="process-steps" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Pengajuan Dokumen</h4>
                        <p>Lengkapi dan kirimkan semua dokumen persyaratan</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Verifikasi</h4>
                        <p>Pengecekan kelengkapan dan keabsahan data</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Pembayaran</h4>
                        <p>Manfaat Pensiun ditransfer ke rekening peserta</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pengkinian" class="tab-content">
            <h3 class="section-title" style="margin-bottom: 20px; border-bottom: 3px solid #1e3c72;"><i
                    class="fas fa-headset"></i> Layanan Pengaduan Peserta</h3>
            <p class="section-subtitle" style="margin-bottom: 20px;">Anda dapat melakukan pengaduan apabila terjadi
                kerugian finansial yang diduga karena kesalahan Dana Pensiun.</p>

            <div class="card-grid">
                <div class="info-card" style="border: 2px solid #10b981;">
                    <h3><i class="fas fa-phone-volume" style="color: #10b981;"></i> Pengaduan Lisan</h3>
                    <p style="margin: 15px 0;">Lakukan pengaduan lisan melalui telepon. Harus dilengkapi identitas dan
                        deskripsi singkat.</p>
                    <p><strong>Nomor Telepon: 0761-5781181</strong></p>
                    <p style="font-size: 0.9em; margin-top: 10px;">*Pengaduan tatap muka dapat diwakilkan dengan surat
                        kuasa.</p>
                </div>

                <div class="info-card" style="border: 2px solid #ef4444;">
                    <h3><i class="fas fa-envelope-open-text" style="color: #ef4444;"></i> Pengaduan Tertulis</h3>
                    <p style="margin: 15px 0;">Pengaduan tertulis harus mengisi Formulir/Blangko dan dilengkapi
                        fotokopi identitas.</p>
                    <p>Email: **dapenbankriau@gmail.com**</p>
                    <p>Fax: **(0761) 32720**</p>
                    <p>Website: **www.dapenbankbrk.co.id**</p>
                </div>
            </div>

            <div class="info-box" style="margin-top: 30px;">
                <h3><i class="fas fa-hourglass-half"></i> Waktu Penyelesaian Pengaduan</h3>
                <ul style="list-style-type: disc; padding-left: 20px;">
                    <li>Dana Pensiun akan menindaklanjuti pengaduan dalam jangka waktu **3 hari kerja** sejak diterima.
                    </li>
                    <li>Penanganan diselesaikan dalam jangka waktu paling lama **20 hari kerja** (dapat diperpanjang 20
                        hari kerja).</li>
                </ul>
            </div>

            <h3 class="section-title"
                style="margin-top: 40px; margin-bottom: 20px; border-bottom: 3px solid #fbbf24;"><i
                    class="fas fa-comments"></i> Saran & Pendapat</h3>
            <p>Untuk menyampaikan saran dan pendapat, silakan isi formulir yang tersedia dan kirimkan ke alamat Dana
                Pensiun.</p>

            <div style="text-align: center; margin: 30px 0;">
                <a href="#" class="btn">
                    <i class="fas fa-download"></i> Download Formulir Saran & Pendapat
                </a>
            </div>
        </div>

    </div>

    <div class="section" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <h2 class="section-title">Butuh Bantuan?</h2>
        <p class="section-subtitle">Tim kami siap membantu Anda</p>

        <div class="card-grid">
            <div class="info-card">
                <h3><i class="fas fa-phone-alt" style="color: #10b981;"></i> Hubungi Kami</h3>
                <p style="margin: 15px 0;">Telepon: **(0761) 5781181**</p>
                <p>Email: **dapenbankriau@gmail.com**</p>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-clock" style="color: #3b82f6;"></i> Jam Operasional</h3>
                <p style="margin: 15px 0;">Senin - Jumat</p>
                <p><strong>08:00 - 16:00 WIB</strong></p>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-map-marked-alt" style="color: #ef4444;"></i> Kunjungi Kantor</h3>
                <p style="margin: 15px 0;">Jl. Arifin Ahmad No. 54-56</p>
                <p>Pekanbaru, Riau 28116</p>
            </div>
        </div>
    </div>
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
        function openTab(evt, tabName) {
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
            }

            const tabBtns = document.getElementsByClassName('tab-btn');
            for (let i = 0; i < tabBtns.length; i++) {
                tabBtns[i].classList.remove('active');
            }

            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        // Set default tab to active on load
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelector('.tab-btn').click();
        });
    </script>
</body>

</html>
