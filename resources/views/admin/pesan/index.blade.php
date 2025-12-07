@extends('admin.layout') {{-- sesuaikan dengan nama layout utama kamu --}}
@section('body')
<div class="p-6 bg-gray-50 min-h-screen">
  <!-- Header Section -->
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center shadow-md">
        <i class='bx bxs-message-dots text-white text-xl'></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-900">Manajemen Pesan</h2>
        <p class="text-sm text-gray-600 mt-1">Kelola pesan masuk dari pengunjung</p>
      </div>
    </div>
  </div>

  <!-- Table Card -->
  <div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Table Header -->
    <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
          <i class='bx bx-table text-blue-500'></i>
          Data Pesan Masuk
        </h3>
        
        <!-- Search -->
        <div class="relative">
          <input type="text" placeholder="Cari pesan..." 
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
              Nama
            </th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Email
            </th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Pesan
            </th>
            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @foreach($pesans as $pesan)
          <tr class="hover:bg-gray-50 transition-colors duration-200">
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="w-8 h-8 bg-blue-50 rounded-full flex items-center justify-center">
                <span class="text-sm font-medium text-blue-600">{{ $loop->iteration }}</span>
              </div>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                  <span class="text-white font-semibold text-sm">{{ strtoupper(substr($pesan->nama, 0, 1)) }}</span>
                </div>
                <div>
                  <div class="text-sm font-medium text-gray-900">
                    {{ $pesan->nama }}
                  </div>
                  <div class="text-xs text-gray-500">
                    Pengirim
                  </div>
                </div>
              </div>
            </td>
            
            <td class="px-6 py-4">
              <div class="text-sm text-gray-700">
                {{ $pesan->email }}
              </div>
            </td>
            
            <td class="px-6 py-4">
              <div class="max-w-xs">
                <p class="text-sm text-gray-700 line-clamp-2">
                  {{ Str::limit($pesan->pesan, 100) }}
                </p>
                @if(strlen($pesan->pesan) > 100)
                  <button class="text-xs text-blue-500 hover:text-blue-600 mt-1 font-medium expand-btn">
                    Baca selengkapnya...
                  </button>
                @endif
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-center">
              <form action="{{ route('pesan.destroy', $pesan->id) }}" method="POST" 
                    onsubmit="return confirm('Yakin ingin menghapus pesan ini?')" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="inline-flex items-center px-3 py-2 border border-red-300 text-sm leading-4 font-medium rounded-md text-red-700 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                  <i class='bx bx-trash mr-1'></i>
                  Hapus
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      <!-- Empty State -->
      @if(count($pesans) === 0)
      <div class="text-center py-12">
        <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class='bx bx-message-dots text-4xl text-gray-400'></i>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">Belum Ada Pesan</h3>
        <p class="text-gray-600">Pesan dari pengunjung akan muncul di sini</p>
      </div>
      @endif
    </div>
    
    <!-- Table Footer -->
    <div class="bg-gray-50 px-6 py-3 border-t border-gray-200">
      <div class="flex items-center justify-between text-sm text-gray-600">
        <span>Menampilkan {{ count($pesans) }} dari {{ count($pesans) }} pesan</span>
        <span>Data Pesan</span>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript for enhanced interactions -->
<script>
  // Search functionality
  const searchInput = document.querySelector('input[placeholder="Cari pesan..."]');
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const tableRows = document.querySelectorAll('tbody tr');
      
      tableRows.forEach(row => {
        const nama = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        const email = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
        const pesan = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
        
        if (nama.includes(searchTerm) || email.includes(searchTerm) || pesan.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  }Hey, Cortana. 

  // Message expansion functionality
  document.querySelectorAll('.expand-btn').forEach(button => {
    button.addEventListener('click', function() {
      const messageText = this.previousElementSibling;
      messageText.classList.toggle('line-clamp-2');
      this.textContent = messageText.classList.contains('line-clamp-2') ? 'Baca selengkapnya...' : 'Sembunyikan';
    });
  });
</script>
@endsection   