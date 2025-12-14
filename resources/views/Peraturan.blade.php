<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peraturan & Dokumen - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Navigation */
        /* .main-nav {
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
        } */

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

        .header-actions {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .mobile-menu-btn {
            background: transparent;
            border: none;
            color: rgb(8, 8, 8);
            cursor: pointer;
            padding: 0.5rem;
            transition: all 0.3s ease;
            border-radius: 50%;
            display: none;
            width: 35px;
            height: 35px;
            position: relative;
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

        /* Hero Section */
        .hero-slider {
            position: relative;
            height: 650px;
            overflow: hidden;

        }

        .hero-slider::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(220, 38, 38, 0.4) 100%);
        }

        .slide-content {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            z-index: 1;
            animation: slideUp 1s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-content h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .slide-content p {
            font-size: 1.35rem;
            max-width: 650px;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
            line-height: 1.8;
        }

        table td,
        table th {
            color: #111 !important;
            /* hitam */
        }

        tbody tr:hover td {
            color: #111 !important;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Main Content */
        .main-content {
            padding: 0;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #dc2626;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(220, 38, 38, 0.2);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #dc2626;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 800;
            color: #dc2626;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 0.95rem;
            font-weight: 600;
        }

        /* Tabs Navigation */
        .tabs-navigation {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
            border-bottom: 3px solid #e5e7eb;
            flex-wrap: wrap;
            background: white;
            padding: 1rem;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .tab-btn {
            padding: 1rem 2rem;
            background: none;
            border: none;
            color: #666;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            position: relative;
            transition: all 0.3s;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
            bottom: -1rem;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #dc2626 0%, #fbbf24 100%);
            border-radius: 3px 3px 0 0;
        }

        /* Tab Content */
        .tab-content {
            display: none;
            animation: fadeInContent 0.5s ease-in;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeInContent {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Document Section */
        .document-section {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #dc2626;
        }

        .section-title {
            font-size: 1.8rem;
            color: #1a1a1a;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-title i {
            color: #dc2626;
            font-size: 1.5rem;
        }

        .section-description {
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        /* Table Styles */
        .data-table-wrapper {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .search-box {
            padding: 1.5rem;
            background: #f8f9fa;
            border-bottom: 2px solid #e5e7eb;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid #e5e7eb;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: #dc2626;
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 2.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 1.2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
        }

        th {
            padding: 1.2rem;
            text-align: left;
            font-weight: 700;
            font-size: 0.95rem;
        }

        td {
            padding: 1rem 1.2rem;
            border-bottom: 1px solid #f0f0f0;
        }

        tbody tr {
            transition: all 0.3s;
        }

        tbody tr:hover {
            background: #fef2f2;
        }

        .row-number {
            font-weight: 700;
            color: #dc2626;
        }

        /* Prosedur Grid */
        .prosedur-grid {
            display: grid;
            gap: 1rem;
        }

        .prosedur-item {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: all 0.3s;
            cursor: pointer;
        }

        .prosedur-item:hover {
            border-color: #dc2626;
            background: #fef2f2;
            transform: translateX(5px);
        }

        .prosedur-code {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.85rem;
            white-space: nowrap;
            min-width: 180px;
            text-align: center;
        }

        .prosedur-title {
            flex-grow: 1;
            font-weight: 600;
            color: #333;
        }

        .prosedur-icon {
            color: #dc2626;
            font-size: 1.3rem;
        }

        /* Footer */
        /* footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: white;
            padding: 4rem 0 2rem;
            position: relative;
            overflow: hidden;
            margin-top: 5rem;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #dc2626 0%, #fbbf24 100%);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            color: #fbbf24;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .footer-section p {
            color: #d1d5db;
            font-size: 0.95rem;
            line-height: 1.9;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.75rem;
        }

        .footer-section ul li a {
            color: #d1d5db;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 0.95rem;
            display: inline-block;
        }

        .footer-section ul li a:hover {
            color: #fbbf24;
            transform: translateX(5px);
        } */

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-links a:hover {
            background: linear-gradient(135deg, #dc2626 0%, #fbbf24 100%);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(220, 38, 38, 0.3);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            text-align: center;
            color: #9ca3af;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-nav {
                display: none;
            }

            .mobile-menu-btn {
                display: flex;
            }

            .hero-slider {
                height: 450px;
            }

            .slide-content h1 {
                font-size: 2.5rem;
            }

            .slide-content p {
                font-size: 1.1rem;
            }

            .tabs-navigation {
                flex-direction: column;
            }

            .search-icon {
                left: 1.5rem;
            }

            table {
                font-size: 0.9rem;
            }

            th,
            td {
                padding: 0.8rem;
            }

            .prosedur-code {
                min-width: 150px;
                font-size: 0.75rem;
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

            /* ===============================
   DOCUMENT INTRO SECTION
   =============================== */

            .document-intro {
                margin-bottom: 3rem;
            }

            .document-intro-box {
                background: white;
                border-radius: 18px;
                padding: 2.5rem 3rem;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                border-left: 6px solid #dc2626;
            }

            .document-intro-box h2 {
                font-size: 1.8rem;
                font-weight: 800;
                color: #111;
                margin-bottom: 1rem;
            }

            .document-intro-box p {
                font-size: 1rem;
                color: #555;
                line-height: 1.8;
                max-width: 900px;
            }

            .document-category {
                margin-top: 1.5rem;
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
            }

            .document-category span {
                background: #fef2f2;
                color: #dc2626;
                padding: 0.6rem 1.2rem;
                border-radius: 30px;
                font-size: 0.9rem;
                font-weight: 600;
                display: flex;
                align-items: center;
                gap: 0.5rem;
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
                <a href="{{ url('/Peraturan') }}" class="nav-link active">Peraturan</a>
                <a href="{{ url('/Warta') }}" class="nav-link">Warta</a>
            </nav>

            <!-- Mobile Nav -->
            <div class="mobile-nav" id="mobileNav">
                <a href="{{ url('/dashboard') }}" class="mobile-link">Beranda</a>
                <a href="{{ url('/profile') }}" class="mobile-link">Profil</a>
                <a href="{{ url('/kepesertaan') }}" class="mobile-link">Kepesertaan</a>
                <a href="{{ url('/Peraturan') }}" class="mobile-link active">Peraturan</a>
                <a href="{{ url('/Warta') }}" class="mobile-link">Warta</a>
            </div>

            <!-- Header Actions -->
            <div class="header-actions">
                {{-- 
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
                --}}
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
                <section class="document-intro">
                    <div class="document-intro-box">
                        <h2>Peraturan & Dokumen Dana Pensiun</h2>
                        <p>
                            Halaman ini memuat peraturan, pedoman, prosedur standar operasional, serta
                            daftar penerima manfaat pensiun Dana Pensiun Bank Riau Kepri.
                        </p>

                        <div class="document-category">
                            <span><i class="fas fa-file-pdf"></i> Peraturan Dana Pensiun</span>
                            <span><i class="fas fa-book"></i> Pedoman</span>
                            <span><i class="fas fa-clipboard-list"></i> PSO</span>
                            <span><i class="fas fa-users"></i> Penerima Manfaat</span>
                        </div>
                    </div>
                </section>


                <!-- Tabs Navigation -->
                <div class="tabs-navigation">
                    <button class="tab-btn active" onclick="showTab('normal')">
                        <i class="fas fa-user-check"></i> Pensiun Normal
                    </button>
                    <button class="tab-btn" onclick="showTab('dipercepat')">
                        <i class="fas fa-user-clock"></i> Pensiun Dipercepat
                    </button>
                    <button class="tab-btn" onclick="showTab('janda')">
                        <i class="fas fa-user-friends"></i> Janda/Duda
                    </button>
                    <button class="tab-btn" onclick="showTab('anak')">
                        <i class="fas fa-child"></i> Pensiun Anak
                    </button>
                    <button class="tab-btn" onclick="showTab('peraturan-pdf')">
                        <i class="fas fa-file-pdf"></i> Peraturan PDF
                    </button>
                    <button class="tab-btn" onclick="showTab('pedoman')">
                        <i class="fas fa-book"></i> Pedoman
                    </button>
                    <button class="tab-btn" onclick="showTab('pso')">
                        <i class="fas fa-clipboard-list"></i> PSO
                    </button>
                </div>

                <!-- Tab: Pensiun Normal -->
                <div id="normal" class="tab-content active">
                    <div class="document-section">
                        <h2 class="section-title">
                            <i class="fas fa-user-check"></i>
                            Daftar Penerima Manfaat Pensiun Normal
                        </h2>

                        <div class="data-table-wrapper">
                            <input type="text" class="search-input" placeholder="Cari nama..."
                                onkeyup="filterTable('tableNormal', this.value)">
                            <table id="tableNormal">
                                <thead>
                                    <tr>
                                        <th width="80">No</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normal as $i => $item)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- Tab: Pensiun Dipercepat -->
                <div id="dipercepat" class="tab-content">
                    <div class="document-section">
                        <h2 class="section-title">
                            <i class="fas fa-user-clock"></i>
                            Daftar Pensiun Dipercepat
                        </h2>

                        <table id="tableDipercepat">
                            <thead>
                                <tr>
                                    <th width="80">No</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dipercepat as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Tab: Janda/Duda -->
                <div id="janda" class="tab-content">
                    <div class="document-section">
                        <h2 class="section-title">
                            <i class="fas fa-user-friends"></i>
                            Daftar Janda / Duda
                        </h2>

                        <table id="tableJanda">
                            <thead>
                                <tr>
                                    <th width="80">No</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($janda as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Tab: Pensiun Anak -->
                <div id="anak" class="tab-content">
                    <div class="document-section">
                        <h2 class="section-title">
                            <i class="fas fa-child"></i>
                            Daftar Pensiun Anak
                        </h2>

                        <table id="tableAnak">
                            <thead>
                                <tr>
                                    <th width="80">No</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anak as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Tab: Pedoman -->
                <div id="pedoman" class="tab-content">
                    <div class="document-section">
                        <h2 class="section-title">
                            <i class="fas fa-book"></i>
                            Pedoman Dana Pensiun
                        </h2>

                        <table id="tablePedoman">
                            <thead>
                                <tr>
                                    <th width="80">No</th>
                                    <th width="250">Kode</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedomans as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tab: PSO -->
                <div id="pso" class="tab-content">
                    <div class="document-section">
                        <h2 class="section-title">
                            <i class="fas fa-clipboard-list"></i>
                            Prosedur Standar Operasional
                        </h2>

                        <table id="tablePSO">
                            <thead>
                                <tr>
                                    <th width="80">No</th>
                                    <th width="250">Kode</th>
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($psos as $i => $item)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $item->kode }}</td>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Tab: Peraturan Dana Pensiun PDF -->
                <div id="peraturan-pdf" class="tab-content">
                    {{-- <div class="document-section"> --}}
                    <h2 class="section-title">
                        <i class="fas fa-file-pdf"></i>
                        Peraturan Dana Pensiun
                    </h2>

                    <div class="pdf-cards-grid">
                        @forelse ($peraturans as $item)
                            <div class="pdf-card small-pdf"
                                onclick="openPDF('{{ asset('storage/' . $item->file_pdf) }}', '{{ $item->judul }}')">


                                <!-- PREVIEW PDF -->
                                <div class="pdf-preview">
                                    <iframe
                                        src="{{ asset('storage/' . $item->file_pdf) }}#page=1&view=FitH&toolbar=0&navpanes=0"
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
                                        PDF {{ $item->tahun }}
                                    </span>
                                </div>

                                <!-- KONTEN BAWAH -->
                                <div class="pdf-content">
                                    <h3 class="pdf-title">
                                        {{ $item->judul }}
                                    </h3>

                                    <p class="pdf-description">
                                        {{ $item->deskripsi }}
                                    </p>

                                    <div class="pdf-meta">
                                        <span class="pdf-date">
                                            <i class="far fa-calendar"></i>
                                            {{ $item->tahun }}
                                        </span>

                                        <span class="pdf-action">
                                            Lihat PDF <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        @empty
                            <p class="text-muted">Belum ada peraturan PDF.</p>
                        @endforelse
                    </div>
                </div>
    </div>
    <style>
        @media (min-width: 769px) {

            /* ===============================
       FIX UKURAN PDF PERATURAN
       =============================== */

            .pdf-card.small-pdf .pdf-preview {
                height: 210px !important;
            }

            .pdf-card.small-pdf iframe {
                transform: scale(1.05);
            }

            .pdf-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
                gap: 24px;
            }
        }

        /* =================================
   FIX UKURAN PDF PERATURAN (KECIL)
   ================================= */

        .pdf-card.small-pdf .pdf-preview {
            height: 210px !important;
            /* ✅ mirip contoh ADPI */
        }

        .pdf-card.small-pdf iframe {
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: none;
            transform: scale(1.05);
            /* biar isi PDF pas */
        }

        /* Grid khusus Peraturan */
        .pdf-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 24px;
        }
    </style>
    <!-- PDF Modal -->
    <div class="pdf-modal" id="pdfModal">
        <div class="pdf-modal-content">
            <div class="pdf-modal-header">
                <div class="pdf-modal-title" id="pdfTitle">Dokumen PDF</div>
                <div class="pdf-modal-actions">
                    <button class="pdf-modal-btn" onclick="downloadPDF()">
                        <i class="fas fa-download"></i> Download
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
    <script>
        let currentPDF = '';

        function openPDF(url, title = 'Dokumen PDF') {
            currentPDF = url;
            document.getElementById('pdfViewer').src = url;
            document.getElementById('pdfTitle').innerText = title;
            document.getElementById('pdfModal').classList.add('active');
        }

        function closePDF() {
            document.getElementById('pdfModal').classList.remove('active');
            document.getElementById('pdfViewer').src = '';
        }

        function downloadPDF() {
            if (!currentPDF) return;
            window.open(currentPDF, '_blank');
        }
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
    {{-- <script>
                // Data Pensiun Normal
                const normal = [
                    "Supangat", "Warsono", "Asni", "Hartini Koesen", "Erry Wahyuni Nr", "Uniwarti", "T. Idariah",
                    "Arifin Nurdin", "Ratna Linggawati", "Frans Zahrul Dinel", "Sri Yuniarti", "Husaini Djamhuri",
                    "Faisal Rivaie", "Junaidi Jadri", "Sriyanti Auzar", "Mohd Zailani", "Kaharudin Menteng", "Arpan Hais",
                    "Yoke Yulianto", "T. Hamami", "Komaruddin SS", "Harbaity", "Sugeng US", "Ahmad Yusuf",
                    "Khairuddin Abu Bakar", "Syahruddin Thoha", "Iswirman", "Nazaruddin", "Ferry Nasution",
                    "Muhammad Jamil", "R Zubir Salehan", "Riadul Jannah", "Bambang Harijanto", "Awalluddin", "Bachtiar",
                    "Subowo", "Nila Fauziah", "Yetti", "Rafifah", "Syahbirin", "Said Effendi", "T.Ilvan Hashmy",
                    "Zainal Rahman", "Jasman", "Syofyan", "Zairin", "Syahruddin Thabrie", "Agusalim", "Amir Husin",
                    "R. Nuraini Yusuf", "Zuhri Arsyad", "Ilyas Karim", "Sumitri Bibra", "Amirudin", "Said Azmel",
                    "Ratnawati", "Yusafrizal", "Miswanto", "Hanafie", "Endah Rosdiarti", "Hedrafni Mustafa", "Khairuddin",
                    "Tumijo", "Erly", "Khairul Dahlun", "T. Toyeb", "Roselawati", "Mayroslina", "R. Martinus", "Zulisman",
                    "Abu Bakar", "Zammeibar Kahar", "Arsis", "Azwan", "Siswadi", "Irianto", "Sudi Sutrisno", "Mujahidin",
                    "Syamsir", "Edy Riduan", "Abdul Wahid", "Muslim", "Yenimar", "Zulfiar Azial", "Kamariah",
                    "Ichwan Lubis", "Syafruddin Lasika", "Kornelius Maramis", "Mujahidin Jamal", "Joni Ardi",
                    "Edward Fachmi", "Syafrizal", "Syamsuddin Hasab", "Marwan Saleh", "Umar Jami", "Khairul Ammar",
                    "Zulkifli", "Nur Kadarsih Abadi", "R. Yunan Agustian", "Hasnur Berlian", "Heppy Wardono", "M. Yusuf",
                    "Suardi", "Sugiarto", "Afrizal", "Yuzefo", "Oni Suhardi", "Heru Prasetyo", "Mukhlis M. Syukur",
                    "Amril Daud", "Ruslan Abdul Gani", "Saepullah", "Nursyamsu", "Djafar", "Rafwan", "Nailan Matin",
                    "Suradi", "Sutanto Ongso", "Edi Muhni", "Wahyu Hidayat", "Yulia Roza", "Sudarmo", "Syaiful Anwar",
                    "Junaidi M. Zen", "Syamsullizar", "Fachruroddin", "Usman Bamas", "Wan Ishak", "Suhaimi Thaib",
                    "Zulkifli M. Zen", "Syahrul", "Zaini Ahmad", "Nursal", "Syarkawi Burhan", "M. Syukur", "Sayuti Rahman",
                    "Erwin Nasution", "Chairisman Rasahan"
                ];

                // Data Pensiun Dipercepat
                const dipercepat = [
                    "Asnawi Yusuf", "Ristata Irzal", "Zulkifli Thalib", "Haznam Harun", "Abu Hasan",
                    "Sisilia Mailina", "Sumardi Usman", "Fadli", "Zulfian Rahman", "Zufril Ilyas", "Desmalya",
                    "Nina Riawati", "Rubaidah Latif", "Elida Amir", "Syafruddin AS", "Asril Baharuddin", "Syofian Zailani",
                    "Suryanto", "Ahmad Jamaluddin", "Buchari Arahim", "Yuhelmi Yunus", "Afrijon Rauf", "T.Metty Zulianti",
                    "Efnita Yuliet", "Khairil Rusli", "Nismunandar", "Putra Buana", "Iwan Yusuf", "Abdul Kadir", "Fauzanah",
                    "Fatricia", "Misrawati", "Rosnawati", "Apris", "Suharman", "Syahril", "Wan Marwan",
                    "Said Zainal abidin", "Ruslan Malik", "Syaf Joni", "Muslihan", "Syamsul Bakri", "Yumadris", "Surip",
                    "Hadi Susanto", "M. Mustafa Kamal", "Edy Muhardy", "Bahrun Amid", "Arifin", "Made Idawati",
                    "Masnun Sri Hartati", "Abdul Musri", "Sarjono Amnan", "Ernawati Gani", "M. Bakri", "Ida Fitri",
                    "Syamuri", "Misran", "Rustam", "Hamdan", "Syamsuarmi", "Heri Erwan", "Heri Mulyadi", "Syahril Suhut",
                    "Endriyanto", "Eka Afriadi", "Rizali Effendi", "R. Budiman", "Bemi Hendrias", "R. Kartika Sari",
                    "Ramlan Gusti", "Tamrin", "Sudjasdi", "Indra Gunawan", "Irwan Dani Fachrizal", "Roswitha",
                    "R.Abdullah Putera", "Yuchwan", "T. Ferizon", "Ali Hasmi", "Joni Hendri", "Yunan Helmi", "Syahrial WG",
                    "Agus Jon", "INDRA BANGSAWAN", "Yanthi Kurnia, A.Md", "Jimmi Hafzan", "Rizi Rozaldi Pradady",
                    "Rosmiati Yatim", "Burhanuddin Jaffar", "Adrian Nahuwai", "Riduansyah", "Syafrizal", "Afrial Abdullah",
                    "Nizam Putih", "Erwin Mosra", "Juni Arnita", "Ervan Bakhtiar", "Mohd. Rizal", "Denny Muliya Akbar",
                    "Zulfikar", "Rugayya", "Erjunalis", "Debby Riani", "Mohammad Afrizal"
                ];

                // Data Janda/Duda
                const janda = [
                    "Yanheri", "Partini", "Gustinar", "R.Maizana", "Yunizar", "Yusnah", "Rosnitawati", "Wassalwa",
                    "Yuslina", "T.Kausar Bay", "Yeti Elisda", "Syarifah Fairus", "Darma Yulianti", "Mimi Arita",
                    "Dresmawita", "Nefi Agustina", "Syamsuarti", "R. Ainar Rahim", "Saliyah", "Efrilinda", "Murniati",
                    "Rasinem", "Raja Mina", "Nelfi Aroza", "Nurhayati", "Rukiah", "Mariatun", "Kasmaneli", "Rabuya",
                    "Haryanthi Novita", "Idawati", "Kamisah", "Priantini", "Hendra Yati", "Yusnidar", "Rina Wahyuni",
                    "Murniaty Syafei", "Rosnah", "Zulfa", "Sri Nurhayati", "Djasni Burhan", "Misgiaty", "Yuriati",
                    "Salniwati", "Marfuah", "Salmah", "Sukatni", "Rilda Gusnita", "Ulan Permata Sari"
                ];

                // Data Anak
                const anak = [
                    "Agip Dasanda", "Tegar Amar Dhana", "M.Qosinurrijal Nefra Pratama", "Razan Nail Fadhilah",
                    "Lona Sari", "Alghozy Rafif Ali", "Khansa Aqilla Aryandi", "Farah Luthfia Azizi"
                ];

                // Data Pedoman
                const pedoman = [{
                        code: "DPBRK-PDM-00-00-02",
                        title: "Tata Kelola"
                    },
                    {
                        code: "DPBRK-PDM-01-00-01",
                        title: "SPI"
                    },
                    {
                        code: "DPBRK-PDM-02-00-00",
                        title: "Perilaku dan Kode Etik"
                    },
                    {
                        code: "DPBRK-PDM-03-00-00",
                        title: "Pengelolaan Risiko"
                    },
                    {
                        code: "DPBRK-PDM-04-00-00",
                        title: "Pendanan dan Aktuaria"
                    },
                    {
                        code: "DPBRK-PDM-05-00-02",
                        title: "Investasi"
                    },
                    {
                        code: "DPBRK-PDM-06-00-01",
                        title: "Organisasi dan Tata Kerja"
                    },
                    {
                        code: "DPBRK-PDM-07-00-01",
                        title: "Penyusunan Anggaran dan Rencana Bisnis"
                    },
                    {
                        code: "DPBRK-PDM-08-00-01",
                        title: "Akuntansi"
                    },
                    {
                        code: "DPBRK-PDM-09-00-00",
                        title: "Pelayanan Kepesertaan"
                    },
                    {
                        code: "DPBRK-PDM-10-00-00",
                        title: "Sistem Informasi"
                    },
                    {
                        code: "DPBRK-PDM-11-00-00",
                        title: "Penjualan-Pelepasan & Penghapusan Aset Inv Bermasalah & Aset Ops"
                    },
                    {
                        code: "DPBRK-PDM-12-00-00",
                        title: "Perpajakan"
                    },
                    {
                        code: "DPBRK-PDM-13-51-00",
                        title: "Penilaian / Scoring Penawaran Penyedia Barang dan Jasa"
                    },
                    {
                        code: "DPBRK-PDM-14-12-00",
                        title: "Dokumentasi Risalah-Notulen Rapat Pengurus-Dewan Pengawas"
                    },
                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-15-11-00",
                        title: "Pemindahan arsip unit (pencipta arsip) ke pusat arsip"
                    },
                    {
                        code: "DPBRK-PDM-15-12-00",
                        title: "Peminjaman dan pengembalian arsip dari pusat arsip"
                    },
                    {
                        code: "DPBRK-PDM-15-51-00",
                        title: "Penataan dan penyimpanan arsip"
                    },
                    {
                        code: "DPBRK-PDM-15-52-00",
                        title: "Jadual retensi arsip"
                    },
                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-16-11-00",
                        title: "Tatacara Penyusunan Pedoman"
                    },
                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-16-12-00",
                        title: "Tatacara Penyusunan PSO"
                    },
                    {
                        code: "DPBRK-PDM-16-13-00",
                        title: "Tatacara Penyusunan JukLak"
                    },
                    {
                        code: "DPBRK-PDM-16-14-00",
                        title: "Pengurusan Surat Masuk"
                    },
                    {
                        code: "DPBRK-PDM-16-15-00",
                        title: "Pengurusan Surat Keluar"
                    },
                    {
                        code: "DPBRK-PDM-18-11-00",
                        title: "Penyusunan Penilaian Tingkat Risiko"
                    }
                ];

                // Data PSO
                const pso = [{
                        code: "DPBRK-PDM-01-11-00",
                        title: "Pemeriksaan Objek"
                    },
                    {
                        code: "DPBRK-PDM-01-51-00",
                        title: "Petunjuk Pelaksanaan Pemeriksaan"
                    },
                    {
                        code: "DPBRK-PDM-03-11-00",
                        title: "APR Pasar Uang"
                    },
                    {
                        code: "DPBRK-PDM-03-12-00",
                        title: "APR SBN"
                    },
                    {
                        code: "DPBRK-PDM-03-13-01",
                        title: "APR Obligasi - Sukuk"
                    },
                    {
                        code: "DPBRK-PDM-03-14-00",
                        title: "APR Saham di BEI"
                    },
                    {
                        code: "DPBRK-PDM-03-15-00",
                        title: "APR Reksa Dana"
                    },
                    {
                        code: "DPBRK-PDM-03-16-00",
                        title: "APR Saham Langsung"
                    },
                    {
                        code: "DPBRK-PDM-03-17-01",
                        title: "APR Tanah dan atau Bangunan"
                    },
                    {
                        code: "DPBRK-PDM-03-18-00",
                        title: "APR Investasi MTN"
                    },
                    {
                        code: "DPBRK-PDM-03-19-00",
                        title: "APR Investasi Efek Beragunan Aset (EBA)"
                    },
                    {
                        code: "DPBRK-PDM-03-20-00",
                        title: "APR Investasi DIRE-KIK"
                    },
                    {
                        code: "DPBRK-PDM-03-21-00",
                        title: "APR REPO"
                    },
                    {
                        code: "DPBRK-PDM-04-11-00",
                        title: "Pemeliharaan Pemutahiran Data Kepesertaan"
                    },
                    {
                        code: "DPBRK-PDM-04-12-01",
                        title: "Rekonsiliasi Iuran"
                    },
                    {
                        code: "DPBRK-PDM-04-13-00",
                        title: "Pengakuan Piutang Iuran dan Denda Keterlambatan"
                    },

                    {
                        code: "DPBRK-05-1-PSO-11-02",
                        title: "Penempatan Investasi (PNI) Pasar Uang"
                    },
                    {
                        code: "DPBRK-PDM-05-12-00",
                        title: "Penempatan SBN"
                    },
                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-05-15-00",
                        title: "Penempatan Reksa Dana"
                    },
                    {
                        code: "DPBRK-05-1-PSO-13-03",
                        title: "Penempatan Investasi Obligasi Sukuk"
                    },
                    {
                        code: "DPBRK-PDM-05-14-00",
                        title: "Penempatan Saham BEI"
                    },
                    {
                        code: "DPBRK-PDM-05-16-00",
                        title: "Penempatan Saham Langsung"
                    },
                    {
                        code: "DPBRK-PDM-05-17-01",
                        title: "Penempatan Investasi Tanah & Bangunan"
                    },
                    {
                        code: "DPBRK-PDM-05-18-00",
                        title: "Penempatan Investasi Obligasi BUMN & BUMD"
                    },
                    {
                        code: "DPBRK-PDM-05-19-00",
                        title: "Penempatan Investasi MTN"
                    },
                    {
                        code: "DPBRK-PDM-05-21-00",
                        title: "Penempatan Investasi DIRE-KIK"
                    },
                    {
                        code: "DPBRK-PDM-05-22-00",
                        title: "Penempatan Investasi Repo"
                    },

                    {
                        code: "DPBRK-05-1-PSO-31-02",
                        title: "Pencairan Investasi Pasar Uang & Analisa Risiko"
                    },
                    {
                        code: "DPBRK-PDM-05-32-00",
                        title: "Penjualan SBN"
                    },
                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-05-34-00",
                        title: "Penjualan Saham"
                    },
                    {
                        code: "DPBRK-05-1-PSO-33-01",
                        title: "Penjualan Obligasi Sukuk"
                    },
                    {
                        code: "DPBRK-PDM-05-35-00",
                        title: "Penjualan Reksa Dana"
                    },
                    {
                        code: "DPBRK-PDM-05-36-00",
                        title: "Penjualan Saham Langsung"
                    },
                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-05-37-01",
                        title: "Penjualan Tanah & Bangunan"
                    },
                    {
                        code: "DPBRK-PDM-05-38-00",
                        title: "Pelepasan MTN"
                    },
                    {
                        code: "DPBRK-PDM-05-39-00",
                        title: "Pelepasan EBA"
                    },
                    {
                        code: "DPBRK-PDM-05-40-00",
                        title: "Pelepasan Investasi DIRE-KIK"
                    },
                    {
                        code: "DPBRK-PDM-05-41-00",
                        title: "Pelepasan Repo Jatuh Tempo"
                    },

                    {
                        code: "DPBRK-PDM-06-11-00",
                        title: "Pembayaran Utang MP Bulanan"
                    },
                    {
                        code: "DPBRK-PDM-06-12-00",
                        title: "Pembayaran Utang MP Sekaligus"
                    },
                    {
                        code: "DPBRK-PDM-06-13-00",
                        title: "Pembayaran Utang Investasi Pasar Uang"
                    },
                    {
                        code: "DPBRK-PDM-06-14-00",
                        title: "Pembayaran Utang Investasi BEI"
                    },
                    {
                        code: "DPBRK-PDM-06-15-00",
                        title: "Pembayaran Investasi Saham Langsung"
                    },
                    {
                        code: "DPBRK-PDM-06-16-00",
                        title: "Pembayaran Investasi Tanah & Bangunan"
                    },
                    {
                        code: "DPBRK-PDM-06-17-00",
                        title: "Pembayaran Pihak Ketiga"
                    },
                    {
                        code: "DPBRK-PDM-06-18-00",
                        title: "Auto Debet Bank"
                    },
                    {
                        code: "DPBRK-PDM-06-19-00",
                        title: "Pembayaran Gaji / Honorarium"
                    },
                    {
                        code: "DPBRK-PDM-06-20-00",
                        title: "Pengeluaran Kas"
                    },
                    {
                        code: "DPBRK-PDM-06-31-00",
                        title: "Penerimaan Piutang Pasar Uang"
                    },
                    {
                        code: "DPBRK-PDM-06-32-00",
                        title: "Penerimaan Piutang BEI"
                    },
                    {
                        code: "DPBRK-PDM-06-33-00",
                        title: "Penerimaan Piutang non BEI"
                    },
                    {
                        code: "DPBRK-PDM-06-35-00",
                        title: "Penerimaan Iuran"
                    },
                    {
                        code: "DPBRK-PDM-06-37-00",
                        title: "Rekonsiliasi Bank"
                    },
                    {
                        code: "DPBRK-PDM-06-38-00",
                        title: "Jasa Bank & Pendapatan Lainnya"
                    },

                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-06-41-00",
                        title: "Penyusunan Laporan Teknis"
                    },
                    {
                        code: "DPBRK-PDM-07-11-01",
                        title: "Penyusunan Anggaran & Rencana Bisnis"
                    },
                    {
                        code: "DPBRK-PDM-07-12-01",
                        title: "Perubahan Anggaran & RB"
                    },
                    {
                        code: "DPBRK-PDM-07-13-01",
                        title: "Realokasi Beban Anggaran"
                    },
                    {
                        code: "DPBRK-PDM-07-14-01",
                        title: "Laporan Pertanggungjawaban Pengurus"
                    },
                    {
                        code: "DPBRK-PDM-07-15-00",
                        title: "Monitoring & Pengendalian Anggaran"
                    },
                    {
                        code: "DPBRK-PDM-07-51-00",
                        title: "Juklak Penanggungjawab Mata Anggaran"
                    },

                    {
                        code: "DPBRK-PDM-08-11-00",
                        title: "Akrual Liabilitas & Beban"
                    },
                    {
                        code: "DPBRK-PDM-08-12-00",
                        title: "Akrual Aset & Pendapatan"
                    },
                    {
                        code: "DPBRK-PDM-08-13-00",
                        title: "Jurnal Koreksi / Penyesuaian"
                    },

                    {
                        code: "DPBRK-PDM-09-11-00",
                        title: "Pengajuan Hak MP Ditunda / Dialihkan"
                    },
                    {
                        code: "DPBRK-PDM-09-12-00",
                        title: "Saran & Pendapat Peserta"
                    },
                    {
                        code: "DPBRK-PDM-09-13-00",
                        title: "Pemberitahuan Usia Pensiun"
                    },
                    {
                        code: "DPBRK-09-1-PSO-14-01",
                        title: "Penetapan Hak MP & Pengakuan Hutang"
                    },
                    {
                        code: "DPBRK-PDM-09-15-00",
                        title: "Pengakuan Hutang MP Bulanan"
                    },
                    {
                        code: "DPBRK-09-1-PSO-16-00",
                        title: "Pemutakhiran Data Peserta"
                    },

                    {
                        code: "DPBRK-PDM-10-11-00",
                        title: "Administrator Otorisasi SI"
                    },
                    {
                        code: "DPBRK-PDM-10-12-00",
                        title: "Tanggap Darurat SI"
                    },
                    {
                        code: "DPBRK-PDM-10-13-00",
                        title: "Data Cadangan Aplikasi SI"
                    },
                    {
                        code: "DPBRK-PDM-10-51-00",
                        title: "Pemeliharaan Perangkat Keras"
                    },
                    {
                        code: "DPBRK-PDM-10-52-00",
                        title: "Pemeliharaan Perangkat Lunak"
                    },

                    // DUPLIKAT — JANGAN DIHAPUS (DIIZINKAN MUNCUL 2x)
                    {
                        code: "DPBRK-PDM-11-11-00",
                        title: "Pengajuan Penghapusan Aset"
                    },
                    {
                        code: "DPBRK-PDM-11-12-00",
                        title: "Penjualan Aset"
                    },
                    {
                        code: "DPBRK-PDM-11-13-00",
                        title: "Pelepasan Aset"
                    },
                    {
                        code: "DPBRK-PDM-11-14-00",
                        title: "Pelepasan Aset Bermasalah"
                    },
                    {
                        code: "DPBRK-PDM-11-51-00",
                        title: "Kodefikasi Aset"
                    },

                    {
                        code: "DPBRK-PDM-12-11-00",
                        title: "Pelaporan SPT Masa"
                    },
                    {
                        code: "DPBRK-PDM-12-12-00",
                        title: "Pelaporan SPT Wajib"
                    },
                    {
                        code: "DPBRK-PDM-12-13-00",
                        title: "Pemindahbukuan Pajak"
                    },

                    {
                        code: "DPBRK-PDM-13-11-00",
                        title: "Pembelian Barang & Jasa"
                    },
                    {
                        code: "DPBRK-PDM-13-12-00",
                        title: "Pembelian Tanah & Bangunan"
                    },
                    {
                        code: "DPBRK-PDM-13-51-00",
                        title: "Penilaian Penawaran Penyedia"
                    },

                    {
                        code: "DPBRK-PDM-14-12-00",
                        title: "Dokumentasi Notulen Rapat"
                    },

                    {
                        code: "DPBRK-PDM-15-11-00",
                        title: "Pemindahan Arsip"
                    },
                    {
                        code: "DPBRK-PDM-15-12-00",
                        title: "Peminjaman Arsip"
                    },
                    {
                        code: "DPBRK-PDM-15-51-00",
                        title: "Penataan Arsip"
                    },
                    {
                        code: "DPBRK-PDM-15-52-00",
                        title: "Jadwal Retensi Arsip"
                    },

                    {
                        code: "DPBRK-PDM-16-11-00",
                        title: "Tatacara Penyusunan Pedoman"
                    },
                    {
                        code: "DPBRK-PDM-16-12-00",
                        title: "Tatacara Penyusunan PSO"
                    },
                    {
                        code: "DPBRK-PDM-16-13-00",
                        title: "Tatacara Penyusunan Juklak"
                    },
                    {
                        code: "DPBRK-PDM-16-14-00",
                        title: "Pengurusan Surat Masuk"
                    },
                    {
                        code: "DPBRK-PDM-16-15-00",
                        title: "Pengurusan Surat Keluar"
                    },

                    {
                        code: "DPBRK-PDM-18-11-00",
                        title: "Penyusunan Penilaian Tingkat Risiko"
                    }
                ];
            </script> --}}

    <script>
        // ===================== GENERATE TABEL PENSIUNAN =====================
        function generateTable(data, bodyId) {
            const tbody = document.getElementById(bodyId);
            tbody.innerHTML = "";

            data.forEach((name, index) => {
                tbody.innerHTML += `
                        <tr>
                            <td class="row-number">${index + 1}</td>
                            <td>${name}</td>
                        </tr>`;
            });
        }

        // ===================== GENERATE TABEL DOKUMEN =====================
        function generateDocumentTable(data, bodyId) {
            const tbody = document.getElementById(bodyId);
            tbody.innerHTML = "";

            data.forEach((item, index) => {
                tbody.innerHTML += `
                        <tr>
                            <td class="row-number">${index + 1}</td>
                            <td>${item.code}</td>
                            <td>${item.title}</td>
                        </tr>`;
            });
        }

        // ===================== FILTER TABLE =====================
        function filterTable(tableId, searchId) {
            const keyword = document.getElementById(searchId).value.toUpperCase();
            const rows = document.querySelectorAll(`#${tableId} tbody tr`);

            rows.forEach(row => {
                const text = row.innerText.toUpperCase();
                row.style.display = text.includes(keyword) ? "" : "none";
            });
        }

        // ===================== LOAD SEMUA DATA =====================
        window.addEventListener("DOMContentLoaded", () => {
            generateTable(normal, "bodyNormal");
            generateTable(dipercepat, "bodyDipercepat");
            generateTable(janda, "bodyJanda");
            generateTable(anak, "bodyAnak");

            generateDocumentTable(pedoman, "bodyPedoman");
            generateDocumentTable(pso, "bodyPSO");
        });

        function showTab(tabName) {
            // sembunyikan semua tab
            document.querySelectorAll(".tab-content").forEach(el => {
                el.classList.remove("active");
            });

            // tampilkan tab yang dipilih
            document.getElementById(tabName).classList.add("active");

            // ubah tombol active
            document.querySelectorAll(".tab-btn").forEach(btn => {
                btn.classList.remove("active");
            });

            event.target.classList.add("active");
        }
    </script>
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
</body>

</html>
