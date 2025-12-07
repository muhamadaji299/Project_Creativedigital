@extends('admin.layout')
@section('body')
<div class="p-6 bg-gray-50 min-h-screen">

  <!-- Header Section -->
  <div class="flex items-center gap-3 mb-8">
    <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center shadow-md">
      <i class='bx bxs-dashboard text-white text-xl'></i>
    </div>
    <div>
      <h2 class="text-2xl font-bold text-gray-900">Dashboard</h2>
      <p class="text-sm text-gray-600 mt-1">Ringkasan dan aktivitas terkini</p>
    </div>
  </div>

  <div class="max-w-7xl mx-auto">
    <!-- Grid Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
      <!-- Total Pesan -->
      <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600">Total Pesan</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalPesan ?? 0 }}</p>
            <div class="flex items-center mt-2">
              <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full font-semibold">
                <i class='bx bx-up-arrow-alt'></i> 12% dari bulan lalu
              </span>
            </div>
          </div>
          <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
            <i class='bx bxs-message-dots text-blue-500 text-2xl'></i>
          </div>
        </div>
      </div>

      <!-- Total Portfolio -->
      <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600">Total Portfolio</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalPortfolio ?? 0 }}</p>
            <div class="flex items-center mt-2">
              <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded-full font-semibold">
                <i class='bx bx-up-arrow-alt'></i> 5% dari bulan lalu
              </span>
            </div>
          </div>
          <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
            <i class='bx bxs-briefcase text-purple-500 text-2xl'></i>
          </div>
        </div>
      </div>

      <!-- Total Mitra -->
      <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm font-medium text-gray-600">Total Mitra</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalMitra ?? 0 }}</p>
            <div class="flex items-center mt-2">
              <span class="text-xs text-red-600 bg-red-100 px-2 py-1 rounded-full font-semibold">
                <i class='bx bx-down-arrow-alt'></i> 2% dari bulan lalu
              </span>
            </div>
          </div>
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
            <i class='bx bxs-group text-green-500 text-2xl'></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel Pesan Masuk -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <!-- Table Header -->
      <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-800">Pesan Masuk Terkini</h3>
          <a href="" class="text-sm text-blue-600 hover:text-blue-800 font-medium">Lihat Semua</a>
        </div>
      </div>
      
      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pesan</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @forelse($pesans as $pesan)
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">{{ $pesan->nama }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-700">{{ $pesan->email }}</div>
              </td>
              <td class="px-6 py-4">
                <div class="text-sm text-gray-700">{{ Str::limit($pesan->pesan, 50) }}</div>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="3" class="px-6 py-12 text-center">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <i class='bx bx-inbox text-2xl text-gray-400'></i>
                </div>
                <p class="text-gray-500 font-medium">Belum ada pesan masuk</p>
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection