<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dapen BRKS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1e40af;
            --sidebar-width: 260px;
            --header-height: 70px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #f8fafc;
            color: #334155;
        }

        /* SIDEBAR */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 0;
            box-shadow: 4px 0 24px rgba(0, 0, 0, 0.12);
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 24px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.05);
        }

        .sidebar-header h4 {
            color: #fff;
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-header .logo-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-label {
            padding: 8px 20px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #94a3b8;
            margin-top: 12px;
        }

        .sidebar a {
            color: #cbd5e1;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            gap: 12px;
        }

        .sidebar a i {
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .sidebar a:hover {
            background: rgba(59, 130, 246, 0.1);
            color: #fff;
            border-left-color: #3b82f6;
            padding-left: 24px;
        }

        .sidebar a.active {
            background: rgba(59, 130, 246, 0.15);
            color: #fff;
            border-left-color: #3b82f6;
        }

        /* MAIN CONTENT */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        .header-navbar {
            background: #ffffff;
            height: var(--header-height);
            border-bottom: 1px solid #e2e8f0;
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .header-title {
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #f1f5f9;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .header-icon-btn:hover {
            background: #e2e8f0;
            transform: translateY(-1px);
        }

        .header-icon-btn i {
            font-size: 18px;
            color: #475569;
        }

        .notification-badge {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 12px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .admin-profile:hover {
            background: #f8fafc;
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .admin-info {
            display: flex;
            flex-direction: column;
        }

        .admin-name {
            font-size: 14px;
            font-weight: 600;
            color: #0f172a;
            line-height: 1.2;
        }

        .admin-role {
            font-size: 12px;
            color: #64748b;
        }

        /* CONTENT AREA */
        .content-area {
            flex: 1;
            padding: 32px;
        }

        /* BREADCRUMB */
        .custom-breadcrumb {
            background: transparent;
            padding: 0;
            margin-bottom: 24px;
            font-size: 14px;
        }

        .custom-breadcrumb .breadcrumb-item {
            color: #64748b;
        }

        .custom-breadcrumb .breadcrumb-item.active {
            color: #0f172a;
            font-weight: 500;
        }

        /* CARDS */
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .main-wrapper {
                margin-left: 0;
            }

            .header-navbar {
                padding: 0 16px;
            }

            .content-area {
                padding: 20px;
            }

            .admin-info {
                display: none;
            }
        }

        /* SCROLLBAR */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h4>
                <span class="logo-icon">
                    <i class="bi bi-shield-check"></i>
                </span>
                Dapen BRKS
            </h4>
        </div>

        <div class="sidebar-menu">
            <div class="menu-label">Main Menu</div>

            <a href="{{ route('admin.index') }}" class="active">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>

            <div class="menu-label">Konten Management</div>

            <a href="{{ route('berita.index') }}">
                <i class="bi bi-newspaper"></i>
                <span>Berita & Informasi</span>
            </a>

            <a href="{{ route('laporan.index') }}">
                <i class="bi bi-file-earmark-bar-graph"></i>
                <span>Laporan Keuangan</span>
            </a>

            <a href="{{ route('jumlah-peserta.index') }}">
                <i class="bi bi-people-fill"></i>
                <span>Jumlah Peserta Aktif</span>
            </a>
            <a href="{{ route('admin.warta.index') }}">
                <i class="bi bi-newspaper"></i>
                <span>Warta / Majalah</span>
            </a>
            <a href="{{ route('admin.dokumen.index') }}">
                <i class="bi bi-folder2-open"></i>
                <span>Dokumen / Peraturan</span>
            </a>
            <a href="{{ route('admin.gallery.index') }}">
                <i class="bi bi-images"></i>
                <span>Galeri</span>
            </a>


            {{-- Uncomment jika diperlukan
            <div class="menu-label">Layanan</div>
            
            <a href="{{ route('formulir') }}">
                <i class="bi bi-file-text"></i>
                <span>Formulir</span>
            </a>
            
            <a href="{{ route('Pengaduan') }}">
                <i class="bi bi-chat-square-text"></i>
                <span>Pengaduan</span>
            </a>
            
            <a href="{{ route('kepesertaan') }}">
                <i class="bi bi-person-badge"></i>
                <span>Kepesertaan</span>
            </a>
            
            <a href="{{ route('Peraturan') }}">
                <i class="bi bi-book"></i>
                <span>Peraturan</span>
            </a>
            --}}

            <div class="menu-label">Lainnya</div>

            <a href="#">
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
            </a>

            <a href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
            </a>
        </div>
    </div>

    <!-- MAIN WRAPPER -->
    <div class="main-wrapper">

        <!-- HEADER -->
        <header class="header-navbar">
            <div class="header-left">
                <h1 class="header-title">Admin Panel</h1>
            </div>

            <div class="header-right">
                <button class="header-icon-btn">
                    <i class="bi bi-search"></i>
                </button>

                <button class="header-icon-btn">
                    <i class="bi bi-bell"></i>
                    <span class="notification-badge"></span>
                </button>

                <div class="admin-profile">
                    <div class="admin-avatar">AD</div>
                    <div class="admin-info">
                        <div class="admin-name">Administrator</div>
                        <div class="admin-role">Super Admin</div>
                    </div>
                </div>
            </div>
        </header>

        <!-- CONTENT AREA -->
        <main class="content-area">
            @yield('content')
        </main>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Active menu highlight
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const menuLinks = document.querySelectorAll('.sidebar a');

            menuLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>

</body>

</html>
