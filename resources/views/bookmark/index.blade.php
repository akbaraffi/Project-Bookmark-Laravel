@extends('layout.template')
@section('content')
<div class="flex flex-col justify-center items-center text-center min-h-screen bg-gradient-to-r from-slate-900 via-slate-800 via-30% to-slate-700">
    <h1 class="text-4xl text-gray-100 font-bold mb-4">SELAMAT DATANG DI KAZU BOOKMARK</h1>
    <p class="text-gray-100 mb-6 max-w-lg">
        Simpan dan kelola berbagai link penting dari internet, semuanya dalam satu tempat yang rapi dan mudah diakses.
    </p>
    <a href="{{ url('/table ') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-md m-2">
        <span>Tambah Bookmark</span>
        <i class="fa-solid fa-arrow-right"></i>
    </a>
</div>
@endsection