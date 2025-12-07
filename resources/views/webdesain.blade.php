@extends('users.layout')

@section('content')
<style>
  /* Style 100% sama seperti halaman sebelumnya */
  .cursor { width: 20px; height: 20px; border: 2px solid #3B82F6; border-radius: 50%; position: fixed; pointer-events: none; transform: translate(-50%, -50%); transition: transform 0.1s ease; z-index: 9999; }
  .btn-border-reveal { background-color: transparent; color: #3B82F6; border: 1px solid #3B82F6; position: relative; border-radius: 0.5rem; padding: 0.75rem 1.5rem; font-weight: 600; overflow: hidden; transition: color 0.3s ease; z-index: 1; }
  .btn-border-reveal::after { content: ""; position: absolute; width: 0; height: 100%; top: 0; left: 0; background-color: #3B82F6; transition: width 0.3s ease; z-index: -1; }
  .btn-border-reveal:hover::after { width: 100%; }
  .btn-border-reveal:hover { color: white; }
  .hero-gradient { background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%); }
  .card-hover { transition: all 0.3s ease; }
  .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(59, 130, 246, 0.2); }
  .stats-card { background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%); }
</style>

<!-- Custom Cursor -->
<div class="cursor"></div>

<!-- Hero Section -->
<section class="hero-gradient py-20 text-white">
  <div class="container mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Layanan UI/UX Design Profesional</h1>
    <p class="text-xl max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
      Desain antarmuka yang cantik, intuitif, dan meningkatkan konversi — 
      membuat pengunjung jatuh cinta sejak pandangan pertama
    </p>
  </div>
</section>

