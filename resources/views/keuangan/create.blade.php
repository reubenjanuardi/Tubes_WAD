@extends('layouts.app')
@section('title', 'Tambah Data Keuangan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Tambah Keuangan</h2>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form method="POST" action="/keuangan">
            @csrf
            <div class="mb-4">
                <label for="kegiatan" class="block text-sm font-medium text-gray-700">Kegiatan:</label>
                <input name="kegiatan" placeholder="Nama kegiatan" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis:</label>
                <select name="jenis" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
                    <option value="pemasukan">Pemasukan</option>
                    <option value="pengeluaran">Pengeluaran</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Rp):</label>
                <input name="jumlah" placeholder="Jumlah" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" type="number">
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal:</label>
                <input name="tanggal" type="date" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan (opsional):</label>
                <textarea name="keterangan" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" placeholder="Keterangan (opsional)"></textarea>
            </div>

            <div class="text-end">
                <a href="/keuangan" class="inline-block bg-red-600 text-white px-4 py-2 rounded">Kembali</a>
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection