<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>{{ $berita->judul }} - Dana Pensiun Bank Riau Kepri</title>

    <meta name="description"
        content="{{ \Illuminate\Support\Str::limit(strip_tags($berita->deskripsi), 150) }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <header class="main-header">
        <div class="container">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('image/logo.png') }}" alt="Logo">
            </a>
        </div>
    </header>

    <main class="container" style="max-width: 900px; margin: 3rem auto;">

        <div style="margin-bottom: 1rem;">
            <span style="color:#dc2626; font-weight:700;">
                {{ strtoupper($berita->kategori) }}
            </span>
            <span style="margin-left:1rem; color:#6b7280;">
                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
            </span>
        </div>

        <h1 style="font-size:2.2rem; font-weight:800; margin-bottom:1.5rem;">
            {{ $berita->judul }}
        </h1>

        @if ($berita->foto)
        <img src="{{ asset('uploads/berita/' . rawurlencode(basename($berita->foto))) }}"
            style="width:100%; border-radius:16px; margin-bottom:2rem;">
        @endif

        <div style="font-size:1.05rem; line-height:1.9; color:#374151;">
            {!! nl2br(e($berita->deskripsi)) !!}
        </div>

        <div style="margin-top:3rem;">
            <a href="{{ route('dashboard') }}"
                style="display:inline-flex; align-items:center; gap:.5rem; color:#dc2626; font-weight:700;">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>

    </main>

    <footer style="margin-top:4rem; padding:2rem; background:#111827; color:#fff; text-align:center;">
        &copy; {{ date('Y') }} Dana Pensiun Bank Riau Kepri
    </footer>

</body>

</html>