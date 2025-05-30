<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tambahkan link CSS di sini, jika ada -->
     
</head>
<body>
    <nav>
        <!-- Tambahkan navigasi di sini -->
    </nav>

    <div class="container">
        @yield('content')  <!-- Konten dari setiap view akan dimasukkan di sini -->
    </div>

    <footer>
        <!-- Tambahkan footer di sini -->
    </footer>
</body>
</html>