<!-- Stats Section -->
<section class="py-12 bg-white">
  <div class="container mx-auto px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="text-center p-4" data-aos="fade-up">
        <div class="text-3xl font-bold text-blue-500 mb-2">200+</div>
        <div class="text-gray-600">Proyek Desain</div>
      </div>
      <div class="text-center p-4" data-aos="fade-up" data-aos-delay="100">
        <div class="text-3xl font-bold text-blue-500 mb-2">95%</div>
        <div class="text-gray-600">User Satisfaction</div>
      </div>
      <div class="text-center p-4" data-aos="fade-up" data-aos-delay="200">
        <div class="text-3xl font-bold text-blue-500 mb-2">40%</div>
        <div class="text-gray-600">Rata-rata ↑ Konversi</div>
      </div>
      <div class="text-center p-4" data-aos="fade-up" data-aos-delay="300">
        <div class="text-3xl font-bold text-blue-500 mb-2">3 Hari</div>
        <div class="text-gray-600">Prototipe Pertama</div>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">

    <!-- Pendahuluan -->
    <div class="max-w-4xl mx-auto text-center mb-16" data-aos="fade-up">
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami menciptakan desain yang tidak hanya indah dipandang, tapi juga mudah digunakan, 
        cepat dipahami, dan mendorong pengunjung untuk melakukan aksi (beli, daftar, hubungi).
      </p>
    </div>

    <!-- Apa yang Kami Desain -->
    <div class="mb-16">
      <div class="flex items-center justify-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Layanan Desain yang Kami Tawarkan</h3>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-mobile-alt text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Mobile App UI/UX</h4>
          <p class="text-gray-600 text-center text-sm">Desain aplikasi Android & iOS yang user-friendly</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="100">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-laptop text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Website & Dashboard</h4>
          <p class="text-gray-600 text-center text-sm">Desain modern untuk web & admin panel</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-rocket text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Landing Page Conversion</h4>
          <p class="text-gray-600 text-center text-sm">Desain khusus untuk kampanye & promo</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-redo text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Redesign UI/UX</h4>
          <p class="text-gray-600 text-center text-sm">Upgrade tampilan website/app lama</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="400">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-palette text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Brand Identity</h4>
          <p class="text-gray-600 text-center text-sm">Logo, warna, tipografi & panduan brand</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="500">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-cube text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Design System</h4>
          <p class="text-gray-600 text-center text-sm">Komponen UI konsisten untuk tim developer</p>
        </div>
      </div>
    </div>

    <!-- Tools yang Kami Gunakan -->
    <div class="mb-16">
      <div class="flex items-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Tools Profesional yang Kami Pakai</h3>
      </div>

      <div class="bg-blue-50 rounded-xl p-8">
        <div class="grid grid-cols-3 md:grid-cols-6 gap-8">
          <div class="bg-white p-6 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/figma.png" alt="Figma" class="mx-auto">
            <p class="font-medium text-sm mt-3">Figma</p>
          </div>
          <div class="bg-white p-6 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/adobe-xd.png" alt="XD" class="mx-auto">
            <p class="font-medium text-sm mt-3">Adobe XD</p>
          </div>
          <div class="bg-white p-6 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/sketch.png" alt="Sketch" class="mx-auto">
            <p class="font-medium text-sm mt-3">Sketch</p>
          </div>
          <div class="bg-white p-6 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/adobe-photoshop.png" alt="Photoshop" class="mx-auto">
            <p class="font-medium text-sm mt-3">Photoshop</p>
          </div>
          <div class="bg-white p-6 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/adobe-illustrator.png" alt="Illustrator" class="mx-auto">
            <p class="font-medium text-sm mt-3">Illustrator</p>
          </div>
          <div class="bg-white p-6 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/framer.png" alt="Framer" class="mx-auto">
            <p class="font-medium text-sm mt-3">Framer</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Proses Desain Kami -->
    <div class="mb-16">
      <div class="flex items-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Proses UI/UX Design Kami</h3>
      </div>

      <div class="marketing-process relative">
        <div class="process-step flex mb-10" data-aos="fade-up">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Research & User Persona</h4><p class="text-gray-600">Memahami target user & bisnis Anda</p></div>
        </div>
        <div class="process-step flex mb-10" data-aos="fade-up" data-aos-delay="100">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Wireframe & Flow</h4><p class="text-gray-600">Struktur layout & alur pengguna</p></div>
        </div>
        <div class="process-step flex mb-10" data-aos="fade-up" data-aos-delay="200">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Visual Design</h4><p class="text-gray-600">Warna, tipografi, ikon, & elemen visual</p></div>
        </div>
        <div class="process-step flex" data-aos="fade-up" data-aos-delay="300">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">4</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Prototipe + Testing</h4><p class="text-gray-600">Interactive prototype & user testing</p></div>
        </div>
      </div>
    </div>

    <!-- Portofolio Desain -->
    <div class="mb-16">
      <div class="flex items-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Beberapa Hasil Desain Kami</h3>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover" data-aos="zoom-in">
          <img src="img/ui1.jpg" alt="E-commerce App" class="w-full h-72 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-lg">Aplikasi E-Commerce Fashion</h4>
            <p class="text-gray-600 text-sm">Figma • Mobile First • Conversion +45%</p>
          </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover" data-aos="zoom-in" data-aos-delay="100">
          <img src="img/ui2.jpg" alt="Dashboard SaaS" class="w-full h-72 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-lg">Dashboard SaaS Analytics</h4>
            <p class="text-gray-600 text-sm">Dark mode • Clean • User friendly</p>
          </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover" data-aos="zoom-in" data-aos-delay="200">
          <img src="img/ui3.jpg" alt="Landing Page" class="w-full h-72 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-lg">Landing Page Kursus Online</h4>
            <p class="text-gray-600 text-sm">Conversion rate 28% • 3 detik load</p>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center py-12 bg-white rounded-2xl shadow-lg" data-aos="fade-up">
      <h3 class="text-3xl font-bold text-gray-800 mb-4">Ingin Desain yang Bikin Pengunjung Betah & Langsung Order?</h3>
      <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
        Dapatkan desain premium + revisi unlimited + bonus prototipe interaktif!
      </p>
      <a href="#contact" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-10 py-4 rounded-lg shadow-lg transition inline-flex items-center">
        Pesan Desain Sekarang
        <i class="fas fa-arrow-right ml-3"></i>
      </a>
    </div>
  </div>
</section>

<!-- Footer & WhatsApp (sama seperti sebelumnya) -->
<footer class="bg-blue-500 text-white pt-12 pb-6">
  <!-- Copy footer dari halaman lain -->
</footer>

<div class="fixed bottom-5 right-5 z-50 flex items-center space-x-2 bg-green-500 px-3 py-2 rounded-full shadow-lg hover:bg-green-600 transition">
  <a href="https://wa.me/6281377783334" target="_blank" class="flex items-center space-x-2">
    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" class="w-6 h-6">
    <span class="text-white text-sm font-sans">Konsultasi Desain?</span>
  </a>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
  const cursor = document.querySelector('.cursor');
  document.addEventListener('mousemove', e => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
  });
</script>
@endsection