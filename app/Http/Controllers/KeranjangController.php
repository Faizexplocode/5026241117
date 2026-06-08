<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
   public function index()
    {
    	// mengambil data dari table keranjang_belanja
    	$belanja = DB::table('Keranjang_Belanja')->get(); // jika tidak pakai paginate
        // $belanja = DB::table('pegawai')->paginate(10);

    	// mengirim data keranjang_belanja ke view index
    	return view('keranjang/index',['belanja' => $belanja]); //
    }
    // method untuk edit data pegawai
	public function beli($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$belanja = DB::table('Keranjang_Belanja')->where('KodeBarang',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		 return view('keranjang.beli', ['barang' => $belanja]);
	}
    public function hapus($id)
	{
		// menghapus data keranjang_belanja berdasarkan id yang dipilih
		DB::table('Keranjang_Belanja')->where('KodeBarang',$id)->delete();

		// alihkan halaman ke halaman keranjang
		return redirect('/keranjang');
	}
    public function store(Request $request)
	{
		// insert data ke table keranjang_belanja
		DB::table('Keranjang_Belanja')->insert([
			'kode_barang' => $request->kode_barang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga
		]);
		// alihkan halaman ke halaman keranjang
		return redirect('/keranjang');
	}
}
