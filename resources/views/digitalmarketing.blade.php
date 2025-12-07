@extends('users.layout')

@section('content')
<style>
  /* Semua style sama persis dengan halaman sebelumnya */
  .cursor { width: 20px; height: 20px; border: 2px solid #3B82F6; border-radius: 50%; position: fixed; pointer-events: none; transform: translate(-50%, -50%); transition: transform 0.1s ease; z-index: 9999; }
  .btn-border-reveal { background-color: transparent; color: #3B82F6; border: 1px solid #3B82F6; position: relative; border-radius: 0.5rem; padding: 0.75rem 1.5rem; font-weight: 600; overflow: hidden; transition: color 0.3s ease; z-index: 1; }
  .btn-border-reveal::after { content: ""; position: absolute; width: 0; height: 100%; top: 0; left: 0; background-color: #3B82F6; transition: width 0.3s ease; z-index: -1; }
  .btn-border-reveal:hover::after { width: 100%; }
  .btn-border-reveal:hover { color: white; }
  .hero-gradient { background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%); }
  .card-hover { transition: all 0.3s ease; }
  .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(59, 130, 246, 0.2); }
  .stats-card { background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%); }
  .marketing-process::before { content: ''; position: absolute; top: 25px; left: 15px; width: 2px; height: calc(100% - 25px); background-color: #DBEAFE; z-index: 0; }
</style>

<!-- Custom Cursor -->
<div class="cursor"></div>

<!-- Hero Section -->
<section class="hero-gradient py-20 text-white">
  <div class="container mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Layanan Web Development Profesional</h1>
    <p class="text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
      Website cepat, aman, modern, dan siap bersaing di era digital — dibuat khusus untuk bisnis Anda
    </p>
  </div>
</section>

<!-- Stats Section -->
<section class="py-12 bg-white">
  <div class="container mx-auto px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="text-center p-4" data-aos="fade-up">
        <div class="text-3xl font-bold text-blue-500 mb-2">150+</div>
        <div class="text-gray-600">Website Dibuat</div>
      </div>
      <div class="text-center p-4" data-aos="fade-up" data-aos-delay="100">
        <div class="text-3xl font-bold text-blue-500 mb-2">100%</div>
        <div class="text-gray-600">Mobile Friendly</div>
      </div>
      <div class="text-center p-4" data-aos="fade-up" data-aos-delay="200">
        <div class="text-3xl font-bold text-blue-500 mb-2">&lt; 3s</div>
        <div class="text-gray-600">Kecepatan Loading</div>
      </div>
      <div class="text-center p-4" data-aos="fade-up" data-aos-delay="300">
        <div class="text-3xl font-bold text-blue-500 mb-2">1 Tahun</div>
        <div class="text-gray-600">Free Maintenance</div>
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6">

    <!-- Pendahuluan -->
    <div class="max-w-4xl mx-auto mb-16 text-center" data-aos="fade-up">
      <p class="text-gray-700 text-lg leading-relaxed">
        Kami membangun website bukan sekadar cantik, tapi juga cepat, aman, SEO-friendly, 
        mudah dikelola, dan mampu meningkatkan konversi bisnis Anda.
      </p>
    </div>

    <!-- Jenis Website yang Kami Buat -->
    <div class="mb-16">
      <div class="flex items-center mb-8 justify-center">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Jenis Website yang Kami Kembangkan</h3>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-building text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Company Profile</h4>
          <p class="text-gray-600 text-center text-sm">Website perusahaan elegan & profesional</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="100">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-store text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Toko Online / E-Commerce</h4>
          <p class="text-gray-600 text-center text-sm">Lengkap dengan keranjang, pembayaran & stok</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="200">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-school text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Sekolah / Kursus Online</h4>
          <p class="text-gray-600 text-center text-sm">Sistem LMS, video, kuis & sertifikat</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-blog text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Blog / Portal Berita</h4>
          <p class="text-gray-600 text-center text-sm">SEO-friendly & cepat untuk konten banyak</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="400">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-briefcase text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Web Custom / Aplikasi</h4>
          <p class="text-gray-600 text-center text-sm">Sistem internal, dashboard, CRM, dll</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-sm card-hover" data-aos="fade-up" data-aos-delay="500">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 mx-auto">
            <i class="fas fa-file-alt text-2xl text-blue-600"></i>
          </div>
          <h4 class="font-bold text-lg text-center mb-3">Landing Page</h4>
          <p class="text-gray-600 text-center text-sm">Untuk promo produk, event, atau campaign</p>
        </div>
      </div>
    </div>

    <!-- Teknologi yang Kami Gunakan -->
    <div class="mb-16">
      <div class="flex items-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Teknologi Modern yang Kami Kuasai</h3>
      </div>

      <div class="bg-blue-50 rounded-xl p-8">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
          <div class="bg-white p-5 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/laravel.png" alt="Laravel" class="mx-auto mb-2">
            <p class="font-medium text-sm">Laravel</p>
          </div>
          <div class="bg-white p-5 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/react-native.png" alt="React" class="mx-auto mb-2">
            <p class="font-medium text-sm">React JS</p>
          </div>
          <div class="bg-white p-5 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/vue-js.png" alt="Vue" class="mx-auto mb-2">
            <p class="font-medium text-sm">Vue.js</p>
          </div>
          <div class="bg-white p-5 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/tailwindcss.png" alt="Tailwind" class="mx-auto mb-2">
            <p class="font-medium text-sm">Tailwind CSS</p>
          </div>
          <div class="bg-white p-5 rounded-lg text-center card-hover">
            <img src="https://img.icons8.com/color/48/000000/mysql.png" alt="MySQL" class="mx-auto mb-2">
            <p class="font-medium text-sm">MySQL</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Proses Development -->
    <div class="mb-16">
      <div class="flex items-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Proses Pengembangan Website</h3>
      </div>

      <div class="marketing-process">
        <div class="process-step flex mb-8" data-aos="fade-up">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Konsultasi & Analisis Kebutuhan</h4><p class="text-gray-600">Kami pahami bisnis & tujuan Anda</p></div>
        </div>
        <div class="process-step flex mb-8" data-aos="fade-up" data-aos-delay="100">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Desain UI/UX</h4><p class="text-gray-600">Mockup modern & user-friendly</p></div>
        </div>
        <div class="process-step flex mb-8" data-aos="fade-up" data-aos-delay="200">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Development & Testing</h4><p class="text-gray-600">Coding rapi, aman, & diuji di semua device</p></div>
        </div>
        <div class="process-step flex" data-aos="fade-up" data-aos-delay="300">
          <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">4</div>
          <div><h4 class="font-bold text-lg text-blue-600 mb-2">Launch & Maintenance</h4><p class="text-gray-600">Go-live + 1 tahun dukungan gratis</p></div>
        </div>
      </div>
    </div>

    <!-- Portofolio Singkat -->
    <div class="mb-16">
      <div class="flex items-center mb-8">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Beberapa Website yang Telah Kami Buat</h3>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover" data-aos="zoom-in">
          <img src="img/web1.jpg" alt="E-commerce Fashion" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-lg">Toko Fashion Online</h4>
            <p class="text-gray-600 text-sm">Laravel + Midtrans + SEO</p>
          </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover" data-aos="zoom-in" data-aos-delay="100">
          <img src="img/web2.jpg" alt="Company Profile" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-lg">PT. Konstruksi Mandiri</h4>
            <p class="text-gray-600 text-sm">Company profile + animasi</p>
          </div>
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-lg card-hover" data-aos="zoom-in" data-aos-delay="200">
          <img src="img/web3.jpg" alt="Kursus Online" class="w-full h-64 object-cover">
          <div class="p-6">
            <h4 class="font-bold text-lg">Kelas Coding ID</h4>
            <p class="text-gray-600 text-sm">LMS + video streaming</p>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center py-12 bg-white rounded-2xl shadow-lg" data-aos="fade-up">
      <h3 class="text-3xl font-bold text-gray-800 mb-4">Mau Website yang Bikin Bisnis Anda Naik Kelas?</h3>
      <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
        Dapatkan penawaran terbaik + bonus domain & hosting 1 tahun gratis!
      </p>
      <a href="#contact" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-10 py-4 rounded-lg shadow-lg transition inline-flex items-center">
        Mulai Proyek Sekarang
        <i class="fas fa-arrow-right ml-3"></i>
      </a>
    </div>
  </div>
</section>

<!-- Footer & WhatsApp Button (sama seperti sebelumnya) -->
<footer class="bg-blue-500 text-white pt-12 pb-6">
  <!-- ... copy footer dari halaman sebelumnya ... -->
</footer>

<div class="fixed bottom-5 right-5 z-50 flex items-center space-x-2 bg-green-500 px-3 py-2 rounded-full shadow-lg hover:bg-green-600 transition">
  <a href="https://wa.me/6281377783334" target="_blank" class="flex items-center space-x-2">
    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" class="w-6 h-6">
    <span class="text-white text-sm font-sans">Konsultasi Gratis?</span>
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