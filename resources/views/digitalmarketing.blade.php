@extends('users.layout')

@Section('content')
  <style>
    /* Cursor */
    .cursor {
      width: 20px;
      height: 20px;
      border: 2px solid #3B82F6;
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

    /* Custom styles for enhanced UI */
    .hero-gradient {
      background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
    }
    
    .card-hover {
      transition: all 0.3s ease;
    }
    
    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.2);
    }
    
    .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -5px;
      left: 0;
      background-color: #3B82F6;
      transition: width 0.3s ease;
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    .marketing-process {
      position: relative;
    }
    
    .marketing-process::before {
      content: '';
      position: absolute;
      top: 25px;
      left: 15px;
      width: 2px;
      height: calc(100% - 25px);
      background-color: #DBEAFE;
      z-index: 0;
    }
    
    .process-step {
      position: relative;
      z-index: 1;
    }
    
    .stats-card {
      background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">
  <!-- Custom Cursor -->
  <div class="cursor"></div>

  <!-- Navbar -->
 
  <!-- Hero Section -->
  <section class="hero-gradient py-20 text-white">
    <div class="container mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-up">Layanan Digital Marketing</h1>
      <p class="text-xl max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Strategi pemasaran digital terukur untuk meningkatkan visibilitas dan penjualan bisnis Anda
      </p>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="text-center p-4" data-aos="fade-up">
          <div class="text-3xl font-bold text-blue-500 mb-2">50+</div>
          <div class="text-gray-600">Klien Puas</div>
        </div>
        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="100">
          <div class="text-3xl font-bold text-blue-500 mb-2">200+</div>
          <div class="text-gray-600">Kampanye Sukses</div>
        </div>
        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="200">
          <div class="text-3xl font-bold text-blue-500 mb-2">40%</div>
          <div class="text-gray-600">Rata-rata Kenaikan Traffic</div>
        </div>
        <div class="text-center p-4" data-aos="fade-up" data-aos-delay="300">
          <div class="text-3xl font-bold text-blue-500 mb-2">30%</div>
          <div class="text-gray-600">Rata-rata Kenaikan Konversi</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section id="digital-marketing" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <!-- Pendahuluan -->
      <div class="max-w-4xl mx-auto mb-16" data-aos="fade-up">
        <p class="text-gray-700 text-lg leading-relaxed">
          Creative Digital membantu bisnis Anda berkembang melalui strategi digital marketing yang efektif. 
          Kami fokus pada SEO, social media marketing, content marketing, dan kampanye iklan online untuk meningkatkan visibilitas, traffic, dan konversi.
        </p>
      </div>

      <!-- Proses Kerja -->
      <div class="mb-16" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-center mb-8">
          <div class="h-1 w-12 bg-blue-500 mr-4"></div>
          <h3 class="text-2xl font-bold text-gray-800">Proses Kerja Kami</h3>
        </div>
        
        <div class="marketing-process">
          <div class="process-step flex mb-8">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
            <div>
              <h4 class="font-bold text-lg text-blue-600 mb-2">Analisis Pasar & Target</h4>
              <p class="text-gray-600">Menentukan audiens, tren, dan peluang untuk strategi marketing.</p>
            </div>
          </div>
          
          <div class="process-step flex mb-8">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
            <div>
              <h4 class="font-bold text-lg text-blue-600 mb-2">Perencanaan Strategi</h4>
              <p class="text-gray-600">Membuat roadmap kampanye, konten, dan channel promosi.</p>
            </div>
          </div>
          
          <div class="process-step flex mb-8">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">3</div>
            <div>
              <h4 class="font-bold text-lg text-blue-600 mb-2">Implementasi & Optimasi</h4>
              <p class="text-gray-600">Menjalankan kampanye di media sosial, Google Ads, dan email marketing, lalu melakukan optimasi berdasarkan hasil.</p>
            </div>
          </div>
          
          <div class="process-step flex">
            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">4</div>
            <div>
              <h4 class="font-bold text-lg text-blue-600 mb-2">Monitoring & Reporting</h4>
              <p class="text-gray-600">Memantau performa, membuat laporan, dan memberikan rekomendasi peningkatan.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Teknologi -->
      <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center mb-6">
          <div class="h-1 w-12 bg-blue-500 mr-4"></div>
          <h3 class="text-2xl font-bold text-gray-800">Tools & Platform</h3>
        </div>
        
        <div class="bg-blue-50 rounded-xl p-6">
          <p class="text-gray-700 mb-4 leading-relaxed">
            Kami memanfaatkan berbagai tools profesional untuk memastikan hasil yang maksimal:
          </p>
          
          <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg text-center card-hover">
              <i class="fab fa-google text-3xl text-blue-500 mb-2"></i>
              <p class="font-medium">Google Analytics</p>
            </div>
            <div class="bg-white p-4 rounded-lg text-center card-hover">
              <i class="fab fa-google text-3xl text-green-500 mb-2"></i>
              <p class="font-medium">Google Ads</p>
            </div>
            <div class="bg-white p-4 rounded-lg text-center card-hover">
              <i class="fab fa-facebook text-3xl text-blue-600 mb-2"></i>
              <p class="font-medium">Meta Ads</p>
            </div>
            <div class="bg-white p-4 rounded-lg text-center card-hover">
              <i class="fas fa-search text-3xl text-orange-500 mb-2"></i>
              <p class="font-medium">SEMrush</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Layanan Digital Marketing -->
      <div class="mb-16" data-aos="fade-up" data-aos-delay="300">
        <div class="flex items-center mb-6">
          <div class="h-1 w-12 bg-blue-500 mr-4"></div>
          <h3 class="text-2xl font-bold text-gray-800">Layanan Kami</h3>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-xl p-6 shadow-sm card-hover">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
              <i class="fas fa-search text-2xl text-blue-500"></i>
            </div>
            <h4 class="font-bold text-lg text-gray-800 mb-2">SEO</h4>
            <p class="text-gray-600 text-sm">Optimasi mesin pencari untuk meningkatkan peringkat website Anda</p>
          </div>
          
          <div class="bg-white rounded-xl p-6 shadow-sm card-hover">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
              <i class="fab fa-facebook text-2xl text-blue-500"></i>
            </div>
            <h4 class="font-bold text-lg text-gray-800 mb-2">Social Media</h4>
            <p class="text-gray-600 text-sm">Manajemen dan iklan di platform media sosial</p>
          </div>
          
          <div class="bg-white rounded-xl p-6 shadow-sm card-hover">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
              <i class="fas fa-pen-fancy text-2xl text-blue-500"></i>
            </div>
            <h4 class="font-bold text-lg text-gray-800 mb-2">Content Marketing</h4>
            <p class="text-gray-600 text-sm">Strategi konten untuk menarik dan mempertahankan audiens</p>
          </div>
          
          <div class="bg-white rounded-xl p-6 shadow-sm card-hover">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
              <i class="fas fa-envelope text-2xl text-blue-500"></i>
            </div>
            <h4 class="font-bold text-lg text-gray-800 mb-2">Email Marketing</h4>
            <p class="text-gray-600 text-sm">Kampanye email untuk meningkatkan konversi dan retensi</p>
          </div>
        </div>
      </div>

      <!-- Studi Kasus -->
      <div class="mb-16" data-aos="fade-up" data-aos-delay="400">
        <div class="flex items-center mb-6">
          <div class="h-1 w-12 bg-blue-500 mr-4"></div>
          <h3 class="text-2xl font-bold text-gray-800">Studi Kasus</h3>
        </div>
        
        <div class="bg-white border border-blue-100 rounded-xl p-6 shadow-sm">
          <div class="flex flex-col md:flex-row gap-6">
            <div class="md:w-1/3">
              <img src="img/fashion-case.jpg" alt="Fashion Case Study" class="w-full h-48 object-cover rounded-lg">
            </div>
            <div class="md:w-2/3">
              <h4 class="text-xl font-bold text-blue-600 mb-3">Toko Online Fashion</h4>
              <p class="text-gray-700 mb-4">
                Salah satu klien kami adalah toko online fashion. Dengan strategi digital marketing yang tepat, kampanye iklan dan SEO berhasil meningkatkan traffic website hingga 50% dan penjualan hingga 30% dalam 2 bulan.
              </p>
              <div class="grid grid-cols-2 gap-4">
                <div class="stats-card text-white p-3 rounded-lg text-center">
                  <div class="text-2xl font-bold">50%</div>
                  <div class="text-sm">Kenaikan Traffic</div>
                </div>
                <div class="stats-card text-white p-3 rounded-lg text-center">
                  <div class="text-2xl font-bold">30%</div>
                  <div class="text-sm">Kenaikan Penjualan</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Testimoni -->
      <div class="mb-16" data-aos="fade-up" data-aos-delay="500">
        <div class="flex items-center mb-6">
          <div class="h-1 w-12 bg-blue-500 mr-4"></div>
          <h3 class="text-2xl font-bold text-gray-800">Testimoni Klien</h3>
        </div>
        
        <div class="bg-blue-50 rounded-xl p-6">
          <div class="flex items-start">
            <div class="mr-4">
              <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                FK
              </div>
            </div>
            <div>
              <blockquote class="italic text-gray-700 mb-3">
                "Digital marketing Creative Digital membantu kami menjangkau audiens yang tepat dan meningkatkan penjualan secara signifikan."
              </blockquote>
              <p class="font-semibold text-blue-600">PT. Fashion Kreatif</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div class="text-center py-8" data-aos="fade-up" data-aos-delay="600">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Siap Meningkatkan Penjualan Bisnis Anda?</h3>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
          Hubungi kami sekarang untuk konsultasi gratis dan dapatkan strategi digital marketing yang tepat untuk bisnis Anda.
        </p>
        <a href="#contact" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg shadow-lg transition transform hover:scale-105 inline-flex items-center">
          Hubungi Kami Sekarang
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
    
    <!-- Portofolio Section -->
    <div class="container mx-auto px-6 pt-7">
      <div class="flex items-center mb-12" data-aos="fade-up">
        <div class="h-1 w-12 bg-blue-500 mr-4"></div>
        <h3 class="text-2xl font-bold text-gray-800">Portofolio Digital Marketing</h3>
      </div>
      
      <p class="text-gray-600 mb-12 text-center max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        Beberapa proyek digital marketing yang telah berhasil kami selesaikan untuk klien kami.
      </p>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl text-center shadow-lg overflow-hidden card-hover" data-aos="zoom-in" data-aos-delay="200">
          <img src="img/marketing1.jpg" alt="Marketing 1" class="w-full object-cover h-64">
          <div class="p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Kampanye Media Sosial</h4>
            <p class="text-gray-600 text-sm mb-4">Strategi media sosial untuk brand makanan</p>
            <a href="#" class="text-blue-500 font-medium hover:text-blue-700">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
          </div>
        </div>
        
        <div class="bg-white rounded-xl text-center shadow-lg overflow-hidden card-hover" data-aos="zoom-in" data-aos-delay="300">
          <img src="img/marketing2.jpg" alt="Marketing 2" class="w-full object-cover h-64">
          <div class="p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Optimasi SEO</h4>
            <p class="text-gray-600 text-sm mb-4">Meningkatkan peringkat website perusahaan jasa</p>
            <a href="#" class="text-blue-500 font-medium hover:text-blue-700">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
          </div>
        </div>
        
        <div class="bg-white rounded-xl text-center shadow-lg overflow-hidden card-hover" data-aos="zoom-in" data-aos-delay="400">
          <img src="img/marketing3.jpg" alt="Marketing 3" class="w-full object-cover h-64">
          <div class="p-6">
            <h4 class="text-lg font-bold text-gray-800 mb-2">Google Ads Campaign</h4>
            <p class="text-gray-600 text-sm mb-4">Kampanye iklan untuk produk kesehatan</p>
            <a href="#" class="text-blue-500 font-medium hover:text-blue-700">Lihat Detail <i class="fas fa-arrow-right ml-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-500 text-white pt-12 pb-6">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">
      
      <!-- Brand -->
      <div>
        <h4 class="text-2xl font-bold mb-4">Creative Digital</h4>
        <p class="text-sm leading-relaxed mb-4">
          Kami membantu bisnis tumbuh melalui desain kreatif, pengembangan berskala, dan pemasaran digital yang efektif.
        </p>
        <div class="flex space-x-4">
          <a href="#" class="w-10 h-10 flex items-center justify-center border border-white rounded-full hover:bg-white hover:text-blue-500 transition">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center border border-white rounded-full hover:bg-white hover:text-blue-500 transition">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="w-10 h-10 flex items-center justify-center border border-white rounded-full hover:bg-white hover:text-blue-500 transition">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="index.html" class="hover:text-blue-100 transition">Home</a></li>
          <li><a href="tentangkami.html" class="hover:text-blue-100 transition">Tentang Kami</a></li>
          <li><a href="webdesain.html" class="hover:text-blue-100 transition">Web Desain</a></li>
          <li><a href="webdevelopment.html" class="hover:text-blue-100 transition">Web Development</a></li>
          <li><a href="digitalmarketing.html" class="hover:text-blue-100 transition">Digital Marketing</a></li>
        </ul>
      </div>

      <!-- Contact & Social -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
        <p class="text-sm mb-3"><i class="fas fa-map-marker-alt mr-2"></i> Bogor City, Indonesia</p>
        <p class="text-sm mb-3"><i class="fas fa-envelope mr-2"></i> creative.digital@gmail.com</p>
        <p class="text-sm mb-6"><i class="fas fa-phone mr-2"></i> +62 813-7778-3334</p>
        
        <div class="bg-blue-600 rounded-lg p-4">
          <h5 class="font-semibold mb-2">Jam Operasional</h5>
          <p class="text-sm">Senin - Jumat: 09.00 - 17.00</p>
          <p class="text-sm">Sabtu: 09.00 - 13.00</p>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-sm mt-10 border-t border-blue-400 pt-4">
      © 2025 Creative Digital. All rights reserved.
    </div>
  </footer>

  <!-- WhatsApp Button -->
  <div class="fixed bottom-5 right-5 z-50 flex items-center space-x-2 bg-green-500 px-3 py-2 rounded-full shadow-lg hover:bg-green-600 transition">
    <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center space-x-2" aria-label="Chat WhatsApp">
      <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" class="w-6 h-6 hover:scale-110 transition duration-300">
      <span class="text-white text-sm font-sans">Butuh Bantuan?</span>
    </a>
  </div>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    // Initialize AOS
    AOS.init({
      duration: 1000,
      once: true,
    });

    // Cursor functionality
    const cursor = document.querySelector('.cursor');
    
    document.addEventListener('mousemove', (e) => {
      cursor.style.left = e.clientX + 'px';
      cursor.style.top = e.clientY + 'px';
    });
    
    document.addEventListener('mousedown', () => {
      cursor.style.transform = 'translate(-50%, -50%) scale(0.8)';
    });
    
    document.addEventListener('mouseup', () => {
      cursor.style.transform = 'translate(-50%, -50%) scale(1)';
    });

    // Toggle Mobile Menu
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");
    menuBtn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          window.scrollTo({
            top: targetElement.offsetTop - 80,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
</body>
</html>
@endsection