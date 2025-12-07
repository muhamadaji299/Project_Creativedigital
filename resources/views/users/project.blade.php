@extends('users.layout')

@section('content')
  <!-- Header Section -->
  <section class="gradient-blue text-white py-24">
    <div class="container mx-auto px-6">
      <div class="flex flex-col items-center">
        <div class="bg-white bg-opacity-20 rounded-full p-4 mb-6">
          <i class="fas fa-briefcase text-4xl"></i>
        </div>
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Portofolio Kami</h1>
          <p class="text-lg md:text-xl max-w-2xl mx-auto text-center">
            Inilah hasil karya terbaik kami dalam mengembangkan website, aplikasi, dan desain digital untuk berbagai bisnis.
          </p>
      </div>
    </div>
  </section>

  <!-- Toggle Tombol -->
  <section class="py-10 bg-white">
    <div class="container mx-auto px-6">
      <div class="flex justify-center items-center">
        <div class="flex items-center gap-2">
          <span class="text-gray-600 text-sm">Tampilan:</span>
          <button class="view-btn active px-3 py-2 rounded-lg border border-gray-300 text-gray-600" id="gridViewBtn">
            <i class="fas fa-th"></i>
          </button>
          <button class="view-btn px-3 py-2 rounded-lg border border-gray-300 text-gray-600" id="listViewBtn">
            <i class="fas fa-list"></i>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Portofolio -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <div class="flex items-center justify-center mb-4">
          <div class="bg-blue-100 p-3 rounded-full mr-4">
            <i class="fas fa-folder-open text-blue-500 text-xl"></i>
          </div>
          <h2 class="text-3xl font-bold text-gray-800">Hasil Karya Terbaru</h2>
        </div>
        <p class="text-gray-600 max-w-2xl mx-auto">Proyek-proyek terbaik yang telah kami selesaikan untuk klien kami</p>
      </div>

      <!-- Container -->
      <div id="projectContainer" class="grid-view grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 transition-all duration-300">
        @foreach($portofolio as $porto)
          <div class="project-card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden transition-all duration-300">
            <div class="project-image h-56 overflow-hidden">
              @if($porto->gambar_projek)
                <img src="{{ asset('storage/'.$porto->gambar_projek) }}" alt="{{ $porto->nama_projek }}" class="w-full h-full object-cover">
              @endif
            </div>
            <div class="project-content p-5">
              <div class="flex justify-between items-start mb-3">
                <h3 class="text-xl font-semibold text-blue-500">{{ $porto->nama_projek }}</h3>
                <div class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full">Website</div>
              </div>
              <p class="text-gray-600 text-sm mb-4">{{ $porto->deskripsi_singkat }}</p>
              <div class="flex justify-between items-center">
               
                <a href="#" class="text-blue-500 hover:text-blue-700 text-sm font-medium">
                  Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <div class="flex items-center justify-center mb-4">
          <div class="bg-blue-100 p-3 rounded-full mr-4">
            <i class="fas fa-quote-left text-blue-500 text-xl"></i>
          </div>
          <h2 class="text-3xl font-bold text-blue-500">Apa Kata Klien Kami</h2>
        </div>
        <p class="text-gray-600 max-w-2xl mx-auto">Testimoni dari klien yang telah menggunakan layanan kami</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="testimonialsContainer">
        <div class="testimonial-card bg-gray-50 p-6 rounded-2xl shadow-sm hover:shadow-lg">
          <div class="flex items-center mb-4">
            <img src="https://picsum.photos/seed/client1/100/100.jpg" alt="Client 1" class="w-12 h-12 rounded-full object-cover mr-3">
            <div>
              <h3 class="font-semibold text-blue-500">Andi Pratama</h3>
              <p class="text-xs text-gray-500">CEO TechNova</p>
            </div>
          </div>
          <div class="flex mb-3">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
          <p class="italic text-gray-700">"Tim Creative Digital sangat profesional! Website kami kini tampil modern dan responsif."</p>
        </div>

        <div class="testimonial-card bg-gray-50 p-6 rounded-2xl shadow-sm hover:shadow-lg">
          <div class="flex items-center mb-4">
            <img src="https://picsum.photos/seed/client2/100/100.jpg" alt="Client 2" class="w-12 h-12 rounded-full object-cover mr-3">
            <div>
              <h3 class="font-semibold text-blue-500">Sinta Lestari</h3>
              <p class="text-xs text-gray-500">Founder GoMart</p>
            </div>
          </div>
          <div class="flex mb-3">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
          <p class="italic text-gray-700">"Aplikasi yang mereka buat stabil dan mudah digunakan. Dukungan teknisnya cepat."</p>
        </div>

        <div class="testimonial-card bg-gray-50 p-6 rounded-2xl shadow-sm hover:shadow-lg">
          <div class="flex items-center mb-4">
            <img src="https://picsum.photos/seed/client3/100/100.jpg" alt="Client 3" class="w-12 h-12 rounded-full object-cover mr-3">
            <div>
              <h3 class="font-semibold text-blue-500">Dimas Raharjo</h3>
              <p class="text-xs text-gray-500">Owner FinSolve</p>
            </div>
          </div>
          <div class="flex mb-3">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
          <p class="italic text-gray-700">"Desain UI/UX-nya sangat keren dan sesuai brand kami. Highly recommended!"</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 bg-blue-500 text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-4">Tertarik Bekerja Sama?</h2>
      <p class="text-lg mb-8 max-w-2xl mx-auto">Kami siap membantu Anda menciptakan solusi digital yang kreatif dan efisien.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="contact.html" class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition flex items-center justify-center">
          <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami
        </a>
        <a href="services.html" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-500 transition flex items-center justify-center">
          <i class="fas fa-cogs mr-2"></i> Lihat Layanan
        </a>
      </div>
    </div>
  </section>

