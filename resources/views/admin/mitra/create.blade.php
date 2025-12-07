@extends('admin.layout')

@section('body')
<div class="mt-12 px-6">
  <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 border border-gray-100">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Tambah Data Mitra</h2>
    <p class="text-gray-500 mb-8">Isi formulir di bawah untuk menambahkan mitra baru.</p>

    <form action="{{ route('mitras.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf

      <!-- Logo Mitra -->
      <div>
        <label for="logo" class="block text-sm font-medium text-gray-700 mb-2">Logo Mitra</label>
        <input type="file" name="logo" id="logo"
               class="w-full border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
               required>
      </div>

      <!-- Tombol Aksi -->
      <div class="flex justify-end gap-4 pt-4 border-t border-gray-100">
        <a href="{{ route('mitras.index') }}"
           class="px-6 py-2.5 rounded-lg text-gray-700 border border-gray-300 hover:bg-gray-100 transition font-medium">
           Batal
        </a>
        <button type="submit"
                class="px-6 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow-sm transition">
          Simpan
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
