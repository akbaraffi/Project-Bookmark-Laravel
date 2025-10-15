@extends('layout.template')
@section('content')
<div class="min-h-screen bg-gray-300 py-20">
  <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">

    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Daftar Bookmark</h2>
      <a href="{{ url('/form') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
        + Tambah Bookmark
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden" id="bookmarkTable">
        <thead class="bg-gray-100">
          <tr class="text-left text-gray-700">
            <th class="px-4 py-3 border-b">Nama</th>
            <th class="px-4 py-3 border-b">Kategori</th>
            <th class="px-4 py-3 border-b">Link</th>
            <th class="px-4 py-3 border-b">Deskripsi</th>
            <th class="px-4 py-3 border-b">Aksi</th>
          </tr>
        </thead>

        <tbody class="text-gray-800">

          <tr class="hover:bg-gray-50">
            <td class="px-4 py-3 border-b font-medium">Belajar Laravel</td>
            <td class="px-4 py-3 border-b">Belajar</td>
            <td class="px-4 py-3 border-b">
              <a href="https://laravel.com/docs" target="_blank" class="text-blue-600 hover:underline">
                https://laravel.com/docs
              </a>
            </td>
            <td class="px-4 py-3 border-b">Dokumentasi resmi Laravel untuk pemula dan lanjutan.</td>
            <td class="px-4 py-3 border-b">
              <button class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-md text-sm">Edit</button>
              <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-sm">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>

@endsection