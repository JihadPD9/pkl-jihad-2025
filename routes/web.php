<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    // ================================================
    // Route::get() = Tangani HTTP GET request
    // '/tentang'   = URL yang akan dihandle
    // function     = Kode yang dijalankan saat URL diakses
    // ================================================

    return view('tentang');
    // ↑ return view('tentang') = Tampilkan file tentang.blade.php
    // ↑ Laravel akan mencari di: resources/views/tentang.blade.php
});



//Latihan 1
Route::get('/sapa/{nama}', function ($nama) {

    return "Halo, $nama! Selamat datang di Toko Online.";
});

//Latihan 2
Route::get('/kategori/{nama?}', function ($nama = 'Semua') {

    return "Menampilkan kategori: $nama";
});

//Latihan 3
Route::get('/produk/{id}', function ($id) {
    return "Detail produk #$id";
})->name('produk.detail');