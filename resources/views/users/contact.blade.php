@extends('users.layout')
@section('content')
<section class="gradient-blue text-white py-24">
    <div class="container mx-auto px-6">
      <div class="flex flex-col items-center">
        <div class="bg-white bg-opacity-20 rounded-full p-4 mb-6">
          <i class="fas fa-envelope text-4xl"></i>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto text-center">
        Kami siap membantu Anda menciptakan solusi digital terbaik untuk bisnis Anda.
        </p>
      </div>
    </div>
  </section>

  <!-- Contact Form & Info -->
  <section class="py-20">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-blue-500 mb-4">Hubungi Tim Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Kami siap menjawab pertanyaan Anda dan membantu mewujudkan ide digital Anda</p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-12 items-start">
        
        <!-- Form -->
        <div class="contact-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
          <div class="flex items-center mb-6">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
              <i class="fas fa-paper-plane text-blue-500 text-xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-blue-500">Kirim Pesan</h2>
          </div>
          <form action="{{ route('contact.store')}}" method="POST" class="space-y-4">
            @csrf
            <div>
              <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="fas fa-user text-gray-400"></i>
                </div>
                <input type="text" id="nama" name="nama" required
                  class="form-input w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
              </div>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="fas fa-envelope text-gray-400"></i>
                </div>
                <input type="email" id="email" name="email" required
                  class="form-input w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
              </div>
            </div>
           
            <div>
              <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
              <div class="relative">
                <div class="absolute top-3 left-0 pl-3 flex items-start pointer-events-none">
                  <i class="fas fa-comment-alt text-gray-400"></i>
                </div>
                <textarea id="pesan" name="pesan" rows="5" required
                  class="form-input w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none"></textarea>
              </div>
            </div>
            <button type="submit"
              class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600 transition w-full flex items-center justify-center">
              <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
            </button>
          </form>
        </div>

        <!-- Info -->
        <div>
          <div class="flex items-center mb-6">
            <div class="bg-blue-100 p-3 rounded-full mr-4">
              <i class="fas fa-info-circle text-blue-500 text-xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-blue-500">Informasi Kontak</h2>
          </div>
          <p class="text-gray-700 mb-6">Anda juga dapat menghubungi kami langsung melalui informasi berikut:</p>
          
          <div class="space-y-6">
            <div class="contact-card bg-blue-50 p-6 rounded-2xl flex items-start">
              <div class="bg-blue-500 p-3 rounded-full mr-4">
                <i class="fas fa-map-marker-alt text-white"></i>
              </div>
              <div>
                <p class="font-semibold text-gray-800">Alamat</p>
                <p class="text-gray-600">{{ optional($configuration->first())->judul_about }}</p>
              </div>
            </div>
            
            <div class="contact-card bg-blue-50 p-6 rounded-2xl flex items-start">
              <div class="bg-blue-500 p-3 rounded-full mr-4">
                <i class="fas fa-envelope text-white"></i>
              </div>
              <div>
                <p class="font-semibold text-gray-800">Email</p>
                <a href="mailto:info@creativedigital.id" class="text-blue-500 hover:underline">{{ optional($configuration->first())->judul_portofolio }}</a>
              </div>
            </div>
            
            <div class="contact-card bg-blue-50 p-6 rounded-2xl flex items-start">
              <div class="bg-blue-500 p-3 rounded-full mr-4">
                <i class="fas fa-phone text-white"></i>
              </div>
              <div>
                <p class="font-semibold text-gray-800">Telepon</p>
                <a href="tel:+6281234567890" class="text-blue-500 hover:underline">{{ optional($configuration->first())->keterangan_services }}</a>
              </div>
            </div>
            
            <div class="contact-card bg-blue-50 p-6 rounded-2xl flex items-start">
              <div class="bg-blue-500 p-3 rounded-full mr-4">
                <i class="fas fa-clock text-white"></i>
              </div>
              <div>
                <p class="font-semibold text-gray-800">Jam Operasional</p>
                <p class="text-gray-600">Senin - Jumat: 09.00 - 18.00</p>
                <p class="text-gray-600">Sabtu: 09.00 - 15.00</p>
              </div>
            </div>
          </div>
          
          <!-- Social Media -->
          <div class="mt-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Ikuti Kami</h3>
            <div class="flex space-x-4">
              <a href="#" class="social-icon bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon bg-blue-400 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-500">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon bg-pink-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-pink-700">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="social-icon bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-800">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <div class="flex items-center justify-center mb-4">
          <div class="bg-blue-100 p-3 rounded-full mr-4">
            <i class="fas fa-map-marked-alt text-blue-500 text-xl"></i>
          </div>
          <h2 class="text-3xl font-bold text-blue-500">Lokasi Kami</h2>
        </div>
        <p class="text-gray-600 max-w-2xl mx-auto">Temukan kami di peta berikut atau kunjungi kantor kami secara langsung.</p>
      </div>  
      <!-- (Opsional) Gunakan Embed Map dari Google -->
    
      <div class="rounded-2xl overflow-hidden shadow-lg mt-10">
        <iframe
          src="{{ optional($configuration->first())->keterangan_about }}"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq-section" class="py-20">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <div class="flex items-center justify-center mb-4">
        <div class="bg-blue-100 p-3 rounded-full mr-4">
          <i class="fas fa-question-circle text-blue-500 text-xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-blue-500">Pertanyaan Umum</h2>
      </div>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Berikut adalah beberapa pertanyaan yang sering diajukan oleh klien kami.
      </p>
    </div>

    <div class="max-w-3xl mx-auto space-y-4">
      <!-- FAQ Item 1 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-4 text-left font-medium text-gray-700 hover:bg-gray-50 transition focus:outline-none">
          <span>Berapa lama waktu yang dibutuhkan untuk menyelesaikan sebuah proyek?</span>
          <i class="fas fa-chevron-down text-gray-500 transition-transform duration-300"></i>
        </button>
        <div class="faq-content px-4 pb-0 text-gray-600 border-t border-gray-200 overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out">
          <p class="pt-4">
            Waktu penyelesaian proyek bergantung pada kompleksitas dan skala proyek. Untuk website company profile sederhana biasanya membutuhkan waktu 2-4 minggu, sedangkan aplikasi atau e-commerce bisa 1-3 bulan.
          </p>
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-4 text-left font-medium text-gray-700 hover:bg-gray-50 transition focus:outline-none">
          <span>Bagaimana sistem pembayaran yang tersedia?</span>
          <i class="fas fa-chevron-down text-gray-500 transition-transform duration-300"></i>
        </button>
        <div class="faq-content px-4 pb-0 text-gray-600 border-t border-gray-200 overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out">
          <p class="pt-4">
            Kami menerima pembayaran melalui transfer bank, kartu kredit, dan e-wallet. Untuk proyek besar tersedia opsi pembayaran bertahap sesuai milestone.
          </p>
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
        <button class="faq-btn w-full flex justify-between items-center p-4 text-left font-medium text-gray-700 hover:bg-gray-50 transition focus:outline-none">
          <span>Apakah Anda menyediakan layanan maintenance setelah proyek selesai?</span>
          <i class="fas fa-chevron-down text-gray-500 transition-transform duration-300"></i>
        </button>
        <div class="faq-content px-4 pb-0 text-gray-600 border-t border-gray-200 overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out">
          <p class="pt-4">
            Ya, kami menyediakan paket maintenance sesuai kebutuhan Anda. Termasuk update konten, perbaikan bug, dan peningkatan keamanan.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SCRIPT FAQ -->

  <!-- CTA Section -->
  <section class="py-16 bg-blue-500 text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
      <p class="text-lg mb-8 max-w-2xl mx-auto">Tim profesional kami siap membantu mewujudkan ide digital Anda menjadi kenyataan.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="services.html" class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition flex items-center justify-center">
          <i class="fas fa-cogs mr-2"></i> Lihat Layanan Kami
        </a>
        <a href="projects.html" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-500 transition flex items-center justify-center">
          <i class="fas fa-briefcase mr-2"></i> Lihat Portfolio
        </a>
      </div>
    </div>
  </section>

  <script>
document.addEventListener("DOMContentLoaded", () => {
  const faqButtons = document.querySelectorAll(".faq-btn");

  faqButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector("i");
      const isOpen = content.classList.contains("open");

      // Tutup semua FAQ lain
      document.querySelectorAll(".faq-content").forEach((other) => {
        other.style.maxHeight = "0";
        other.style.opacity = "0";
        other.classList.remove("open");
      });
      document.querySelectorAll(".faq-btn i").forEach((ic) => {
        ic.style.transform = "rotate(0deg)";
      });

      // Jika belum terbuka, buka yang diklik
      if (!isOpen) {
        content.classList.add("open");
        content.style.maxHeight = content.scrollHeight + "px";
        content.style.opacity = "1";
        icon.style.transform = "rotate(180deg)";
      }
    });
  });
});
</script>

 
    @endsection