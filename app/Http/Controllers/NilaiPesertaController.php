<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilai_peserta
    	$nilaipeserta = DB::table('nilai_peserta')->get(); // jika tidak pakai paginate
        // $nilaipeserta = DB::table('nilai_peserta')->paginate(10);

    	// mengirim data nilai_peserta ke view index
    	return view('nilaipeserta.index',['nilaipeserta' => $nilaipeserta]);
    }

    public function tambah()
	{
		// memanggil view tambah
		return view('nilaipeserta.tambah');
	}

    // method untuk insert data ke table nilai_peserta
	public function store(Request $request)
	{
		// insert data ke table nilai_peserta
		DB::table('nilai_peserta')->insert([
			'No Peserta' => $request->nopeserta,
			'Nilai Teori' => $request->nilaiteori,
			'Nilai Praktek' => $request->nilaipraktek,
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/nilaipeserta');

	}

	// // method untuk edit data pegawai
	// public function edit($id)
	// {
	// 	// mengambil data pegawai berdasarkan id yang dipilih
	// 	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return view('edit',['pegawai' => $pegawai]);

	// }

	// // update data pegawai
	// public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
	// 		'pegawai_nama' => $request->nama,
	// 		'pegawai_jabatan' => $request->jabatan,
	// 		'pegawai_umur' => $request->umur,
	// 		'pegawai_alamat' => $request->alamat
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/pegawai');
	// }

	// // method untuk hapus data pegawai
	// public function hapus($id)
	// {
	// 	// menghapus data pegawai berdasarkan id yang dipilih
	// 	DB::table('pegawai')->where('pegawai_id',$id)->delete();

	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/pegawai');
	// }
}
