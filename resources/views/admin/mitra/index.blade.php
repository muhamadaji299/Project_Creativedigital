@extends('admin.layout') {{-- sesuaikan dengan nama layout utama kamu --}}
@section('body')
<div class="p-6 bg-gray-50 min-h-screen">
  <!-- Header Section -->
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center shadow-md">
        <i class='bx bxs-group text-white text-xl'></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-900">Manajemen Mitra</h2>
        <p class="text-sm text-gray-600 mt-1">Kelola logo mitra perusahaan</p>
      </div>
    </div>
    
    <a href="{{ route('mitras.create') }}" 
       class="bg-gray-800 hover:bg-gray-900 text-white px-6 py-3 rounded-md font-medium shadow-sm hover:shadow-md transition-all duration-300 flex items-center gap-2">
      <i class='bx bx-plus-circle'></i>
      Tambah Data
    </a>
  </div>

  <!-- Table Card -->
  <div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Table Header -->
    <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
          <i class='bx bx-table text-blue-500'></i>
          Data Logo Mitra
        </h3>
        
        <!-- Search -->
        <div class="relative">
          <input type="text" placeholder="Cari mitra..." 
                 class="pl-10 pr-4 py-2 border border-gray-300 rounded-md bg-white text-gray-800 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-sm w-full sm:w-auto">
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
              Logo Mitra
            </th>
            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach($mitras as $mitra)
          <tr class="hover:bg-gray-50 transition-colors duration-200">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="w-8 h-8 bg-blue-50 rounded-full flex items-center justify-center">
                <span class="text-sm font-medium text-blue-600">{{ $loop->iteration }}</span>
              </div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center p-2 mr-4 border border-gray-200">
                  <img src="{{ asset('storage/'.$mitra->logo) }}" 
                       class="max-w-full max-h-full object-contain" 
                       alt="Logo Mitra">
                </div>
                <div>
                  <div class="text-sm font-medium text-gray-900">
                    Mitra {{ $loop->iteration }}
                  </div>
                  <div class="text-xs text-gray-500 mt-1">
                    Logo Partner
                  </div>
                </div>
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="flex items-center justify-center space-x-3">
                <a href="{{ route('mitras.edit', $mitra->id) }}" 
                   class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                  <i class='bx bx-edit mr-1'></i>
                  Edit
                </a>
                
                <form action="{{ route('mitras.destroy', $mitra->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin ingin menghapus mitra ini?')" class="inline">
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
      @if(count($mitras) === 0)
      <div class="text-center py-12">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class='bx bx-buildings text-4xl text-gray-400'></i>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Mitra</h3>
        <p class="text-gray-600 mb-6">Tambahkan logo mitra pertama untuk mulai mengelola data</p>
        <a href="{{ route('mitras.create') }}" 
           class="bg-gray-800 hover:bg-gray-900 text-white px-6 py-3 rounded-md font-medium transition-all duration-300">
          Tambah Mitra
        </a>
      </div>
      @endif
    </div>
    
    <!-- Table Footer -->
    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
      <div class="flex items-center justify-between text-sm text-gray-600">
        <span>Menampilkan {{ count($mitras) }} dari {{ count($mitras) }} mitra</span>
        <span>Data Mitra</span>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript for enhanced interactions -->
<script>
  // Search functionality
  const searchInput = document.querySelector('input[placeholder="Cari mitra..."]');
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const tableRows = document.querySelectorAll('tbody tr');
      
      tableRows.forEach((row, index) => {
        const mitraName = `mitra ${index + 1}`;
        if (mitraName.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  }
</script>
@endsection