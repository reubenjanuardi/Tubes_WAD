@extends('layouts.app')
@section('title', 'Tambah Inventaris')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">Tambah Inventaris</h1>

    <form action="{{ route('inventaris.store') }}" method="POST">
        @csrf
        <div class="mt-3">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="nama" name="nama" required>
        </div>

        <div class="mt-3">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="deskripsi" name="deskripsi" required></textarea>
        </div>

        <div class="mt-3">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
            <input type="date" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="tanggal" name="tanggal" required>
        </div>

        <div class="mt-3">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Barang</label>
            <input type="number" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="jumlah" name="jumlah" required>
        </div>

        <div class="mt-3">
            <a href="{{ route('inventaris.index') }}" class="inline-block bg-red-600 text-white px-4 py-2 rounded">Kembali</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Inventaris</button>
        </div>

    </form>
</div>
@endsection