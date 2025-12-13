@extends('layout.template')
@section('content')
<div class="flex flex-col justify-center items-center min-h-screen bg-slate-800">
    <div class="bg-slate-200 p-8 rounded-lg shadow-md w-full max-w-md relative">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Bookmark</h2>

        <form id="bookmarkForm" action="{{ url('/form/save') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block text-left text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama"
                    value="{{ old('nama') }}" required
                    class="w-full px-4 py-2 border border-slate-400 rounded-md">
            </div>

            <div>
                <label for="kategori" class="block text-left text-gray-700 font-medium mb-1">Kategori</label>
                <div class="flex gap-2">
                    <select id="kategori" name="kategori" required
                        class="w-full px-4 py-2 border border-slate-400 rounded-md bg-white cursor-pointer">
                        <option value="" disabled {{ old('kategori') ? '' : 'selected' }}>Pilih Kategori</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->kategori }}" {{ old('kategori') == $cat->kategori ? 'selected' : '' }}>
                            {{ $cat->kategori }}
                        </option>
                        @endforeach
                    </select>

                    <button type="button" onclick="openModal()"
                        class="bg-gray-600 hover:bg-gray-700 text-white px-3 py-2 rounded-md font-bold text-xl flex items-center justify-center w-12"
                        title="Tambah Kategori Baru">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
            </div>

            <div>
                <label for="link" class="block text-left text-gray-700 font-medium mb-1">Link</label>
                <input type="text" id="link" name="link" placeholder="Link"
                    value="{{ old('link') }}" required
                    class="w-full px-4 py-2 border border-slate-400 rounded-md">
            </div>

            <div>
                <label for="deskripsi" class="block text-left text-gray-700 font-medium mb-1">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Tuliskan deskripsi"
                    class="w-full px-4 py-2 border border-slate-400 rounded-md">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ url('/table') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
                    Kembali
                </a>
                <button type="submit" id="btnSubmit" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

<div id="modalKategori" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm">
    <div class="bg-white p-6 rounded-lg shadow-lg w-80 transform transition-all scale-100">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Tambah Kategori Baru</h3>

        <input type="text" id="newCategoryInput" placeholder="Nama kategori"
            class="w-full px-4 py-2 border border-slate-400 rounded-md mb-4 outline-none">

        <div class="flex justify-between gap-2">
            <button type="button" onclick="closeModal()"
                class="px-3 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-md text-sm">
                Batal
            </button>
            <button type="button" onclick="addNewCategory()"
                class="px-3 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-md text-sm">
                Tambah
            </button>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('modalKategori');
    const inputModal = document.getElementById('newCategoryInput');
    const selectKategori = document.getElementById('kategori');

    function openModal() {
        modal.classList.remove('hidden');
        inputModal.value = '';
        inputModal.focus();
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    function addNewCategory() {
        const newVal = inputModal.value.trim();

        if (newVal) {
            const newOption = document.createElement('option');
            newOption.text = newVal;
            newOption.value = newVal;
            newOption.selected = true;
            selectKategori.add(newOption);

            closeModal();
        } else {
            alert("Nama kategori tidak boleh kosong");
            inputModal.focus();
        }
    }

    inputModal.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault();
            addNewCategory();
        }
    });

    document.getElementById('bookmarkForm').addEventListener('submit', function() {
        const btn = document.getElementById('btnSubmit');
        btn.innerText = 'Menyimpan';
        btn.disabled = true;
        btn.classList.add('opacity-50', 'cursor-not-allowed');
        btn.classList.remove('hover:bg-gray-700');
    });
</script>
@endsection