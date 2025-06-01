<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard UKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen relative font-sans">

    <!-- Navbar - Pojok kanan atas -->
    <div class="absolute top-4 right-4 z-50 flex gap-4">
        <a href="{{ url('/login') }}" class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 text-white text-sm">Login</a>
        <a href="{{ url('/register') }}" class="bg-green-600 px-4 py-2 rounded hover:bg-green-700 text-white text-sm">Register</a>
    </div>

    <!-- Konten tengah halaman -->
    <div class="flex flex-col items-center justify-center h-screen text-center">
        <h1 class="text-6xl font-bold text-red-500 mb-4">UKM Tel-U</h1>
        <p class="text-gray-300 text-lg mb-8">Aplikasi Sistem Manajemen UKM.</p>
    </div>

</body>

</html>