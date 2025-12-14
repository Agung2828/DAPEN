<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaInformasiController;
use App\Http\Controllers\Admin\LaporanKeuanganController;
use App\Http\Controllers\JumlahPesertaController;
use App\Http\Controllers\Admin\WartaController;
use App\Http\Controllers\Admin\DokumenController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\Admin\GalleryController;
use App\Models\Gallery;
// alihkan ke /admin
Route::get('/', fn() => redirect('/admin'));


// alihkan ke /admin
Route::get('/admin', [BeritaInformasiController::class, 'index'])->name('admin.index');

// halaman statis lain (biarin)
Route::get('/profile', fn() => view('Profile'));
Route::get('/formulir', fn() => view('formulir'))->name('formulir');
Route::get('/Pengaduan', fn() => view('Pengaduan'))->name('Pengaduan');
Route::get('/kepesertaan', fn() => view('kepesertaan'))->name('kepesertaan');
Route::get('/Peraturan', fn() => view('Peraturan'))->name('Peraturan');
Route::get('/Warta', fn() => view('Warta'))->name('Warta');

// dashboard user (PAKAI CONTROLLER)
Route::get('/', [BeritaInformasiController::class, 'dashboard']);
Route::get('/dashboard', [BeritaInformasiController::class, 'dashboard'])->name('dashboard');

// CRUD berita
Route::resource('berita', BeritaInformasiController::class);
Route::prefix('admin')->group(function () {
    Route::resource('berita', BeritaInformasiController::class);
});
// Halaman admin laporan keuangan
Route::prefix('admin')->name('laporan.')->group(function () {
    Route::get('laporan-keuangan', [LaporanKeuanganController::class, 'index'])->name('index');
    Route::get('laporan-keuangan/create', [LaporanKeuanganController::class, 'create'])->name('create');
    Route::post('laporan-keuangan', [LaporanKeuanganController::class, 'store'])->name('store');
    Route::put('laporan-keuangan/{laporan}', [LaporanKeuanganController::class, 'update'])->name('update');
    Route::delete('laporan-keuangan/{laporan}', [LaporanKeuanganController::class, 'destroy'])->name('destroy');
});

// Halaman publik formulir.blade.php
Route::get('/formulir', [LaporanKeuanganController::class, 'tampilLaporan'])->name('formulir');



// Halaman admin
Route::prefix('admin')->group(function () {
    Route::get('/jumlah-peserta', [JumlahPesertaController::class, 'index'])->name('jumlah-peserta.index');
    Route::put('/jumlah-peserta/{id}', [JumlahPesertaController::class, 'update'])->name('jumlah-peserta.update');
});

// Halaman user
Route::get('/kepesertaan', [JumlahPesertaController::class, 'kepesertaan'])->name('kepesertaan');

// Halaman Warta
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('warta', WartaController::class);
});
Route::get('/Warta', [WartaController::class, 'warta'])->name('Warta');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
    Route::get('/dokumen/create', [DokumenController::class, 'create'])->name('dokumen.create');
    Route::post('/dokumen', [DokumenController::class, 'store'])->name('dokumen.store');
    Route::delete('/dokumen/{id}', [DokumenController::class, 'destroy'])->name('dokumen.destroy');
});

Route::get('/Peraturan', [PeraturanController::class, 'index'])
    ->name('Peraturan');
Route::get('/berita/{id}', [BeritaInformasiController::class, 'show'])
    ->name('berita.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('gallery', GalleryController::class);
});
Route::delete(
    'admin/gallery-item/{id}',
    [GalleryController::class, 'destroyItem']
)->name('admin.gallery-item.destroy');
Route::get('/galeri', function () {
    $galleries = Gallery::with('items')->get();
    return view('Galeri', compact('galleries'));
});
Route::get('/Galeri', function () {
    $galleries = Gallery::with('items')->get();
    return view('Galeri', compact('galleries'));
})->name('Galeri');
