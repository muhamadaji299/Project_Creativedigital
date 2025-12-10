@extends('admin.layout')

@section('body')
<div class="p-6 bg-gray-50 min-h-screen">

  <div class="flex items-center gap-3 mb-8">
    <div>
      <h2 class="text-2xl font-bold text-gray-900">Manajemen Home</h2>
      <p class="text-sm text-gray-600 mt-1">Kelola konten halaman utama website</p>
    </div>
  </div>

  <div class="max-w-4xl mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-lg">
      <form action="{{ route('homes.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Section: Konten Utama (Hero) -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konten Utama (Hero)</h3>
          
          <!-- Field Judul -->
          <div class="mb-6">
            <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
            <input type="text" id="judul" name="judul"
              value="{{ old('judul', $home->judul ?? '') }}"
              placeholder="Masukkan judul konten..." required
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
          </div>

          <!-- Field Deskripsi -->
          <div class="mb-6">
            <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
            <textarea id="keterangan" name="keterangan" rows="6" placeholder="Tulis deskripsi konten di sini..." required
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan', $home->keterangan ?? '') }}</textarea>
          </div>

          <!-- Field Gambar -->
          <div class="mb-6">
            <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
     @if($home && $home->gambar)
    <img src="{{ asset('storage/' . $home->gambar) }}" class="w-40 h-40 object-cover">
@endif
            <input id="gambar" name="gambar" type="file" accept="image/*"
              class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 cursor-pointer bg-white">
            <p class="text-xs text-gray-500 mt-1">Format: PNG, JPG, GIF. Maksimal ukuran: 2MB</p>
          </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Section: Konten Tambahan -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konten Tambahan</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Judul 1 -->
            <div class="mb-6 md:mb-0">
              <label for="judul1" class="block text-sm font-medium text-gray-700 mb-2">Judul 1</label>
              <input type="text" id="judul1" name="judul1"
                value="{{ old('judul1', $home->judul1 ?? '') }}"
                placeholder="Masukkan judul konten..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Deskripsi Singkat 1 -->
            <div class="mb-6 md:mb-0">
              <label for="deskripsi_judul1" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat 1</label>
              <input type="text" id="deskripsi_judul1" name="deskripsi_judul1"
                value="{{ old('deskripsi_judul1', $home->deskripsi_judul1 ?? '') }}"
                placeholder="Masukkan deskripsi singkat..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Judul 2 -->
            <div class="mb-6 md:mb-0">
              <label for="judul2" class="block text-sm font-medium text-gray-700 mb-2">Judul 2</label>
              <input type="text" id="judul2" name="judul2"
                value="{{ old('judul2', $home->judul2 ?? '') }}"
                placeholder="Masukkan judul konten..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Deskripsi Singkat 2 -->
            <div class="mb-6 md:mb-0">
              <label for="deskripsi_judul2" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat 2</label>
              <input type="text" id="deskripsi_judul2" name="deskripsi_judul2"
                value="{{ old('deskripsi_judul2', $home->deskripsi_judul2 ?? '') }}"
                placeholder="Masukkan deskripsi singkat..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>
          </div>
        </div>
    
        <!-- Tombol Aksi -->
        <div class="flex justify-end pt-6 border-t border-gray-200">
          <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white font-medium py-2 px-6 rounded-md transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection