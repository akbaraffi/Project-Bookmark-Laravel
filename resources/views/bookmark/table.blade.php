@extends('layout.template')
@section('content')

<div class="min-h-screen py-20 bg-slate-800">
  <div class="max-w-7xl mx-auto bg-slate-200 p-6 rounded-lg shadow-md">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Daftar Bookmark</h2>
      <a href="{{ url('/form') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
        <i class="fa-solid fa-plus"></i> Tambah Bookmark
      </a>
    </div>

    <form action="{{ url('/search') }}" method="GET">
      <div class="flex items-center px-4 my-2 rounded-lg gap-2 bg-slate-300 shadow-sm">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input
          type="text" name="q" class="flex-1 px-2 py-1 my-2 rounded-lg bg-slate-300 border-none ring-0 focus:ring-0" placeholder="Cari berdasarkan nama" value="{{ request('q') }}">
      </div>
    </form>

    <div class="overflow-x-auto">
      <table class="min-w-full border border-slate-200 rounded-lg overflow-hidden" id="bookmarkTable">
        <thead class="bg-slate-300">
          <tr class="text-left text-gray-700">
            <th class="px-4 py-3 ">No</th>
            <th class="px-4 py-3 ">Nama</th>
            <th class="px-4 py-3 ">Kategori</th>
            <th class="px-4 py-3 ">Link</th>
            <th class="px-4 py-3 ">Deskripsi</th>
            <th class="px-4 py-3  text-center">Aksi</th>
          </tr>
        </thead>

        <tbody class="text-gray-800">
          @foreach($bookmarks as $bm)
          <tr class="bg-slate-300/30">
            <td class="px-4 py-3">{{ $loop->iteration }}</td>
            <td class="px-4 py-3 ">{{ $bm->nama }}</td>
            <td class="px-4 py-3 ">{{ $bm->kategori }}</td>
            <td class="px-4 py-3 ">
              <a href="{{ $bm->link }}" target="_blank"
                class="text-blue-600 hover:text-blue-800 no-underline">
                {{ Str::limit($bm->link, 40) }}
              </a>
            </td>
            <td class="px-4 py-3 ">
              {{ $bm->deskripsi}}
            </td>
            <td class="px-4 py-3 ">
              <div class="flex justify-center items-center gap-3">
                <a href="{{ url('/form/edit/'.$bm->id) }}"
                  class="flex items-center gap-2 bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded-md text-sm">
                  Edit
                </a>

                <form action="{{ url('/form/delete/'.$bm->id) }}" method="POST"
                  onsubmit="return confirm('Hapus bookmark ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                    class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm">
                    Hapus
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