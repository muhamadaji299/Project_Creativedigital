@extends('admin.layout')

@section('body')
<div class="p-6 bg-gray-50 min-h-screen">

  <div class="flex items-center gap-3 mb-8">
    <div>
      <h2 class="text-2xl font-bold text-gray-900">Manajemen About</h2>
      <p class="text-sm text-gray-600 mt-1">Kelola konten halaman About website</p>
    </div>
  </div>

  <div class="max-w-4xl mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-lg">
      <form action="{{ route('Abouts.StoreAbout') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Section: Konten Utama -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konten Utama</h3>
          
          <!-- Field Judul -->
          <div class="mb-6">
            <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
            <input type="text" id="judul" name="judul"
              value="{{ old('judul', $about->judul ?? '') }}"
              placeholder="Masukkan judul konten..." required
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
          </div>

          <!-- Field Deskripsi -->
          <div class="mb-6">
            <label for="keterangan" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
            <textarea id="keterangan" name="keterangan" rows="6" placeholder="Tulis deskripsi konten di sini..." required
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan', $about->keterangan ?? '') }}</textarea>
          </div>

          <!-- Field Gambar -->
          <div class="mb-6">
            <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
            @if(isset($about->gambar))
              <img src="{{ asset($about->gambar) }}" class="w-24 h-24 object-cover rounded-lg border border-gray-200 mb-3" alt="Gambar Saat Ini">
            @endif
            <input id="gambar" name="gambar" type="file" accept="image/*"
              class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 cursor-pointer bg-white">
            <p class="text-xs text-gray-500 mt-1">Format: PNG, JPG, GIF. Maksimal ukuran: 2MB</p>
          </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Section: Visi & Misi -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Visi & Misi</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Visi -->
            <div class="mb-6 md:mb-0">
              <label for="poin1" class="block text-sm font-medium text-gray-700 mb-2">Visi</label>
              <input type="text" id="poin1" name="poin1"
                value="{{ old('poin1', $about->poin1 ?? '') }}"
                placeholder="Masukkan visi..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Misi -->
            <div class="mb-6 md:mb-0">
              <label for="poin2" class="block text-sm font-medium text-gray-700 mb-2">Misi</label>
              <textarea id="poin2" name="poin2" rows="6" placeholder="Tulis misi di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('poin2', $about->poin2 ?? '') }}</textarea>
            </div>
          </div>
        </div>

        <!-- <div class="mb-6">
          <label for="poin3" class="block text-sm font-medium text-gray-700">Pesan</label>
          <input type="text" id="poin3" name="poin3"
            value="{{ old('poin3', $about->poin3 ?? '') }}"
            placeholder="Masukkan poin3 konten..." required
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div> -->
    
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