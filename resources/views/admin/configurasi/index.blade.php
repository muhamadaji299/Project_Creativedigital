@extends('admin.layout')

@section('body')
<div class="p-6 bg-gray-50 min-h-screen">

  <div class="flex items-center gap-3 mb-8">
    <div>
      <h2 class="text-2xl font-bold text-gray-900">Manajemen Konfigurasi</h2>
      <p class="text-sm text-gray-600 mt-1">Kelola konten dan pengaturan halaman utama website</p>
    </div>
  </div>

  <!-- Alert Section -->
  <div class="max-w-4xl mx-auto mb-6">
    @if(session('success'))
      <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md shadow-sm mb-4" id="success-alert">
        <div class="flex items-center justify-between">
          <div class="flex">
            <div class="py-1">
              <svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/>
              </svg>
            </div>
            <div>
              <p class="font-bold">Berhasil!</p>
              <p class="text-sm">{{ session('success') }}</p>
            </div>
          </div>
          <button onclick="closeAlert('success-alert')" class="text-green-500 hover:text-green-700">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          </button>
        </div>
      </div>
    @endif

    @if(session('error'))
      <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-md shadow-sm mb-4" id="error-alert">
        <div class="flex items-center justify-between">
          <div class="flex">
            <div class="py-1">
              <svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"/>
              </svg>
            </div>
            <div>
              <p class="font-bold">Error!</p>
              <p class="text-sm">{{ session('error') }}</p>
            </div>
          </div>
          <button onclick="closeAlert('error-alert')" class="text-red-500 hover:text-red-700">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          </button>
        </div>
      </div>
    @endif

    @if(session('info'))
      <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded-md shadow-sm mb-4" id="info-alert">
        <div class="flex items-center justify-between">
          <div class="flex">
            <div class="py-1">
              <svg class="fill-current h-6 w-6 text-blue-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
              </svg>
            </div>
            <div>
              <p class="font-bold">Informasi</p>
              <p class="text-sm">{{ session('info') }}</p>
            </div>
          </div>
          <button onclick="closeAlert('info-alert')" class="text-blue-500 hover:text-blue-700">
            <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Close</title>
              <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
            </svg>
          </button>
        </div>
      </div>
    @endif
  </div>

  <div class="max-w-4xl mx-auto">
    <div class="bg-white p-8 rounded-lg shadow-lg">
      <form action="{{ route('configurasi.storeconfigurasi') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Section: Pengaturan Umum -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Pengaturan Umum</h3>
          
          <!-- Field Icon Image -->
          <div class="mb-6">
            <label for="icon_images" class="block text-sm font-medium text-gray-700 mb-2">Gambar Ikon</label>
            @if(isset($configuration->icon_images))
              <img src="{{ asset('uploads/'.$configuration->icon_images) }}" class="w-24 h-24 object-cover rounded-lg border border-gray-200 mb-3" alt="Gambar Saat Ini">
            @endif
            <input id="icon_images" name="icon_images" type="file" accept="image/*"
              class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200 cursor-pointer bg-white">
            <p class="text-xs text-gray-500 mt-1">Format: PNG, JPG, GIF. Maksimal ukuran: 2MB</p>
          </div>

          <!-- Field Nama Website -->
          <div class="mb-6">
            <label for="nama_website" class="block text-sm font-medium text-gray-700 mb-2">Nama Website</label>
            <input type="text" id="nama_website" name="nama_website"
              value="{{ old('nama_website', $configuration->nama_website ?? '') }}"
              placeholder="Masukkan nama website..." required
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
          </div>

          <!-- Field Overview -->
          <div class="mb-6">
            <label for="overview" class="block text-sm font-medium text-gray-700 mb-2">Overview</label>
            <textarea id="overview" name="overview" rows="4" placeholder="Tulis overview website di sini..." required
              class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('overview', $configuration->overview ?? '') }}</textarea>
          </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Section: Konfigurasi Halaman About -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Embed Alamat</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Judul About -->
            <div class="mb-6 md:mb-0">
              <label for="judul_about" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
              <input type="text" id="judul_about" name="judul_about"
                value="{{ old('judul_about', $configuration->judul_about ?? '') }}"
                placeholder="Masukkan judul about..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Keterangan About -->
            <div class="mb-6 md:mb-0">
              <label for="keterangan_about" class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
              <textarea id="keterangan_about" name="keterangan_about" rows="4" placeholder="Tulis keterangan about di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan_about', $configuration->keterangan_about ?? '') }}</textarea>
            </div>
          </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Section: Konfigurasi Halaman Services -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Email</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Judul Services -->
            <div class="mb-6 md:mb-0">
              <label for="judul_services" class="block text-sm font-medium text-gray-700 mb-2">Nomor Whatsapp</label>
              <input type="text" id="judul_services" name="judul_services"
                value="{{ old('judul_services', $configuration->judul_services ?? '') }}"
                placeholder="Masukkan judul services..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Keterangan Services -->
            <div class="mb-6 md:mb-0">
              <label for="keterangan_services" class="block text-sm font-medium text-gray-700 mb-2">Keterangan Services</label>
              <textarea id="keterangan_services" name="keterangan_services" rows="4" placeholder="Tulis keterangan services di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan_services', $configuration->keterangan_services ?? '') }}</textarea>
            </div>
          </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Section: Konfigurasi Halaman Portfolio -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konfigurasi Halaman Portfolio</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Judul Portfolio -->
            <div class="mb-6 md:mb-0">
              <label for="judul_portofolio" class="block text-sm font-medium text-gray-700 mb-2">Judul Portfolio</label>
              <input type="text" id="judul_portofolio" name="judul_portofolio"
                value="{{ old('judul_portofolio', $configuration->judul_portofolio ?? '') }}"
                placeholder="Masukkan judul portfolio..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Keterangan Portfolio -->
            <div class="mb-6 md:mb-0">
              <label for="keterangan_portofolio" class="block text-sm font-medium text-gray-700 mb-2">Keterangan Portfolio</label>
              <textarea id="keterangan_portofolio" name="keterangan_portofolio" rows="4" placeholder="Tulis keterangan portfolio di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan_portofolio', $configuration->keterangan_portofolio ?? '') }}</textarea>
            </div>
          </div>
        </div>

        <hr class="my-6 border-gray-200">

        <!-- Section: Konfigurasi Halaman Contact -->
        <div class="mb-8">
          <h3 class="text-lg font-semibold text-gray-800 mb-4 border-b border-gray-200 pb-2">Konfigurasi Halaman Contact</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Field Judul Contact -->
            <div class="mb-6 md:mb-0">
              <label for="judul_contact" class="block text-sm font-medium text-gray-700 mb-2">Judul Contact</label>
              <input type="text" id="judul_contact" name="judul_contact"
                value="{{ old('judul_contact', $configuration->judul_contact ?? '') }}"
                placeholder="Masukkan judul contact..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">
            </div>

            <!-- Field Keterangan Contact -->
            <div class="mb-6 md:mb-0">
              <label for="keterangan_contact" class="block text-sm font-medium text-gray-700 mb-2">Keterangan Contact</label>
              <textarea id="keterangan_contact" name="keterangan_contact" rows="4" placeholder="Tulis keterangan contact di sini..." required
                class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:outline-none focus:ring-gray-500 focus:border-gray-500">{{ old('keterangan_contact', $configuration->keterangan_contact ?? '') }}</textarea>
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

<script>
  // Function to close alerts
  function closeAlert(alertId) {
    const alertElement = document.getElementById(alertId);
    if (alertElement) {
      alertElement.style.transition = 'opacity 0.3s';
      alertElement.style.opacity = '0';
      setTimeout(() => {
        alertElement.style.display = 'none';
      }, 300);
    }
  }

  // Auto-dismiss alerts after 5 seconds
  document.addEventListener('DOMContentLoaded', function() {
    const alerts = ['success-alert', 'error-alert', 'info-alert'];
    
    alerts.forEach(alertId => {
      const alertElement = document.getElementById(alertId);
      if (alertElement) {
        setTimeout(() => {
          closeAlert(alertId);
        }, 5000);
      }
    });
  });
</script>

@endsection 