<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);

Route::get('/mahasiswa/{zian}',[MahasiswaController::class, 'show']);

Route::get('/pcr', function () {
    return 'aku raja minyak';
});

Route::get('/mahasiswa', function () {
    return 'hallo mahasiswa';
});

Route::get('/nama/{zian}', function ($zian) {
    return'nama saya:'.$zian;
});

Route::get('/nim/{zian}', function ($zian='') {
    return'nim saya:'.$zian;
});

Route::get('/about', function () {
    return view('halaman-about');
});
