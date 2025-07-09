<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPulse - Berita Teknologi Terkini</title>
    
    <!-- 
      INI ADALAH PERBAIKAN FINAL DAN PALING SEDERHANA.
      Kita hanya akan menggunakan fungsi asset().
      Fungsi ini akan memuat file CSS langsung dari folder 'public/css'.
      Cara ini tidak memerlukan NPM atau Vite.
    -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    
    <div id="app">
        <!-- Memasukkan partial navbar -->
        @include('partials.navbar')

        <main>
            <!-- Konten dari halaman spesifik akan ditampilkan di sini -->
            @yield('content')
        </main>
        
        <!-- Memasukkan partial footer -->
        @include('partials.footer')
    </div>

    <!-- Memuat JavaScript dari folder public -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
