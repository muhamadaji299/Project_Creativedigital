@extends('admin.layout')

@section('body')
<div class="p-6 bg-gradient-to-br from-gray-50 to-blue-50 dark:from-gray-900 dark:to-gray-800 min-h-screen">
  <!-- Header Section -->
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
        <i class='bx bxs-cog text-white text-xl'></i>
      </div>
      <div>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Manajemen Pelayanan</h2>
        <p class="text-sm text-gray-600 dark:text-gray-400">Kelola data layanan perusahaan</p>
      </div>
    </div>
    
    <a href="{{ route('pelayanan.create') }}" 
       class="group bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-6 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center gap-2">
      <i class='bx bx-plus-circle group-hover:rotate-90 transition-transform duration-300'></i>
      Tambah Pelayanan
    </a>
  </div>

  <!-- Table Card -->
  <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
    <!-- Table Header -->
    <div class="bg-gradient-to-r from-gray-50 to-blue-50 dark:from-gray-700 dark:to-gray-600 px-6 py-4 border-b border-gray-200 dark:border-gray-600">
      <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white flex items-center gap-2">
          <i class='bx bx-table text-orange-600 dark:text-orange-400'></i>
          Data Pelayanan
        </h3>
        
        <!-- Search -->
        <div class="relative">
          <input type="text" placeholder="Cari pelayanan..." 
                 class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-800 dark:text-white focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-200 text-sm">
          <i class='bx bx-search absolute left-3 top-2.5 text-gray-400'></i>
        </div>
      </div>
    </div>

    <!-- Responsive Table -->
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead class="bg-gray-50 dark:bg-gray-700">
          <tr>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-600">#</th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-600">Icon Pelayanan</th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-600">Judul Pelayanan</th>
            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-600">Keterangan Pelayanan</th>
            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider border-b border-gray-200 dark:border-gray-600">Aksi</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
          @foreach($services as $service)
          <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-200 group">
            <td class="px-6 py-4 whitespace-nowrap">
              <span class="text-sm font-bold text-orange-600 dark:text-orange-400">{{ $loop->iteration }}</span>
            </td>
            
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-gray-100 dark:bg-gray-700 rounded-xl flex items-center justify-center overflow-hidden shadow-inner group-hover:scale-105 transition-all duration-300">
                    @if($service->icon)           
                      <img src="{{ asset('storage/' . $service->icon) }}"  class="w-full h-full object-cover">
                    @endif  
                </div>
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm font-medium text-gray-900 dark:text-white">
                {{ $service->judul_pelayanan }}
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900 dark:text-white">
                {{ $service->keterangan_pelayanan }}
              </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="flex items-center justify-center space-x-3">
                <a href="{{ route('pelayanan.edit', $service->id) }}" 
                   class="group/edit bg-yellow-100 hover:bg-yellow-500 text-yellow-600 hover:text-white px-3 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-1">
                  <i class='bx bx-edit group-hover/edit:rotate-12 transition-transform duration-300'></i>
                  <span class="text-xs">Edit</span>
                </a>
                
                <form action="{{ route('pelayanan.destroy', $service->id) }}" method="POST" data-confirm-delete class="inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" 
                          class="group/delete bg-red-100 hover:bg-red-500 text-red-600 hover:text-white px-3 py-2 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg flex items-center gap-1">
                    <i class='bx bx-trash group-hover/delete:rotate-12 transition-transform duration-300'></i>
                    <span class="text-xs">Hapus</span>
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Empty State -->
      @if($services->isEmpty())
      <div class="text-center py-12">
        <div class="w-24 h-24 bg-gray-100 dark:bg-gray-700 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class='bx bx-cog text-4xl text-gray-400'></i>
        </div>
        <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-2">Belum Ada Data Pelayanan</h3>
        <p class="text-gray-600 dark:text-gray-400 mb-6">Tambahkan pelayanan pertama untuk mulai mengelola data</p>
        <a href="{{ route('pelayanan.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
          Tambah Pelayanan
        </a>
      </div>
      @endif
    </div>

    <!-- Table Footer -->
    <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3 border-t border-gray-200 dark:border-gray-600">
      <div class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-400">
        <span>Menampilkan {{ $services->count() }} data pelayanan</span>
        <div class="flex items-center gap-2">
          <i class='bx bx-cog text-gray-400'></i>
          <span>Data Pelayanan</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom Styles -->
<style>
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .animate-fadeInUp { animation: fadeInUp 0.5s ease-out forwards; }

  .overflow-x-auto::-webkit-scrollbar { height: 6px; }
  .overflow-x-auto::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 3px; }
  .overflow-x-auto::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
  .dark .overflow-x-auto::-webkit-scrollbar-thumb { background: #6b7280; }
</style>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Konfirmasi hapus
  const deleteForms = document.querySelectorAll('form[data-confirm-delete]');
  deleteForms.forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Data ini akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e3342f',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      });
    });
  });

  // Alert sukses (flash message)
  @if(session('success'))
  Swal.fire({
    title: 'Berhasil!',
    text: '{{ session('success') }}',
    icon: 'success',
    confirmButtonColor: '#2563eb',
  });
  @endif
});
</script>

<!-- Search Filter -->
<script>
  const searchInput = document.querySelector('input[placeholder="Cari pelayanan..."]');
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const rows = document.querySelectorAll('tbody tr');
      rows.forEach(row => {
        const title = row.querySelector('td:nth-child(3)')?.textContent.toLowerCase() || '';
        row.style.display = title.includes(searchTerm) ? '' : 'none';
      });
    });
  }
</script>
@endsection
