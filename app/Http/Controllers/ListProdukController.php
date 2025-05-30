<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{   
    
    public function show()
    {
        $produk = Produk::all(); // Ambil semua data produk
    return view('pages.list_produk', compact('produk'));
    }
    public function simpan(Request $request)
    {

            $produk = new Produk;
            $produk->nama = $request->input('nama');
            $produk->deskripsi = $request->input('deskripsi');
            $produk->harga = $request->input('harga');
            $produk->save();
        
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    
}