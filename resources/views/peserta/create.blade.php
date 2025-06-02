@extends('layouts.app')
@section('title', 'Tambah Peserta')

@section('content')

<div class="p-6">
    <h1 class="text-4xl font-bold mb-4 text-center"> Tambah Peserta</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('peserta.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" name="nama" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM:</label>
                <input type="text" name="nim" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" required>
            </div>
            <div class="mb-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP:</label>
                <input type="text" name="no_hp" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" required>
            </div>
            <div class="text-end">
                <a href="{{ route('peserta.index') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded">Kembali</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection