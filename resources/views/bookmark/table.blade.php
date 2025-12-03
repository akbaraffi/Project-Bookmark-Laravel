@extends('layout.template')
@section('content')

<div class="min-h-screen py-20 bg-gradient-to-r from-slate-900 via-slate-800 via-30% to-slate-700">
  <div class="max-w-7xl mx-auto bg-slate-200 p-6 rounded-lg shadow-md">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Daftar Bookmark</h2>
      <a href="{{ url('/form') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
        <i class="fa-solid fa-plus"></i> Tambah Bookmark
      </a>
    </div>

    <form action="{{ url('/search') }}" method="GET">
      <div class="flex items-center px-4 my-2 rounded-lg gap-2 bg-slate-300 shadow-sm">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input
          type="text" name="q" class="flex-1 px-2 py-1 my-2 rounded-lg bg-slate-300 focus:outline-0" placeholder="Cari berdasarkan nama" value="{{ request('q') }}">
      </div>
    </form>

    <div class="overflow-x-auto">
      <table class="min-w-full border border-slate-200 rounded-lg overflow-hidden" id="bookmarkTable">
        <thead class="bg-slate-300">
          <tr class="text-left text-gray-700">
            <th class="px-4 py-3 border-b">Nama</th>
            <th class="px-4 py-3 border-b">Kategori</th>
            <th class="px-4 py-3 border-b">Link</th>
            <th class="px-4 py-3 border-b">Deskripsi</th>
            <th class="px-4 py-3 border-b text-center">Aksi</th>
          </tr>
        </thead>

        <tbody class="text-gray-800">
          @foreach($bookmarks as $bm)
          <tr class="bg-slate-300/30">
            <td class="px-4 py-3 border-b">{{ $bm->nama }}</td>
            <td class="px-4 py-3 border-b">{{ $bm->kategori }}</td>
            <td class="px-4 py-3 border-b">
              <a href="{{ $bm->link }}" target="_blank"
                class="text-blue-600 hover:text-blue-800 no-underline">
                {{ Str::limit($bm->link, 40) }}
              </a>
            </td>
            <td class="px-4 py-3 border-b">
              {{ $bm->deskripsi}}
            </td>
            <td class="px-4 py-3 border-b">
              <div class="flex justify-center items-center gap-3">
                <a href="{{ url('/form/edit/'.$bm->id) }}"
                  class="flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded-md text-sm">
                  <i class="fa-solid fa-pen-to-square"></i> Edit
                </a>

                <form action="{{ url('/form/delete/'.$bm->id) }}" method="POST"
                  onsubmit="return confirm('Hapus bookmark ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-sm">
                    <i class="fa-solid fa-trash"></i> Hapus
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</div>

@endsection