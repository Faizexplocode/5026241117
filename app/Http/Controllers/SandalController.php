<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SandalController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$sandal = DB::table('sandal')->get(); // jika tidak pakai paginate
        // $sandal = DB::table('sandal')->paginate(10);

    	// mengirim data sandal ke view index
    	return view('sendal.index',['sandal' => $sandal]);
    }

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sandal')->insert([
			'kodesandal' => $request->KodeSandal,
			'merksandal' => $request->MerkSandal,
			'stocksandal' => $request->StockSandal,
			'tersedia' => $request->Tersedia
		]);
		// alihkan halaman ke halaman sandal
		return redirect('/sandal');

	}
}
