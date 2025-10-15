@extends('layout.template')
@section('content')
<div class="flex flex-col justify-center items-center min-h-screen bg-gray-300">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Bookmark</h2>

        <form action="{{ url('/form/save') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nama" class="block text-left text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label for="kategori" class="block text-left text-gray-700 font-medium mb-1">Kategori</label>
                <input type="text" id="kategori" name="kategori" placeholder="Kategori" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label for="link" class="block text-left text-gray-700 font-medium mb-1">Link</label>
                <input type="text" id="link" name="link" placeholder="Link" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label for="deskripsi" class="block text-left text-gray-700 font-medium mb-1">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Tuliskan deskripsi"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md"></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection