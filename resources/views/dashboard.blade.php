<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen font-sans">
    <!-- Navbar -->
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-semibold text-gray-800">Dashboard UKM</h1>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </nav>

    <!-- Content -->
    <div class="p-6">
        @if(Auth::check())
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Selamat datang, {{ Auth::user()->name }}</h2>
        @else
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Selamat datang, Pengguna</h2>
        @endif
        <p class="text-gray-600">Ini adalah halaman utama dashboard aplikasi manajemen kegiatan UKM.</p>

        <!-- Contoh Navigasi ke Fitur -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <a href="/kegiatan" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
                <h3 class="text-lg font-semibold text-blue-600">Manajemen Kegiatan</h3>
                <p class="text-sm text-gray-600">Kelola kegiatan UKM seperti seminar, pelatihan, dsb.</p>
            </a>
            <a href="/peserta" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
                <h3 class="text-lg font-semibold text-blue-600">Pendaftaran Peserta</h3>
                <p class="text-sm text-gray-600">Lihat dan kelola data pendaftar kegiatan.</p>
            </a>
            <a href="/inventaris" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
                <h3 class="text-lg font-semibold text-blue-600">Inventaris</h3>
                <p class="text-sm text-gray-600">Manajemen perlengkapan UKM.</p>
            </a>
            <a href="/anggota" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
                <h3 class="text-lg font-semibold text-blue-600">Anggota UKM</h3>
                <p class="text-sm text-gray-600">Kelola data anggota aktif UKM.</p>
            </a>
            <a href="/keuangan" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
                <h3 class="text-lg font-semibold text-blue-600">Keuangan</h3>
                <p class="text-sm text-gray-600">Catat pemasukan dan pengeluaran kegiatan.</p>
            </a>
        </div>
    </div>
</body>

</html>