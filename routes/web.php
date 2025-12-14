<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaInformasiController;

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

// dashboard user (PAKAI CONTROLLER)
Route::get('/', [BeritaInformasiController::class, 'dashboard']);
Route::get('/dashboard', [BeritaInformasiController::class, 'dashboard'])->name('dashboard');

// CRUD berita
Route::resource('berita', BeritaInformasiController::class);
Route::prefix('admin')->group(function () {
    Route::resource('berita', BeritaInformasiController::class);
});
Route::get('/berita-detail/{id}', [BeritaInformasiController::class, 'detail'])
    ->name('berita.detail');
