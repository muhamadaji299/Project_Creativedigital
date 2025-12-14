<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin • Creative Digital</title>
   <link rel="stylesheet" href="{{ asset('css/output.css') }}">
</head>

<body class="bg-blue-500 min-h-screen flex items-center justify-center p-4">

  <div class="w-full max-w-sm bg-white rounded-2xl shadow-xl p-7 border border-gray-100">

    <!-- Header -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-extrabold text-blue-600 tracking-wide">
        Creative Digital
      </h1>
      <p class="text-gray-500 text-sm mt-1">
        Panel Administrator
      </p>
    </div>

    <!-- Alert -->
    @if (session('error') || $errors->any())
      <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg">
        {{ session('error') ?? 'Email atau password salah.' }}
      </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
      @csrf

      <!-- Email -->
      <div>
        <label class="text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email"
          placeholder="Masukkan email admin..."
          class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          required>
      </div>

      <!-- Password -->
      <div>
        <label class="text-sm font-medium text-gray-700">Password</label>
        <div class="relative">
          <input type="password" id="password" name="password"
            placeholder="Masukkan password..."
            class="w-full px-3 py-2 border rounded-lg bg-gray-50 focus:ring-2 focus:ring-blue-400 focus:outline-none"
            required>

          <!-- Toggle Password -->
          <button 
            type="button" 
            onclick="togglePassword()" 
            class="absolute inset-y-0 right-3 flex items-center text-gray-500">
            👁️
          </button>
        </div>
      </div>

      <!-- Login Button -->
      <button type="submit"
        class="w-full py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow-md transition">
        Masuk
      </button>
    </form>

    <div class="text-center mt-5">
      <a href="/" class="text-sm text-blue-600 hover:underline">← Kembali ke halaman utama</a>
    </div>

  </div>

  <script>
    function togglePassword() {
      const pw = document.getElementById("password");
      pw.type = pw.type === "password" ? "text" : "password";
    }
  </script>

</body>
</html>
