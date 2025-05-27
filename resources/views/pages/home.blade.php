@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di billiard')

@section('content')
    <h1 class="text-2x1 font-bold mb-4"> Selamat datang</h1>
    <p class="mb-4">Berikut adalah baju loli tercantik hari ini</P>
    @include('components.card', [
        'img src' => asset('images/gambar_2.jpg'),
        'title' => 'lolita dress', 
        'desc' => 'dress dengan kualitas terbaik'])
@endsection
