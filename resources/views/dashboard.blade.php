@extends('layouts.app')

@section('content')
<div class="p-6">
    @if(Auth::check())
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Selamat datang, {{ Auth::user()->name }}</h2>
    @else
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Selamat datang, Pengguna</h2>
    @endif
    <p class="text-gray-600">Ini adalah halaman utama dashboard aplikasi manajemen kegiatan UKM.</p>

    <!-- Navigasi ke Fitur -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="/kegiatan" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
            <h3 class="text-lg font-semibold text-blue-600">Manajemen Kegiatan</h3>
            <p class="text-sm text-gray-600">Kelola kegiatan UKM seperti seminar, pelatihan, dsb.</p>
        </a>
        <a href="/peserta" class="block p-4 bg-white shadow rounded hover:bg-blue-50">
            <h3 class="text-lg font-semibold text-blue-600">Pendaftaran Peserta</h3>
            <p class="text-sm text-gray-600">Lihat dan kelola data pendaftar keanggotaan UKM.</p>
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
@endsection