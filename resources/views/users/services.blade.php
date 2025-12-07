@extends('users.layout')
@section('content')
<!-- Hero Section -->
  <section class="gradient-blue text-white py-24 ">
    <div class="container mx-auto px-6">
      <div class="flex flex-col items-center">
        <div class="bg-white bg-opacity-20 rounded-full p-4 mb-6">
          <i class="fas fa-cogs text-4xl"></i>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Layanan Kami</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto text-center">
        Kami menyediakan berbagai layanan digital untuk membantu bisnis Anda berkembang melalui teknologi modern dan desain profesional.
        </p>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">  

    <div class="text-center mb-12">
      <div class="flex items-center justify-center mb-4">
        <div class="bg-blue-100 p-3 rounded-full mr-4">
          <i class="fas fa-concierge-bell text-blue-500 text-xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-gray-800">Layanan Kami</h2>
      </div>
      <p class="text-gray-600 max-w-2xl mx-auto">Berikut Beberapa Layanan Unggulan Kami</p>
    </div>
   
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Layanan 1 --> 
          @foreach($services as $s)
          <div class="service-card bg-white rounded-2xl shadow-md p-8 hover:shadow-xl">
          
          <div class="service-icon bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            @if(isset($s->icon))
            <img src="{{ asset('storage/'. $s->icon)}}" alt="Icon" class="w-8 h-8">
            @endif
            <!-- <i  class="fas fa-laptop-code text-blue-500 text-2xl"></i> -->
          </div>
          <h3 class="text-xl font-semibold mb-2">{{ $s->judul_pelayanan }}</h3>
          <p class="text-gray-600">{{ $s->keterangan_pelayanan }}</p>
            <a href="#" class="text-blue-500 font-medium mt-4 inline-flex items-center hover:text-blue-700">
            <i class="fas fa-award mr-1 gap-1"></i> Pelayanan Terbaik Kami
            </a>
        </div> 
        @endforeach
      </div>
    </div>
  </section>

  <!-- Proses Kerja -->
  <section class="py-20">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <div class="flex items-center justify-center mb-4">
          <div class="bg-blue-100 p-3 rounded-full mr-4">
            <i class="fas fa-tasks text-blue-500 text-xl"></i>
          </div>
        
          <h2 class="text-3xl font-bold text-blue-500">Proses Kerja Kami</h2>
        </div>
        <p class="text-gray-600 max-w-2xl mx-auto">Cara kami bekerja untuk menghasilkan solusi digital terbaik</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="process-card bg-blue-50 p-6 rounded-2xl hover:shadow-lg">
          <div class="process-number">1</div>
          <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-comments text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-blue-500 mb-2">Konsultasi</h3>
          <p class="text-gray-700 text-sm">Kami mendengarkan kebutuhan Anda dan memberikan solusi digital terbaik.</p>
        </div>
        
        <div class="process-card bg-blue-50 p-6 rounded-2xl hover:shadow-lg">
          <div class="process-number">2</div>
          <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-pencil-ruler text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-blue-500 mb-2">Desain</h3>
          <p class="text-gray-700 text-sm">Tim kami membuat desain UI/UX sesuai visi bisnis Anda.</p>
        </div>
        
        <div class="process-card bg-blue-50 p-6 rounded-2xl hover:shadow-lg">
          <div class="process-number">3</div>
          <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-code text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-blue-500 mb-2">Pengembangan</h3>
          <p class="text-gray-700 text-sm">Proses coding dan implementasi fitur dilakukan dengan standar tinggi.</p>
        </div>
        
        <div class="process-card bg-blue-50 p-6 rounded-2xl hover:shadow-lg">
          <div class="process-number">4</div>
          <div class="bg-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-rocket text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-blue-500 mb-2">Peluncuran</h3>
          <p class="text-gray-700 text-sm">Website atau aplikasi siap digunakan dan kami bantu pemeliharaan berkelanjutan.</p>
        </div>
      </div>
      
      <!-- Proses Flow Line -->
      <div class="hidden md:block relative mt-8 mb-12">
        <div class="absolute top-1/2 left-0 right-0 h-1 bg-gray-200 transform -translate-y-1/2 z-0"></div>
        <div class="relative flex justify-between z-10">
          <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">1</div>
          <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">2</div>
          <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">3</div>
          <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">4</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section -->
 

  <!-- CTA Section -->


<section class="py-16 bg-blue-500 text-white">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
    <p class="text-lg mb-8 max-w-2xl mx-auto">Jika Anda Ingin Memilih Layanan Kami</p>
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="contact.html" class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition flex items-center justify-center">
        <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami
      </a>
      <a href="projects.html" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-500 transition flex items-center justify-center">
        <i class="fas fa-briefcase mr-2"></i> Lihat Portfolio
      </a>
    </div>
  </div>
</section>

@endsection