@@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
  const gridViewBtn = document.getElementById("gridViewBtn");
  const listViewBtn = document.getElementById("listViewBtn");
  const projectContainer = document.getElementById("projectContainer");

  function setActiveView(view) {
    document.querySelectorAll(".view-btn").forEach(btn => btn.classList.remove("active"));

    if (view === "grid") {
      gridViewBtn.classList.add("active");
      projectContainer.classList.remove("list-view");
      projectContainer.classList.add("grid-view");
    } else {
      listViewBtn.classList.add("active");
      projectContainer.classList.remove("grid-view");
      projectContainer.classList.add("list-view");
    }
  }

  gridViewBtn.addEventListener("click", () => setActiveView("grid"));
  listViewBtn.addEventListener("click", () => setActiveView("list"));
  setActiveView("grid");
});
</script>

<style>
/* ========================== */
/* 🌐 GRID VIEW (3 kolom)     */
/* ========================== */
#projectContainer.grid-view {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
}

#projectContainer.grid-view .project-card {
  display: block;
  height: 100%;
}

/* ========================== */
/* 📋 LIST VIEW               */
/* ========================== */
#projectContainer.list-view {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

#projectContainer.list-view .project-card {
  display: flex;
  flex-direction: row;
  align-items: center;
  background: white;
  border-radius: 0.75rem;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  overflow: hidden;
  transition: all 0.3s ease;
}

/* Gambar lebih besar & proporsional */
#projectContainer.list-view .project-image {
  flex: 0 0 35%; /* sekitar 35% lebar */
  height: 220px;
  overflow: hidden;
}

#projectContainer.list-view .project-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Konten di kanan */
#projectContainer.list-view .project-content {
  flex: 1;
  padding: 1.5rem;
}

/* ========================== */
/* RESPONSIVE                 */
/* ========================== */
@media (max-width: 1024px) {
  #projectContainer.grid-view {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  #projectContainer.grid-view {
    grid-template-columns: 1fr;
  }

  #projectContainer.list-view .project-card {
    flex-direction: column;
  }

  #projectContainer.list-view .project-image {
    width: 100%;
    flex: none;
    height: 200px;
  }

  #projectContainer.list-view .project-content {
    width: 100%;
  }
}

/* ========================== */
/* Tombol Aktif               */
/* ========================== */
.view-btn.active {
  background-color: #3b82f6;
  color: white;
  border-color: #3b82f6;
}
</style>
@endsection
