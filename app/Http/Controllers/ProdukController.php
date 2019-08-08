<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Flight;


class ProdukController extends Controller
{
    public function index()
    {
    // mengambil data dari table produk
    $produk = Flight::all();
 
    // mengirim data produk ke view 
    return view('pages.awal',['produk' => $produk]);
    }

    // method untuk menampilkan view form add produk
    public function add()
    {
        // memanggil view tambah
        return view('pages.addproduct');
    }

    public function list(Request $request)
    {
    // insert data ke table produk
    $produk = new Flight;
    $produk->nm_produk = $request->nama;
    $produk->save();

	// DB::table('produk')->insert([
	// 	'nm_produk' => $request->nama
	// ]);
	// alihkan halaman ke halaman produk
	return redirect('/produk');
    }

    public function edit($kd)
    {
    // mengambil data produk berdasarkan id yang dipilih
    $produk = Flight::where('kd_produk', $kd)->first();
	// $produk = DB::table('produk')->where('kd_produk',$kd)->first();
	// passing data produk yang didapat ke view edit.blade.php
	return view('pages.edit',['produk' => $produk]);
    }

    public function update(Request $request)
    {
    // update data produk
    $id=$request->id;
    $nama=$request->nama;
    // dd($id,$nama);
    DB::table('produk')
        ->where('kd_produk',$request->kd)
        ->update(['nm_produk' => $request->nama]);
	// alihkan halaman ke halaman produk
	return redirect('/produk');
    }

    // method untuk hapus data produk
    public function delete($kd)
    {
        // menghapus data produk berdasarkan id yang dipilih
        // DB::table('produk')->where('kd_produk',$kd)->delete();
        $produk = Flight::where('kd_produk', $kd)->delete();
        // alihkan halaman ke halaman produk
        return redirect('/produk');
    }
}
