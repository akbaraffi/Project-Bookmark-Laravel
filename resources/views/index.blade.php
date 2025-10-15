@extends('layout.template')
@section('content')
<div class="flex flex-col justify-center items-center text-center min-h-screen bg-gray-300">
    <h1 class="text-4xl font-bold mb-4">SELAMAT DATANG DI KAZU BOOKMARK</h1>
    <p class="text-gray-600 mb-6 max-w-lg">
        Simpan dan kelola berbagai link penting dari internet, semuanya dalam satu tempat yang rapi dan mudah diakses.
    </p>

    <div class="grid grid-cols-2">
        <a href="{{ url('/form') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-md m-2">
            <span>Tambah Bookmark</span>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
        <a href="{{ url('/table') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-md m-2">
            <span>Lihat Daftar Link</span>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</div>
@endsection
