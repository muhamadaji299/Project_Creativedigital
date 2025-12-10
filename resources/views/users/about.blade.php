@extends('users.layout')
@section('content')
<!-- Hero Section -->
<section class="gradient-blue text-white py-24 ">
  <div class="container mx-auto px-6">
    <div class="flex flex-col items-center">
      <div class="bg-white bg-opacity-20 rounded-full p-4 mb-6">
        <i class="fas fa-users text-4xl"></i>
      </div>
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
      <p class="text-lg md:text-xl max-w-2xl mx-auto text-center">
        Kami adalah tim kreatif yang berfokus pada pengembangan website, desain, dan aplikasi digital untuk mendorong pertumbuhan bisnis Anda.
      </p>
    </div>
  </div>
</section>

<!-- Siapa Kami -->
<section class="py-20">
  <div class="container mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <div class="order-2 md:order-1">
        <div class="flex items-center mb-4">
          <div class="bg-blue-100 p-3 rounded-full mr-4">
            <i class="fas fa-building text-blue-500 text-xl"></i>
          </div>
          @foreach($about as $a)
          <h2 class="text-3xl font-bold text-blue-500">{{ $a->judul }}</h2>
        </div>
        <p class="text-gray-700 leading-relaxed mb-4">
          {{ $a->part1 }}
        </p>
        <p class="text-gray-700 leading-relaxed">
          {{ $a->part2 }}
       
        <div class="mt-6 flex flex-wrap gap-2">
          <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Web Development</span>
          <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">UI/UX Design</span>
          <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Mobile Apps</span>
          <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">Digital Strategy</span>
        </div>
      </div>
      <div class="order-1 md:order-2">
       @if(isset($a->gambar))
    <img src="{{ asset('storage/' . $a->gambar) }}" 
         alt="Tim Kami" 
         class="rounded-2xl shadow-md w-full">
@endif

      </div>  
       @endforeach
    </div>
  </div>
</section>

<!-- Visi dan Misi -->
<section class="bg-gray-50 py-20">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <div class="flex items-center justify-center mb-4">
        <div class="bg-blue-100 p-3 rounded-full mr-4">
          <i class="fas fa-bullseye text-blue-500 text-xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-blue-500">Visi & Misi Kami</h2>
      </div>
      <p class="text-gray-600 max-w-2xl mx-auto">Pandangan dan tujuan kami dalam memberikan solusi digital terbaik</p>
    </div>
    <div class="grid md:grid-cols-2 gap-10">

      <div class="vision-card bg-white shadow-md rounded-2xl p-8 hover:shadow-xl">
        <div class="flex items-center mb-4">
          <div class="bg-blue-500 p-3 rounded-full mr-4">
            <i class="fas fa-eye text-white text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-blue-500">Visi</h3>
        </div>
        @foreach( $about as $a)
        <p class="text-gray-700 leading-relaxed">
          {{ $a->poin1 }}
        </p>
        @endforeach
      </div>

      <div class="vision-card bg-white shadow-md rounded-2xl p-8 hover:shadow-xl">
        <div class="flex items-center mb-4">
          <div class="bg-blue-500 p-3 rounded-full mr-4">
            <i class="fas fa-rocket text-white text-xl"></i>
          </div>
          <h3 class="text-xl font-semibold text-blue-500">Misi</h3>
        </div>

        @foreach($about as $a)
        <ul class="list-disc list-inside text-gray-700 leading-relaxed space-y-2">
          <li>{{ $a->bagian1 }}</li>
          <li>{{ $a->bagian2 }}</li>
          <li>{{ $a->bagian3 }}</li>
        </ul>
        @endforeach
      </div>


    </div>
  </div>
</section>

<!-- Tim Kami -->


<!-- CTA Section -->
<section class="py-16 bg-blue-500 text-white">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-4">Bergabunglah dengan Tim Kami</h2>
    <p class="text-lg mb-8 max-w-2xl mx-auto">Kami selalu mencari talenta berbakat yang ingin berkembang bersama kami</p>
    <a href="contact.html" class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition flex items-center justify-center mx-auto w-48">
      <i class="fas fa-envelope mr-2"></i> Hubungi Kami
    </a>
  </div>
</section>
@endsection