<!DOCTYPE html>
<html lang="en" class="transition-colors duration-300">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/output.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/boxicons/css/boxicons.min.css') }}">
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideUp {
      from { transform: translateY(100%); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
    @keyframes pulseSubtle {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.8; }
    }
    .glass-morphism {
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .dark .glass-morphism {
      background: rgba(0, 0, 0, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .nav-hover {
      position: relative;
      overflow: hidden;
    }
    .nav-hover::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
      transition: left 0.5s;
    }
    .nav-hover:hover::before {
      left: 100%;
    }
    .menu-icon {
      transition: all 0.3s ease;
    }
    .menu-item:hover .menu-icon {
      transform: scale(1.1) rotate(5deg);
    }
    .sidebar-shadow {
      box-shadow: 
        0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06),
        0 0 0 1px rgba(0, 0, 0, 0.05);
    }
    .dark .sidebar-shadow {
      box-shadow: 
        0 4px 6px -1px rgba(0, 0, 0, 0.3),
        0 2px 4px -1px rgba(0, 0, 0, 0.2),
        0 0 0 1px rgba(255, 255, 255, 0.05);
    }
  </style>
</head>
<body class="bg-gray-100  text-gray-900 flex min-h-screen transition-all duration-300">

  <!-- SIDEBAR -->
  <aside id="sidebar" class="w-64 bg-white sidebar-shadow flex flex-col justify-between fixed h-full transition-all duration-500 ease-in-out -translate-x-full lg:translate-x-0 z-50 border-r border-gray-200">
    
    <!-- Close Button -->
    <div class="flex justify-end p-2 lg:hidden">
      <button onclick="toggleSidebar()" class="text-blue-500 hover:text-blue-600 text-2xl font-bold p-2 rounded-full hover:bg-blue-50 transition-all duration-200 transform hover:scale-110">
        &times;
      </button>
    </div>
    
    <a href="/admin" class="flex items-center gap-2 px-3 py-4 text-blue-500 text-xl font-bold group hover:bg-blue-50 transition-all duration-300 rounded-lg mx-2 mb-2">
        <i class='bx bxs-buildings text-blue-500 text-2xl group-hover:scale-110 transition-transform duration-300'></i>
        <span class="text-black">Dashboard</span>
        <span class="text-blue-500 bg-blue-100 px-2 py-1 rounded-full text-sm font-bold">CD</span>
      </a>
    
    <!-- Logo and Navigation -->
    <div class="flex-1 overflow-y-auto">
      <!-- Logo Section -->
      
      
      <!-- Navigation Menu -->
      <ul class="mt-6 space-y-1 px-3 ">
        <li class="rounded-md">
          <a href="/admin" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('admin') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-dashboard text-blue-500 menu-icon {{ request()->is('admin') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Dashboard</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li>
        
        <li>
          <a href="/admin/homes" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('/admin/homes*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-home text-blue-500 menu-icon {{ request()->is('/admin/homes*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Home</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li>
        
        <li>
          <a href="/admin/abouts" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('abouts*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-info-circle text-blue-500 menu-icon {{ request()->is('abouts*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">About</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li>

        <li class="relative">
          <button onclick="toggleServices()" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 w-full {{ request()->is('services*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-message-dots text-blue-500 menu-icon {{ request()->is('services*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Services</span>
            <i id="servicesArrow" class='bx bx-chevron-down ml-auto transition-transform duration-300'></i>
          </button>
          <div id="servicesDropdown" class="hidden pl-8 mt-2 space-y-1">
            <!-- <a href="{{ route('services.keterangan')}}" class="menu-item nav-hover flex items-center gap-3 px-6 py-2 rounded-lg transition-all duration-300 {{ request()->is('services/keterangan*') ? 'bg-blue-700 text-white' : 'text-gray-700 hover:bg-blue-50' }} group">
              <i class='bx bxs-info-circle text-blue-500 menu-icon {{ request()->is('services/keterangan*') ? 'text-white' : '' }}'></i>
              <span class="font-medium">Keterangan</span>
            </a> -->
            <a href="{{ route('pelayanan.index')}}" class="menu-item nav-hover flex items-center gap-3 px-6 py-2 rounded-lg transition-all duration-300 {{ request()->is('services/pelayanan*') ? 'bg-blue-700 text-white' : 'text-gray-700 hover:bg-blue-50' }} group">
              <i class='bx bxs-cog text-blue-500 menu-icon {{ request()->is('services/pelayanan*') ? 'text-white' : '' }}'></i>
              <span class="font-medium">Pelayanan</span>
            </a>
          </div>
        </li>

        <li>
          <a href="/portofolios" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('portofolios*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-briefcase text-blue-500 menu-icon {{ request()->is('portofolios*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Portofolio</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li>
        
        <!-- <li>
          <a href="/mitras" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('mitras*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-group text-blue-500 menu-icon {{ request()->is('mitras*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Mitra</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li> -->
        
        <li>
          <a href="/pesans" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('pesans*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-message-dots text-blue-500 menu-icon {{ request()->is('pesans*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Pesan</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li>

          <li>
          <a href="{{ route('configurasi.index')}}" class="menu-item nav-hover flex items-center gap-3 px-6 py-3 rounded-lg transition-all duration-300 {{ request()->is('configurasi.index*') ? 'bg-blue-700 text-white shadow-lg shadow-blue-500/25' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }} group">
            <i class='bx bxs-cog text-blue-500 menu-icon {{ request()->is('configurasi.index*') ? 'text-white' : '' }}'></i> 
            <span class="font-medium">Configurasi</span>
            <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
          </a>
        </li>
          
      </ul>
    </div>
    
    <!-- Logout Section -->
    <div class="border-t border-gray-200 pt-4">
      <ul class="mb-6 space-y-2 px-6">
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-hover flex items-center gap-3 px-6 py-3 hover:bg-red-50 rounded-lg text-red-500 hover:text-red-600 w-full text-left transition-all duration-300 group">
              <i class='bx bxs-log-out-circle menu-icon group-hover:scale-110'></i> 
              <span class="font-medium">Logout</span>
              <i class='bx bx-chevron-right ml-auto opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300'></i>
            </button>
          </form>
        </li>
      </ul>
    </div>
  </aside>

  <!-- CONTENT -->
  <section class="flex-1 flex flex-col ml-0 lg:ml-64 h-screen overflow-y-auto">
    <!-- NAVBAR -->
    <nav class="flex justify-between items-center bg-white/80 backdrop-blur-md p-4 border-b border-gray-200 sticky top-0 z-10 shadow-sm">
      <div class="flex items-center gap-3">
        <button onclick="toggleSidebar()" class="bx bx-menu text-blue-500 text-2xl cursor-pointer lg:hidden p-2 rounded-lg hover:bg-blue-50 transition-all duration-200 hover:scale-110"></button>
        <div class="flex flex-col">
          <span class="text-gray-700 font-semibold">Creative Digital</span>
          <span class="text-xs text-gray-500">Management System</span>
        </div>
      </div>
      
      <div class="flex items-center gap-4">
        <div class="flex items-center gap-2 p-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition-all duration-200 cursor-pointer">
          <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
            <i class='bx bxs-user text-white text-sm'></i>
          </div>
          <div class="hidden sm:block">
            <p class="text-sm font-medium text-gray-800">Admin</p>
          </div>
        
        </div>
      </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="flex-1 p-6 bg-gradient-to-br from-gray-50 to-blue-50 min-h-full">
      @yield('body')
    </div>
  </section>

  <!-- Mobile Overlay -->
  <div id="mobileOverlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 hidden transition-all duration-300" onclick="toggleSidebar()"></div>

<script>
        function toggleServices() {
          const dropdown = document.getElementById('servicesDropdown');
          const arrow = document.getElementById('servicesArrow');
          dropdown.classList.toggle('hidden');
          arrow.classList.toggle('rotate-180');
        }
      
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('mobileOverlay');
    
    sidebar.classList.toggle('-translate-x-full');
    
    if (window.innerWidth < 1024) {
      overlay.classList.toggle('hidden');
    }
    
    // Add bounce animation
    if (!sidebar.classList.contains('-translate-x-full')) {
      sidebar.style.animation = 'slideUp 0.3s ease-out';
      setTimeout(() => { sidebar.style.animation = ''; }, 300);
    }
  }

  function toggleDropdown() {
    document.getElementById('dropdownMenu').classList.toggle('hidden');
    document.getElementById('arrowIcon').classList.toggle('rotate-180');
  }

  function toggleDarkMode() {
    document.documentElement.classList.toggle('dark');
    
    // Save preference
    const isDark = document.documentElement.classList.contains('dark');
    localStorage.setItem('darkMode', isDark);
    
    // Add subtle animation to body
    document.body.style.animation = 'fadeIn 0.3s ease-in-out';
    setTimeout(() => { document.body.style.animation = ''; }, 300);
  }

  // Initialize dark mode from localStorage
  if (localStorage.getItem('darkMode') === 'true') {
    document.documentElement.classList.add('dark');
    document.querySelector('input[type="checkbox"]').checked = true;
  }

  // Close sidebar when clicking outside on mobile
  document.addEventListener('click', function(e) {
    if (window.innerWidth < 1024) {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('mobileOverlay');
      
      if (!sidebar.contains(e.target) && !e.target.matches('.bx-menu')) {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
      }
    }
  });

  // Add stagger animation to menu items
  document.addEventListener('DOMContentLoaded', function() {
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach((item, index) => {
      item.style.opacity = '0';
      item.style.animation = `fadeIn 0.5s ease-in-out ${index * 0.1}s forwards`;
    });
  });

  // Handle window resize
  window.addEventListener('resize', function() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('mobileOverlay');
    
    if (window.innerWidth >= 1024) {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.add('hidden');
    } else {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    }
  });
</script>
</body>
</html>