  @extends('admin.layout')

  @section('body')
  <div class="p-6 bg-gray-50 min-h-screen">

    <div class="flex items-center gap-3 mb-8">
      <div>
        <h2 class="text-2xl font-bold text-gray-900">Manajemen Services Keterangan</h2>
        <p class="text-sm text-gray-600 mt-1">Kelola konten keterangan untuk halaman Services</p>
      </div>
    </div>

    <div class="max-w-4xl mx-auto">
      <div class="bg-white p-8 rounded-lg shadow-lg">
    
    

        <form action="{{ route('Store.Keterangan') }}" method="POST" enctype="multipart/form-data">
          @csrf

      
          <!-- Section: Konten Utama -->
          <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konten Utama</h3>
            
            <!-- Field Judul -->
            <div class="mb-6">
              <label for="judul1" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
              <input type="text" id="judul1" name="judul1"
                value="{{ old('judul1', $services->judul1 ?? '') }}"
                placeholder="Masukkan judul konten..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Deskripsi -->
            <div class="mb-6">
              <label for="keterangan1" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
              <textarea id="keterangan1" name="keterangan1" rows="6" placeholder="Tulis deskripsi konten di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan1', $services->keterangan1 ?? '') }}</textarea>
            </div>
          </div>

          <hr class="my-6 border-gray-200">

          <!-- Section: Konten Pesan -->
          <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konten Pesan</h3>
            
            <!-- Field Judul Pesan -->
            <div class="mb-6">
              <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">Judul Pesan</label>
              <input type="text" id="pesan" name="pesan"
                value="{{ old('pesan', $services->pesan ?? '') }}"
                placeholder="Masukkan judul pesan..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Deskripsi Pesan -->
            <div class="mb-6">
              <label for="keterangan_pesan" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Pesan</label>
              <textarea id="keterangan_pesan" name="keterangan_pesan" rows="6" placeholder="Tulis deskripsi pesan di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan_pesan', $services->keterangan_pesan ?? '') }}</textarea>
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