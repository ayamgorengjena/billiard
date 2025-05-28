@extends('layouts.list')

@section('title', 'Daftar menu - Jesica')
@section('content')

<div><h1 class="text-2xl font-bold mb-4">Input Produk</h1></div>

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Form Tambah Produk</h2>

        <form method="POST" action="{{ route('produk.simpan') }}">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="nama" name="nama" class="form-input w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="3" class="form-textarea w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
            </div>

            <!-- Harga -->
            <div class="mb-4">
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input type="number" id="harga" name="harga" class="form-input w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
            </div>

            <!-- Tombol Simpan -->
            <div class="text-center">
                <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-2 rounded mt-4">
        {{ session('success') }}
    </div>
@endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama Produk</th>
                <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                <th scope="col" class="px-6 py-3">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $index => $item)
                <tr class="bg-blue-500 border-b border-blue-400">
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">{{ $item->nama }}</td>
                    <td class="px-6 py-4">{{ $item->deskripsi }}</td>
                    <td class="px-6 py-4">{{ $item->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection