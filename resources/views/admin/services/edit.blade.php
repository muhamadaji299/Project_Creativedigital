@extends('admin.layout')

@section('body')
<div class="mt-12 px-6">
  <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-8 border border-gray-100">
    <h2 class="text-3xl font-bold text-gray-800 mb-2">Edit Pelayanan</h2>
    <p class="text-gray-500 mb-8">Perbarui data pelayanan yang sudah ada di bawah ini.</p>

    <form action="{{ route('pelayanan.update', $service->id) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Upload Icon -->
      <div>
        <label for="icon" class="block text-sm font-medium text-gray-700 mb-2">Gambar Icon</label>
        <div class="flex items-center gap-4">
          @if($service->icon)
            <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon saat ini" class="h-16 w-16 object-cover rounded-md border border-gray-200">
          @endif
          <input type="file" name="icon" id="icon"
                 class="flex-1 border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none">
        </div>
        <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengganti icon.</p>
      </div>

      <!-- Judul Pelayanan -->
      <div>
        <label for="judul_pelayanan" class="block text-sm font-medium text-gray-700 mb-2">Judul Pelayanan</label>
        <input type="text" name="judul_pelayanan" id="judul_pelayanan"
               value="{{ old('judul_pelayanan', $service->judul_pelayanan) }}"
               placeholder="Masukkan judul pelayanan"
               class="w-full border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
               required>
      </div>

      <!-- Keterangan Pelayanan -->
      <div>
        <label for="keterangan_pelayanan" class="block text-sm font-medium text-gray-700 mb-2">Keterangan Pelayanan</label>
        <textarea name="keterangan_pelayanan" id="keterangan_pelayanan" rows="5" placeholder="Masukkan keterangan pelayanan"
                  class="w-full border border-gray-300 px-4 py-2 rounded-lg bg-gray-50 text-gray-900 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none"
                  required>{{ old('keterangan_pelayanan', $service->keterangan_pelayanan) }}</textarea>
      </div>

      <!-- Tombol Aksi -->
      <div class="flex justify-end gap-4 pt-4 border-t border-gray-100">
        <a href="{{ route('pelayanan.index') }}"
           class="px-6 py-2.5 rounded-lg text-gray-700 border border-gray-300 hover:bg-gray-100 transition font-medium">
           Batal
        </a>
        <button type="submit"
                class="px-6 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow-sm transition">
          Update
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
