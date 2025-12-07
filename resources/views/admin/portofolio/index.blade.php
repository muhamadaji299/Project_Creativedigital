@extends('admin.layout') {{-- sesuaikan dengan nama layout utama kamu --}}
@section('body')
<div class="p-6 bg-gray-50 min-h-screen">
  <!-- Header Section -->
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center shadow-md">
        <i class='bx bxs-briefcase text-white text-xl'></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-900">Manajemen Portfolio</h2>
        <p class="text-sm text-gray-600 mt-1">Kelola data portfolio perusahaan</p>
      </div>
    </div>
    
    <a href="{{ route('portofolios.create') }}" 
       class="bg-gray-800 hover:bg-gray-900 text-white px-6 py-3 rounded-md font-medium shadow-sm hover:shadow-md transition-all duration-300 flex items-center gap-2">
      <i class='bx bx-plus-circle'></i>
      Tambah Data
    </a>
  </div>

  <!-- Alert Section -->
  <div class="max-w-7xl mx-auto mb-6">
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

  <!-- Table Card -->
  <div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Table Header -->
    <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
          <i class='bx bx-table text-gray-600'></i>
          Data Portfolio
        </h3>
        
        <!-- Search -->
        <div class="relative">
          <input type="text" placeholder="Cari portfolio..." 
                 class="pl-10 pr-4 py-2 border border-gray-300 rounded-md bg-white text-gray-800 focus:ring-2 focus:ring-gray-500 focus:border-transparent transition-all duration-200 text-sm w-full sm:w-auto">
          <i class='bx bx-search absolute left-3 top-2.5 text-gray-400'></i>
        </div>
      </div>
    </div>

    <!-- Responsive Table -->
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50 border-b border-gray-200">
          <tr>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
              #
            </th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Gambar Project
            </th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Nama Project
            </th>
             <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Deskripsi Project
            </th>
            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach($portofolios as $portofolio)
          <tr class="hover:bg-gray-50 transition-colors duration-200">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                <span class="text-sm font-medium text-gray-600">{{ $loop->iteration }}</span>
              </div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
              <img src="{{ asset('storage/'.$portofolio->gambar_projek) }}" 
                   class="h-16 w-16 object-cover rounded-md border border-gray-200" 
                   alt="Portfolio Image">
            </td>
            
            <td class="px-6 py-4">
              <div class="text-sm font-medium text-gray-900">
                {{ $portofolio->nama_projek }}
              </div>
              <div class="text-xs text-gray-500 mt-1">
                Portfolio Project
              </div>
            </td>

            <td class="px-6 py-4">
              <div class="text-sm text-gray-700">
                {{ Str::limit($portofolio->deskripsi_singkat, 50) }}
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="flex items-center justify-center space-x-3">
                <a href="{{ route('portofolios.edit', $portofolio->id) }}" 
                   class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                  <i class='bx bx-edit mr-1'></i>
                  Edit
                </a>
                
                <form action="{{ route('portofolios.destroy', $portofolio->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin ingin menghapus portfolio ini?')" class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" 
                          class="inline-flex items-center px-3 py-2 border border-red-300 text-sm leading-4 font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <i class='bx bx-trash mr-1'></i>
                    Hapus
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      <!-- Empty State -->
      @if(count($portofolios) === 0)
      <div class="text-center py-12">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class='bx bx-folder-open text-4xl text-gray-400'></i>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Portfolio</h3>
        <p class="text-gray-600 mb-6">Tambahkan portfolio pertama untuk mulai mengelola data</p>
        <a href="{{ route('portofolios.create') }}" 
           class="bg-gray-800 hover:bg-gray-900 text-white px-6 py-3 rounded-md font-medium transition-all duration-300">
          Tambah Portfolio
        </a>
      </div>
      @endif
    </div>
    
    <!-- Table Footer -->
    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
      <div class="flex items-center justify-between text-sm text-gray-600">
        <span>Menampilkan {{ count($portofolios) }} dari {{ count($portofolios) }} data</span>
        <span>Data Portfolio</span>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript for enhanced interactions -->
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

  // Search functionality
  const searchInput = document.querySelector('input[placeholder="Cari portfolio..."]');
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const tableRows = document.querySelectorAll('tbody tr');
      
      tableRows.forEach(row => {
        const projectName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        if (projectName.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  }
</script>
@endsection