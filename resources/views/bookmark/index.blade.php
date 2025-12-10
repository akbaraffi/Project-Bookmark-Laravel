@extends('layout.template')
@section('content')
<div class="flex flex-col justify-center items-center text-center min-h-screen bg-slate-800">
    <h1 class="text-4xl text-gray-100 font-bold mb-4">SELAMAT DATANG DI KAZU BOOKMARK</h1>
    <p class="text-gray-100 mb-6 max-w-lg">
        Simpan link penting favorit anda dari internet dalam satu tempat yang mudah diakses.
    </p>
    <a href="{{ url('/table ') }}" class="bg-gray-900 hover:bg-gray-700 border text-white px-5 py-2 rounded-3xl m-2">
        <span>Tambah Bookmark</span>
        <i class="fa-solid fa-arrow-right"></i>
    </a>
</div>
@endsection