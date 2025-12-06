<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Dashboard');
});
Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/profile', function () {
    return view('Profile');
});
Route::get('/formulir', function () {
    return view('formulir');
})->name('formulir');
Route::get('/Pengaduan', function () {
    return view('Pengaduan');
})->name('Pengaduan');
Route::get('/kepesertaan', function () {
    return view('kepesertaan');
})->name('kepesertaan');
Route::get('/Peraturan', function () {
    return view('Peraturan');
})->name('Peraturan');
