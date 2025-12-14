<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Pengaduan - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        /* --- COPY STYLE DARI TEMPLATE SEBELUMNYA --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            color: #333;
        }

        /* Layout Dasar */
        .page-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Hero Section Khusus Halaman Ini */
        .hero-section {
            background: linear-gradient(135deg, #1b5e20 0%, #43a047 100%);
            /* Green Theme */
            padding: 60px 20px;
            border-radius: 20px;
            margin-bottom: 40px;
            text-align: center;
            color: white;
            box-shadow: 0 10px 30px rgba(27, 94, 32, 0.2);
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Grid Layout */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Card Styling Professional */
        .info-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid #e8e8e8;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            border-color: #43a047;
        }

        /* Garis Aksen di atas kartu (Sesuai referensi) */
        .info-card::before {
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

        .info-card:hover::before {
            transform: scaleX(1);
        }

        .card-header {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #e4c61d 0%, #ceb630 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: white;
            font-size: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #2d3748;
            margin-top: 5px;
        }

        /* List Styling inside Card */
        .detail-list {
            list-style: none;
        }

        .detail-list li {
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            color: #555;
            line-height: 1.6;
        }

        .detail-list li::before {
            content: '\f058';
            /* FontAwesome Check */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #43a047;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .contact-item i {
            color: #d46727;
            width: 20px;
            text-align: center;
        }

        .contact-item strong {
            color: #333;
            font-weight: 600;
            margin-right: 5px;
        }

        /* Timeline Process Section */
        .process-section {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: #2d3748;
            font-size: 2rem;
            font-weight: 700;
        }

        .timeline-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
        }

        /* Garis penghubung timeline (desktop) */
        .timeline-container::after {
            content: '';
            position: absolute;
            top: 40px;
            left: 50px;
            right: 50px;
            height: 4px;
            background: #e0e0e0;
            z-index: -1;
        }

        .timeline-step {
            flex: 1;
            min-width: 250px;
            text-align: center;
            background: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
            z-index: 1;
        }

        .step-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: white;
            border: 4px solid #43a047;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #43a047;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .step-title {
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
            display: block;
        }

        .step-desc {
            font-size: 0.9rem;
            color: #666;
        }

        .step-badge {
            background: #dc3545;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
            margin-bottom: 10px;
            display: inline-block;
        }

        /* Legal Reference Box */
        .legal-box {
            background: #e8f5e9;
            border-left: 5px solid #43a047;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 40px;
            font-size: 0.9rem;
            color: #2e7d32;
        }

        .legal-box h4 {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Feedback Section */
        .feedback-section {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            border-radius: 16px;
            padding: 40px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .feedback-content {
            flex: 2;
            min-width: 300px;
        }

        .feedback-action {
            flex: 1;
            min-width: 250px;
            text-align: right;
        }

        .download-btn {
            display: inline-block;
            padding: 15px 30px;
            background: #e4c61d;
            color: #333;
            font-weight: 700;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .download-btn:hover {
            background: #d4b51c;
            transform: translateY(-2px);
        }

        /* Responsive Fixes */
        @media (max-width: 768px) {
            .timeline-container {
                flex-direction: column;
            }

            .timeline-container::after {
                width: 4px;
                height: 100%;
                left: 50%;
                top: 0;
                transform: translateX(-50%);
            }

            .feedback-action {
                text-align: left;
            }

            .hero-section h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
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
                <a href="{{ url('/profile') }}" class="nav-link ">Profil</a>
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
            <div class="header-actions">>
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
            <div class="slide active" style="background-image: url('{{ asset('image/profile_ppid.jpg') }}');">
                <div class="slide-content">
                    <h1>Mekanisme Layanan<br> Pengaduan</h1>
                    <p> Setiap Peserta berhak mendapatkan layanan terbaik. Kami menerima pengaduan terkait
                        kerugian dan/atau potensi kerugian finansial yang diduga disebabkan oleh kesalahan
                        atau kelalaian pihak Dana Pensiun Bank Riau Kepri..</p>
                </div>
            </div>
            {{-- <div class="slider-dots">
                <span class="dot active" onclick="changeSlide(0)"></span>
                <span class="dot" onclick="changeSlide(1)"></span>
                <span class="dot" onclick="changeSlide(2)"></span>
            </div> --}}
        </div>
        {{-- <div class="page-container"> --}}

        {{-- <div class="hero-section">
                <div class="hero-content">
                    <h1>Mekanisme Layanan Pengaduan</h1>
                    <p>
                        Setiap Peserta berhak mendapatkan layanan terbaik. Kami menerima pengaduan terkait
                        kerugian dan/atau potensi kerugian finansial yang diduga disebabkan oleh kesalahan
                        atau kelalaian pihak Dana Pensiun Bank Riau Kepri.
                    </p>
                </div>
            </div> --}}
        <section class="quick-links">
            <div class="container">
                <div class="legal-box">
                    <h4><i class="fas fa-book-open"></i> Dasar Hukum & Referensi</h4>
                    <p>
                        Layanan ini mengacu pada: POJK No. 1/POJK.07/2013 (Perlindungan Konsumen),
                        POJK No. 18/POJK.07/2018 (Layanan Pengaduan), dan SEOJK No. 2/SEOJK.07/2014.
                    </p>
                </div>

                <div class="section-title">Saluran Pengaduan</div>
                <div class="info-grid">

                    <div class="info-card">
                        <div class="card-header">
                            <div class="card-icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="card-title">Pengaduan Lisan</div>
                        </div>
                        <div class="card-body">
                            <p style="margin-bottom:15px; color:#666;">Dapat disampaikan melalui telepon pada
                                hari
                                dan jam
                                kerja.</p>
                            <div class="contact-item">
                                <i class="fas fa-headset"></i>
                                <span><strong>Telepon:</strong> 0761-5781181</span>
                            </div>
                            <p style="font-size:0.9rem; margin-top:15px;"><strong>Siapkan Data Diri:</strong>
                            </p>
                            <ul class="detail-list" style="font-size:0.9rem;">
                                <li>Nama Lengkap</li>
                                <li>Alamat & No. Telepon</li>
                                <li>Deskripsi singkat pengaduan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="card-header">
                            <div class="card-icon"><i class="fas fa-envelope-open-text"></i></div>
                            <div class="card-title">Pengaduan Tertulis</div>
                        </div>
                        <div class="card-body">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>dapenbankriau@gmail.com</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-fax"></i>
                                <span>Fax: 0761-32720</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-globe"></i>
                                <span>www.dapenbankbrk.co.id</span>
                            </div>
                            <div
                                style="background: #fff3cd; padding:10px; border-radius:8px; font-size:0.85rem; margin-top:15px; color:#856404; border:1px solid #ffeeba;">
                                <i class="fas fa-exclamation-circle"></i> Untuk pengaduan transaksi keuangan,
                                wajib
                                mengisi
                                Formulir dan melampirkan Fotocopy Identitas.
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="card-header">
                            <div class="card-icon"><i class="fas fa-user-tie"></i></div>
                            <div class="card-title">Layanan Tatap Muka</div>
                        </div>
                        <div class="card-body">
                            <p style="margin-bottom:15px; color:#666;">Datang langsung ke Kantor Dana Pensiun
                                Bank
                                Riau
                                Kepri.
                                Pengaduan dapat diwakilkan dengan syarat:</p>
                            <ul class="detail-list">
                                <li>Hanya untuk tatap muka (bukan telepon).</li>
                                <li>Membawa Fotocopy identitas perwakilan.</li>
                                <li>Surat Kuasa dari Peserta kepada perwakilan.</li>
                                <li>Dokumen kewenangan (jika mewakili lembaga/Badan Hukum).</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="process-section">
                    <h2 class="section-title">Alur Penyelesaian Pengaduan</h2>
                    <div class="timeline-container">

                        <div class="timeline-step">
                            <span class="step-badge">Tahap 1</span>
                            <div class="step-icon"><i class="fas fa-inbox"></i></div>
                            <span class="step-title">Penerimaan & Tindak Lanjut</span>
                            <p class="step-desc">Kami akan menindaklanjuti pengaduan dalam jangka waktu
                                <strong>3
                                    (tiga)
                                    hari
                                    kerja</strong> sejak diterima.
                            </p>
                        </div>

                        <div class="timeline-step">
                            <span class="step-badge">Tahap 2</span>
                            <div class="step-icon"><i class="fas fa-file-contract"></i></div>
                            <span class="step-title">Kelengkapan Dokumen</span>
                            <p class="step-desc">Jika sengketa memerlukan waktu > 2 hari, Peserta diminta
                                menyampaikan
                                pengaduan
                                secara <strong>tertulis</strong>.</p>
                        </div>

                        <div class="timeline-step">
                            <span class="step-badge">Tahap 3</span>
                            <div class="step-icon"><i class="fas fa-check-double"></i></div>
                            <span class="step-title">Penyelesaian</span>
                            <p class="step-desc">Diselesaikan maksimal <strong>20 hari kerja</strong> sejak
                                dokumen
                                lengkap
                                diterima.</p>
                        </div>

                        <div class="timeline-step">
                            <span class="step-badge">Opsional</span>
                            <div class="step-icon"><i class="fas fa-clock"></i></div>
                            <span class="step-title">Perpanjangan</span>
                            <p class="step-desc">Dapat diperpanjang maks <strong>20 hari kerja</strong> dengan
                                pemberitahuan
                                tertulis sebelum batas waktu berakhir.</p>
                        </div>

                    </div>
                </div>

                <div class="feedback-section">
                    <div class="feedback-content">
                        <h3 style="font-size:1.8rem; margin-bottom:10px;"><i class="fas fa-comment-dots"></i>
                            Saran &
                            Pendapat
                        </h3>
                        <p style="margin-bottom:15px; opacity:0.9;">
                            Yth. Para Pensiunan, pendapat Anda sangat berarti bagi kami. Silakan sampaikan saran
                            Anda ke:
                        </p>
                        <div style="font-size:0.95rem; line-height:1.6;">
                            <strong>Departemen Kepesertaan</strong><br>
                            Jl. Arifin Ahmad No. 54-56 Pekanbaru<br>
                            Telp: (0761) 5781181 | Fax: (0761) 32720<br>
                        </div>
                    </div>
                    <div class="feedback-action">
                        <p style="margin-bottom:15px; font-size:0.9rem;">Unduh formulir saran di sini:</p>
                        <a href="pdf/F-K04-00 Saran dan Pendapat.pdf" class="download-btn">
                            <i class="fas fa-download"></i> Download Formulir
                        </a>
                    </div>
                </div>

            </div>

            <script>
                // Animasi Scroll atau JS lainnya bisa ditambahkan di sini
            </script>
</body>

</html>
