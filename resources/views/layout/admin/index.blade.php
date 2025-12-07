<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dapen BRKS</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        .sidebar {
            width: 240px;
            height: 100vh;
            position: fixed;
            background: #0d6efd;
            color: white;
            padding: 20px;
        }

        .sidebar h4 {
            color: #fff;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            font-size: 15px;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.1);
            padding-left: 10px;
            transition: 0.3s;
        }

        .content {
            margin-left: 260px;
            padding: 30px;
        }

        .navbar-custom {
            background: #ffffff;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4>Dapen BRKS</h4>

        <a href="{{ route('admin.index') }}">Dashboard</a>
        <a href="{{ route('berita.index') }}">Berita & Informasi</a>

        <a href="{{ route('dashboard') }}">Dashboard</a>

        {{-- <a href="{{ route('formulir') }}">Formulir</a>
        <a href="{{ route('Pengaduan') }}">Pengaduan</a>
        <a href="{{ route('kepesertaan') }}">Kepesertaan</a>
        <a href="{{ route('Peraturan') }}">Peraturan</a> --}}
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- Navbar atas -->
        <nav class="navbar navbar-light navbar-custom mb-4">
            <div class="container-fluid d-flex justify-content-between">
                <span></span>
                <span class="fw-bold">Admin Panel</span>
                <span></span>
            </div>
        </nav>

        <!-- Tempat isi konten -->
        @yield('content')

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
