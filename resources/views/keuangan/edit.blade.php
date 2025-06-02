@extends('layouts.app')
@section('title', 'Edit Data Keuangan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Edit Data Keuangan</h2>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form method="POST" action="/keuangan/{{ $item->id }}">
            @csrf @method('PUT')
            <div class="mb-4">
                <label for="kegiatan" class="block text-sm font-medium text-gray-700">Kegiatan:</label>
                <input name="kegiatan" value="{{ $item->kegiatan }}" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis:</label>
                <select name="jenis" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
                    <option value="pemasukan" {{ $item->jenis == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                    <option value="pengeluaran" {{ $item->jenis == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Rp):</label>
                <input name="jumlah" value="{{ $item->jumlah }}" type="number" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">

            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal:</label>
                <input name="tanggal" value="{{ $item->tanggal }}" type="date" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan:</label>
                <textarea name="keterangan" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">{{ $item->keterangan }}</textarea>
            </div>
            <div class="text-end mb-4">
                <a href="/keuangan" class="inline-block bg-red-600 text-white px-4 py-2 rounded">Kembali</a>
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection