<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Creative Digital - Company Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
     <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
     <!-- AOS Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    /* Cursor */
    .cursor {
      width: 20px;
      height: 20px;
      border: 2px solid #0d6efd;
      border-radius: 50%;
      position: fixed;
      pointer-events: none;
      transform: translate(-50%, -50%);
      transition: transform 0.1s ease;
      z-index: 9999;
    }

    /* Button Border Reveal (untuk button umum) */
    .btn-border-reveal {
      background-color: transparent;
      color: #3B82F6;
      border: 1px solid #3B82F6;
      position: relative;
      border-radius: 0.5rem;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
      overflow: hidden;
      transition: color 0.3s ease;
      z-index: 1;
    }

    .btn-border-reveal::after {
      content: "";
      position: absolute;
      width: 0;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #3B82F6;
      transition: width 0.3s ease;
      z-index: -1;
    }

    .btn-border-reveal:hover::after {
      width: 100%;
    }

    .btn-border-reveal:hover {
      color: white;
    }

     /* Border Reveal khusus ikon sosial media */
     .btn-icon-reveal {
      width: 42px;
      height: 42px;
      border: 1px solid #3B82F6;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #3B82F6;
      position: relative;
      overflow: hidden;
      transition: color 0.3s ease;
      z-index: 1;
    }

    .btn-icon-reveal::after {
      content: "";
      position: absolute;
      width: 0;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #3B82F6;
      transition: width 0.3s ease;
      z-index: -1;
    }

    .btn-icon-reveal:hover::after {
      width: 100%;
    }

    .btn-icon-reveal:hover {
      color: white;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">
    

  <!-- Navbar -->
<header class="bg-white sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-between py-4 px-6">
    <!-- Logo + Teks -->
    <h1 class="flex items-center space-x-2 text-xl font-bold text-blue-500">
      <img src="{{ asset('img/logoc.png')}}" alt="Logo" class="h-12 w-12 object-contain">
      <span>Creative Digital</span>
    </h1>

    <!-- Nav Links Desktop -->
    <nav class="hidden lg:flex items-center space-x-6">
      <a href="/" class="hover:text-blue-600">Home</a>

      <!-- Services Dropdown Desktop -->
       <a href="/tentangkami" class="hover:text-blue-600">TentangKami</a>
      <a href="/webdesain" class="hover:text-blue-600">WebDesain</a>
      <a href="/webdevelopment" class="hover:text-blue-600">WebDevelopment</a>
      <a href="/digitalmarketing" class="hover:text-blue-600">DigitalMarketing</a>
    </nav>

    <!-- Social + Hamburger -->
    <div class="flex items-center space-x-4">
      <div class="hidden lg:flex space-x-4">
        <a href="#" class="btn-icon-reveal"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="btn-icon-reveal"><i class="fab fa-instagram"></i></a>
        <a href="#" class="btn-icon-reveal"><i class="fab fa-youtube"></i></a>
      </div>

      <!-- Hamburger -->
      <button id="menu-btn" class="lg:hidden text-2xl text-gray-700">☰</button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="menu" class="hidden lg:hidden bg-white shadow-md">
    <ul class="flex flex-col space-y-2 px-6 py-4">
      <li><a href="/" class="block py-2 hover:text-blue-600">Home</a></li>
      <li><a href="/tentangkami" class="block py-2 hover:text-blue-600">TentangKami</a></li>
      <li><a href="/webdesain" class="block py-2 hover:text-blue-600">WebDesain</a></li>
      <li><a href="/webdevelopment" class="block py-2 hover:text-blue-600">WebDevelopment</a></li>
      <li><a href="/digitalmarketing" class="block py-2 hover:text-blue-600">DigitalMarketing</a></li>
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


<section id="web-design" class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Layanan Web Desain</h2>

    <!-- Pendahuluan -->
    <p class="text-gray-700 mb-6 leading-relaxed">
      Creative Digital menawarkan layanan web desain kreatif yang mampu menghidupkan identitas brand Anda secara visual. 
      Desain website yang menarik dan responsif akan membuat pengunjung betah, meningkatkan kredibilitas, dan memaksimalkan pengalaman pengguna.
    </p>

    <!-- Proses Kerja -->
    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Proses Kerja Kami</h3>
    <ol class="list-decimal list-inside text-gray-700 space-y-2 mb-6">
      <li><strong>Analisis Brand & Kebutuhan:</strong> Memahami brand, target audience, dan tujuan website.</li>
      <li><strong>Wireframe & Mockup:</strong> Membuat layout awal agar struktur website jelas dan mudah digunakan.</li>
      <li><strong>Desain Visual:</strong> Menentukan palet warna, tipografi, ikon, dan elemen grafis sesuai brand.</li>
      <li><strong>Revisi & Finalisasi:</strong> Kolaborasi dengan klien untuk memastikan desain sesuai harapan.</li>
      <li><strong>Integrasi ke Web Development:</strong> Desain siap diimplementasikan ke website yang fungsional.</li>
    </ol>

    <!-- Teknologi -->
    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Teknologi & Tools</h3>
    <p class="text-gray-700 mb-6 leading-relaxed">
      Kami menggunakan tools desain profesional seperti Adobe Photoshop, Illustrator, Figma, dan XD. Desain kami selalu dibuat responsif dan siap untuk diimplementasikan ke berbagai platform.
    </p>

    <!-- Studi Kasus -->
    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Studi Kasus</h3>
    <p class="text-gray-700 mb-6 leading-relaxed">
      Salah satu proyek kami adalah mendesain website startup teknologi. Dengan visual yang modern dan navigasi intuitif, klien berhasil meningkatkan engagement pengguna hingga 40%.
    </p>

    <!-- Testimoni -->
    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Testimoni Klien</h3>
    <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-700 mb-6">
      "Desain web yang dibuat Creative Digital benar-benar sesuai brand kami dan memikat pengunjung!" – <strong>PT. Kreatif Mandiri</strong>
    </blockquote>

    <!-- CTA -->
    <div class="text-center">
      <a href="#contact" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded shadow transition">Hubungi Kami Sekarang</a>
    </div>
  </div>
  <div class="container mx-auto px-6  pt-7">
    <p class="text-gray-600 mb-12" data-aos="fade-up" data-aos-delay="100">Beberapa proyek yang telah berhasil kami selesaikan untuk klien kami.</p>

    <div class="grid md:grid-cols-3 gap-8">
      @foreach($portofolios as $portofolio)
        <div class="bg-gray-50 rounded-xl text-center shadow hover:shadow-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('storage/'.$portofolio->gambar_projek) }}" 
               alt="{{ $portofolio->judul }}" 
               class="w-full object-cover h-64">
          <div class="p-4">
            <h4 class="">{{ $portofolio->nama_projek }}</h4>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


  <!-- Footer -->
  <footer class="bg-blue-500 text-white pt-12 pb-6">
  <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">
    
    <!-- Brand -->
    <div>
      <h4 class="text-2xl font-bold mb-4">Creative Digital</h4>
      <p class="text-sm leading-relaxed">
         Kami membantu bisnis tumbuh melalui desain kreatif, pengembangan berskala, dan pemasaran digital yang efektif.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2 text-sm">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li><a href="/tentangkami" class="hover:text-blue-600">TentangKami</a></li>
        <li><a href="/webdesain" class="hover:text-blue-600">WebDesain</a></li>
        <li><a href="/webdevelopment" class="hover:text-blue-600">WebDevelopment</a></li>
        <li><a href="/digitalmarketing" class="hover:text-blue-600">DigitalMarketing</a></li>
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

  <div class="fixed bottom-5 right-5 z-50 flex items-center space-x-2 bg-green-500 px-3 py-2 rounded shadow-lg">
  <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center space-x-2" aria-label="Chat WhatsApp">
    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" class="w-6 h-6 hover:scale-110 transition duration-300">
    <span class="text-white text-sm font-sans">Butuh Bantuan?</span>
  </a>
</div>

  <!-- Script Cursor -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
  AOS.init({
    duration: 1000, // durasi animasi 1 detik
    once: true,     // animasi hanya sekali saat scroll
  });


     // Toggle Mobile Menu
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");
  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });

    function toggleMobileDropdown() {
    const dropdown = document.getElementById('mobile-services');
    dropdown.classList.toggle('hidden');
  }
  </script>
</body>
</html>
