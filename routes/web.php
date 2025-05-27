<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProdukController;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/welcome', function () {
    return view('welcome');
 });

// Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list_produk', [ListProdukController::class, 'show']);
