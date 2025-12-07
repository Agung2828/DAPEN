<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaInformasiController;

/*
|--------------------------------------------------------------------------
| USER / PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// Dashboard user ➝ menampilkan berita
Route::get('/dashboard', [BeritaInformasiController::class, 'dashboard'])->name('dashboard');

// Halaman statis
Route::view('/profile', 'Profile')->name('profile');
Route::view('/dashboard', 'Dashboard')->name('dashboard.page');
Route::view('/formulir', 'Formulir')->name('formulir');
Route::view('/Pengaduan', 'Pengaduan')->name('Pengaduan');
Route::view('/kepesertaan', 'Kepesertaan')->name('kepesertaan');
Route::view('/Peraturan', 'Peraturan')->name('Peraturan');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

// Admin dashboard ➝ daftar berita
Route::get('/admin', [BeritaInformasiController::class, 'index'])->name('admin.index');

// CRUD Berita khusus admin
Route::prefix('admin')->group(function () {
    Route::resource('berita', BeritaInformasiController::class);
});
