@extends('layout.template')
@section('content')
<div class="flex flex-col justify-center items-center min-h-screen bg-gradient-to-r from-slate-900 via-slate-800 via-30% to-slate-700 ">
    <div class="bg-slate-200 p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Bookmark</h2>

        <form action="{{ url('/form/update/' . $bookmark->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="nama" class="block text-left text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" id="nama" name="nama" required
                    value="{{ old('nama', $bookmark->nama) }}"
                    class="w-full px-4 py-2 border border-slate-400 rounded-md">
            </div>

            <div>
                <label for="kategori" class="block text-left text-gray-700 font-medium mb-1">Kategori</label>
                <input type="text" id="kategori" name="kategori" required
                    value="{{ old('kategori', $bookmark->kategori) }}"
                    class="w-full px-4 py-2 border border-slate-400 rounded-md">
            </div>

            <div>
                <label for="link" class="block text-left text-gray-700 font-medium mb-1">Link</label>
                <input type="text" id="link" name="link" required
                    value="{{ old('link', $bookmark->link) }}"
                    class="w-full px-4 py-2 border border-slate-400 rounded-md">
            </div>

            <div>
                <label for="deskripsi" class="block text-left text-gray-700 font-medium mb-1">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="w-full px-4 py-2 border border-slate-400 rounded-md ">{{ old('deskripsi', $bookmark->deskripsi) }}</textarea>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ url('/table ') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
                    Kembali
                </a>
                <button type="submit" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection