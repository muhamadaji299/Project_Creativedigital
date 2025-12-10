<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Creative Digital | Solusi Website & Aplikasi Profesional</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .service-icon {
      transition: all 0.3s ease;
    }

    .service-card:hover .service-icon {
      transform: translateY(-10px);
    }

    .gradient-blue {
      background: linear-gradient(135deg, #3B82F6, #2563EB);
    }
  </style>
</head>

<body class="bg-white text-gray-800">

  <!-- Navbar -->
  <header class="bg-white sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <!-- Logo + Teks -->
      <h1 class="flex items-center space-x-2 text-xl font-bold text-blue-500">
        @foreach($configuration as $config)
        @if(isset($config->icon_images))
        <img src="{{ asset('storage/' . $config->icon_images) }}"
          alt="Tim Kami"
          class="h-12 w-12 object-contain">
        @endif

        <span>{{ $config->nama_website }}</span>
        @endforeach

      </h1>

      <!-- Nav Links Desktop -->
      <nav class="hidden lg:flex items-center space-x-6">
        <a href="{{ route('home.index')}}" class="text-gray-600 font-semibold hover:text-blue-600">Home</a>

        <!-- Services Dropdown Desktop -->


        <a href="{{ route('about.index')}}" class="text-gray-600 font-semibold hover:text-blue-600">About</a>
        <a href="{{ route('services.index')}}" class="text-gray-600 font-semibold hover:text-blue-600">Services</a>




        <a href="{{ route('project .index')}}" class=" text-gray-600 font-semibold hover:text-blue-600">Portfolio</a>
        <a href="{{ route('contact.index')}}" class="text-gray-600 font-semibold hover:text-blue-600">Contact</a>
      </nav>

      <!-- Social + Hamburger -->
      <div class="flex items-center space-x-4">
        <div class="hidden lg:flex space-x-4">
          <a href="{{ route('contact.index')}}" class="bg-transparent border-2 border-blue-500 text-blue-500 px-3 py-2 rounded-full font-semibold hover:bg-blue-500 hover:text-white    ">
            <i class="fas fa-phone mr-2"></i> Hubungi Kami
          </a>
        </div>

        <!-- Hamburger -->
        <button id="menu-btn" class="lg:hidden text-2xl text-gray-700">☰</button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="hidden lg:hidden bg-white shadow-md">
      <ul class="flex flex-col space-y-2 px-6 py-4">
        <li><a href="{{ route('home.index')}}" class="block py-2 hover:text-blue-600">Home</a></li>

        <!-- Mobile Services Dropdown -->
        <li><a href="{{ route('about.index')}}" class="block py-2 hover:text-blue-600">About</a></li>
        <li><a href="{{ route('services.index')}}" class="block py-2 hover:text-blue-600">Services</a></li>

        <li><a href="{{ route('project .index')}}" class="block py-2 hover:text-blue-600">Portfolio</a></li>
        <li><a href="{{ route('contact.index')}}" class="block py-2 hover:text-blue-600">Contact</a></li>
      </ul>

      <!-- Social Mobile -->
      <div class="flex justify-center space-x-4 pb-4">
        <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </header>
  <!-- Hero Section -->

  @yield('content')

  <!-- Footer -->
  <footer class="bg-white text-gray-600 pt-12 pb-6">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">

      <!-- Brand -->
      <div>
        @foreach($configuration as $config)
        <h4 class="text-2xl font-bold mb-4">{{ $config->nama_website}}</h4>
        <p class="text-sm leading-relaxed">
          {{ $config->overview }}
        </p>
        @endforeach
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#home" class="hover:text-gray-200 transition">Home</a></li>
          <li><a href="#services" class="hover:text-gray-200 transition">Services</a></li>
          <li><a href="#about" class="hover:text-gray-200 transition">About</a></li>
          <li><a href="#portfolio" class="hover:text-gray-200 transition">Portfolio</a></li>
          <li><a href="#contact" class="hover:text-gray-200 transition">Contact</a></li>
        </ul>
      </div>

      <!-- Contact & Social -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
        <p class="text-sm mb-3"><i class="fas fa-map-marker-alt mr-2"></i> Bogor City, Indonesia</p>
        <p class="text-sm mb-3"><i class="fas fa-envelope mr-2"></i> creative.digital@gmail.com</p>
        <p class="text-sm mb-6"><i class="fas fa-phone mr-2"></i> +62 813-7778-3334</p>

        <div class="flex space-x-4">
          <a href="#" class="w-10 h-10 flex items-center justify-center border border-white rounded-full hover:bg-white hover:text-blue-600 transition">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center border border-white rounded-full hover:bg-white hover:text-blue-600 transition">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center border border-white rounded-full hover:bg-white hover:text-blue-600 transition">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-sm mt-10 border-t border-blue-400 pt-4">
      © 2025 Creative Digital. All rights reserved.
    </div>
  </footer>

  <div class="fixed bottom-5 right-5 z-50 flex items-center space-x-2 bg-blue-500 px-3 py-2 rounded-full shadow-lg">
    <a href="https://wa.me/{{ optional($configuration->first())->judul_services }}" target="_blank" class="flex items-center space-x-2" aria-label="Chat WhatsApp">
      <div class="bg-white rounded-full p-1 flex items-center justify-center">
        <img src="https://img.icons8.com/ios-filled/50/3B82F6/whatsapp--v1.png" alt="WhatsApp" class="w-6 h-6 hover:scale-110 transition duration-300">
      </div>
      <span class="text-white text-sm font-sans">Butuh Bantuan?</span>
    </a>
  </div>
  </div>
</body>

@yield('scripts')

<script>
  // Toggle Mobile Menu
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");
  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });

  // mobile services dropdown
  function toggleMobileDropdown() {
    const dropdown = document.getElementById('mobile-services');
    dropdown.classList.toggle('hidden');
  }
</script>

</html>