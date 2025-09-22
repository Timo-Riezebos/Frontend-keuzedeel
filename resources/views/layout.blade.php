<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
     @vite('resources/css/app.css')
     @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
    <style>
        #map { height: 400px; }
    </style>
</head>
<body>
    <nav class="flex justify-center gap-12 bg-green-700 text-black font-medium p-4 text-xs sm:text-xl">
      <a href="/" class="py-2 ">Home</NuxtLink></a>
      <a href="/eigenjungletuin" class="py-2 ">eigen jungletuin?</NuxtLink></a>
      <a href="/contact" class="py-2 ">Contact</NuxtLink></a>
    </nav>
    <div class="bg-gray-900 text-white min-h-screen">
      @yield('content')
      <footer class="pt-8 py-4 text-center text-xs md:text-sm">
        <div class="flex flex-col items-center">
          <p>© 1998-2025 Frits de F company / Jungletuinen.nl</p>
          <p>Alle rechten onvoorwaardelijk voorbehouden</p>
        </div>
      </footer>
    </div>
</body>
</html>