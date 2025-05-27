<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller 
{
    public function index()
    {
        // Simulasi data (bisa diganti dari database nanti)
        $data = [
            ['id' => 1, 'produk' => 'Stick Billiard'],
            ['id' => 2, 'produk' => 'Sarung Tangan'],
            ['id' => 3, 'produk' => 'Sepatu Khusus'],
        ];

        // Kirim data ke view
        return view('list_product', ['data' => $data]);
    }
}
