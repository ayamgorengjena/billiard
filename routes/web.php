<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ListProdukController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list_produk', [ListProdukController::class, 'show']);
Route::post('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
