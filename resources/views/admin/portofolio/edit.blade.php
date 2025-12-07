@extends('admin.layout')

@section('body')
<div class="mt-12 px-6">
  <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 border border-gray-100">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Edit Data Portofolio</h2>
    <p class="text-gray-500 mb-8">Perbarui informasi portofolio di bawah ini.</p>

    <form action="{{ route('portofolios.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf
      @method('PUT')

      <!-- Nama Projek -->
      <div>
        <label for="nama_projek" class="block text-sm font-medium text-gray-700 mb-2">Nama Projek</label>
        <input type="text" name="nama_projek" id="nama_projek" 
               value="{{ old('nama_projek', $portofolio->nama_projek) }}"
               placeholder="Masukkan Nama Projek"
               class="w-full border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
               required>
      </div>

      <!-- Gambar Projek -->
      <div>
        <label for="gambar_projek" class="block text-sm font-medium text-gray-700 mb-2">Gambar Projek</label>
        
        <!-- Preview Gambar Lama -->
        @if($portofolio->gambar_projek)
        <div class="mb-3">
          <img src="{{ asset('storage/' . $portofolio->gambar_projek) }}" 
               alt="Gambar Projek" 
               class="w-32 h-32 object-cover rounded-lg border border-gray-200 shadow-sm">
        </div>
        @endif

        <input type="file" name="gambar_projek" id="gambar_projek"
               class="w-full border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none">
        <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti gambar.</p>
      </div>

      <!-- Deskripsi Singkat -->
      <div>
        <label for="deskripsi_singkat" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
        <textarea name="deskripsi_singkat" id="deskripsi_singkat" rows="5" placeholder="Masukkan Deskripsi Singkat Projek"
                  class="w-full border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                  required>{{ old('deskripsi_singkat', $portofolio->deskripsi_singkat) }}</textarea>
      </div>

      <!-- Tombol Aksi -->
      <div class="flex justify-end gap-4 pt-4 border-t border-gray-100">
        <a href="{{ route('portofolios.index') }}"
           class="px-6 py-2.5 rounded-lg text-gray-700 border border-gray-300 hover:bg-gray-100 transition font-medium">
           Batal
        </a>
        <button type="submit"
                class="px-6 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow-sm transition">
          Perbarui
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
