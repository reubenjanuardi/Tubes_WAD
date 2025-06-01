@extends('layouts.app')
@section('title', 'Edit Inventaris')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">Edit Inventaris</h1>

    <form action="{{ route('inventaris.update', $inventaris->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mt-3">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="nama" name="nama" value="{{ $inventaris->nama }}" required>
        </div>
        <div class="mt-3">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="deskripsi" name="deskripsi" required>{{ $inventaris->deskripsi }}</textarea>
        </div>
        <div class="mt-3">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
            <input type="date" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="tanggal" name="tanggal" value="{{ $inventaris->tanggal }}" required>
        </div>
        <div class="mt-3">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" required>
                <option value="Tersedia" {{ $inventaris->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Terpinjam" {{ $inventaris->status == 'Terpinjam' ? 'selected' : '' }}>Terpinjam</option>
            </select>

        </div>
        <div class="mt-3">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah:</label>
            <input type="number" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" name="jumlah" id="jumlah" value="{{ $inventaris->jumlah }}" required>
        </div>

        <div class="mt-3">
            <a href="{{ route('inventaris.index') }}" class="inline-block bg-red-600 text-white px-4 py-2 rounded">Kembali</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Inventaris</button>
        </div>
    </form>

</div>
@endsection