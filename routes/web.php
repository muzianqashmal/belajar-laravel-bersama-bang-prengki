<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{id?}', [MatakuliahController::class, 'show']);

Route::get('/mahasiswa/{zian}',[MahasiswaController::class, 'show']);

Route::get('/pcr', function () {
    return 'aku raja minyakHHHHkkkk';
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

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
Route::get('/home', [HomeController::class, 'index']);
