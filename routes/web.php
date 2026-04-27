<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
	return view ('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('pert1intro', function () {
    return view ('Pertemuan1Intro');
});

Route::get('pert2news', function () {
    return view ('Pertemuan2news');
});

Route::get('pert3responsive', function () {
    return view ('Pertemuan3responsive');
});

Route::get('pert3template', function () {
    return view ('Pertemuan3Template');
});

Route::get('pert3responsive', function () {
    return view ('Pertemuan3responsive');
});

Route::get('pert3tugascontoh', function () {
    return view ('Pertemuan3TugasContoh');
});

Route::get('pert4tugas', function () {
    return view ('Pertemuan4Tugas');
});

Route::get('pert5index', function () {
    return view ('Pertemuan5Index');
});

Route::get('pert5', function () {
    return view ('Pertemuan5');
});

Route::get('pert5Linktree', function () {
    return view ('Pertemuan5Linktree');
});


