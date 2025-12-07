@extends('users.layout')

@section('content')
<style>
  .gradient-blue {
    background: linear-gradient(135deg, #3B82F6, #2563EB);
  }

  .contact-card {
    transition: all 0.3s ease;
  }

  .contact-card:hover {
    transform: translateY(-5px);
  }

  .form-input {
    transition: all 0.2s ease;
  }

  .form-input:focus {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .social-icon {
    transition: all 0.2s ease;
  }

  .social-icon:hover {
    transform: translateY(-3px);
  }

  .stat-number {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
  }

  .partner-logo {
    transition: all 0.3s ease;
    filter: grayscale(100%);
    opacity: 0.7;
  }

  .partner-logo:hover {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.05);
  }
</style>

<section class="bg-blue-500 text-white py-24 ">
  <div class="container mx-auto px-6">
    <div class="flex flex-col md:flex-row items-center">
      <!-- Teks di sebelah kiri -->
      <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
        @foreach($home as $h)
        <h1 class="text-3xl md:text-5xl font-bold mb-4">
          {{ $h->judul }}
        </h1>
        <p class="text-lg md:text-xl mb-6">
          {{ $h->keterangan }}
        </p>
        <a href="services.html" class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition flex items-center w-48">
          <i class="fas fa-arrow-right mr-2"></i> Tentang Kami
        </a>
      </div>
      <!-- Gambar di sebelah kanan -->
      <div class="md:w-1/2 flex justify-center">
        @if(isset($h->gambar))
        <img src="{{ asset($h->gambar) }}" alt="Solusi Digital" class=" max-w-full h-80">
        @endif
      </div>
    </div>
    @endforeach
  </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    @foreach($home as $h)
    <h2 class="text-3xl font-bold mb-4">{{ $h->judul1}}</h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-10">{{ $h->deskripsi_judul1 }}</p>
    @endforeach
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <div class="bg-blue-50 p-8 rounded-2xl hover:shadow-lg transition-all duration-300">
        <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-users text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-blue-500">Tim Profesional</h3>
        <p>Kami memiliki tim ahli di bidang web, desain, dan pengembangan aplikasi dengan pengalaman luas.</p>
      </div>

      <div class="bg-blue-50 p-8 rounded-2xl hover:shadow-lg transition-all duration-300">
        <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-palette text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-blue-500">Desain Modern</h3>
        <p>Setiap karya kami dibuat dengan tren desain terkini untuk hasil yang menarik dan elegan.</p>
      </div>

      <div class="bg-blue-50 p-8 rounded-2xl hover:shadow-lg transition-all duration-300">
        <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
          <i class="fas fa-tag text-white text-2xl"></i>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-blue-500">Harga Kompetitif</h3>
        <p>Kami memberikan solusi terbaik dengan harga yang sesuai untuk semua jenis bisnis.</p>
      </div>

    </div>
  </div>
</section>


<!-- Partners Section -->
<section class="py-20 bg-blue-500 text-white">
  <div class="container mx-auto px-6 text-center">
    @foreach($home as $h)
    <h2 class="text-3xl font-bold  mb-4">{{ $h->judul2}}</h2>
    <p class=" max-w-2xl mx-auto mb-10">{{ $h->deskripsi_judul2 }}</p>
    @endforeach

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 mb-12">
      @foreach($mitra as $m)
      <div class="partner-card flex items-center justify-center p-6 bg-gray-50 rounded-lg">
        @if($m->logo)
        <img src="{{ asset('storage/'.$m->logo) }}" alt="Partner 1" class="partner-logo max-h-14">
        @endif
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Why Choose Us -->

<!-- CTA Section -->

@endsection