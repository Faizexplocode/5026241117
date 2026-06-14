<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SandalController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\NilaiKuliahController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//tugas sebelumnya
Route::get('pert1intro', function () { return view('Pertemuan1Intro'); });
Route::get('pert2news', function () { return view('Pertemuan2news'); });
Route::get('pert3responsive', function () { return view('Pertemuan3responsive'); });
Route::get('pert3template', function () { return view('Pertemuan3Template'); });
Route::get('pert3tugascontoh', function () { return view('Pertemuan3TugasContoh'); });
Route::get('pert4tugas', function () { return view('Pertemuan4Tugas'); });
Route::get('pert5index', function () { return view('Pertemuan5Index'); });
Route::get('pert5', function () { return view('Pertemuan5'); });
Route::get('pert5Linktree', function () { return view('Pertemuan5Linktree'); });

// CRUD Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//Route CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// Keranjang
Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::get('/keranjangbeli/{id}', [KeranjangController::class, 'beli']);
Route::get('/keranjanghapus/{id}', [KeranjangController::class, 'hapus']);

//sandal
Route::get('/sandal', [SandalController::class, 'index']);
Route::post('/sandal', [SandalController::class, 'store']);

//perpustakaan
Route::get('/perpustakaan', [BukuController::class, 'index']);
Route::post('/perpustakaanpinjam/{id}', [BukuController::class,'pinjam']);

//nilaikuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
Route::get('/nilaikuliah/{id}/edit', [NilaiKuliahController::class, 'edit'])->name('nilaikuliah.edit');
Route::put('/nilaikuliah/{id}', [NilaiKuliahController::class, 'update'])->name('nilaikuliah.update');
Route::delete('/nilaikuliah/{id}', [NilaiKuliahController::class, 'destroy'])->name('nilaikuliah.destroy');
