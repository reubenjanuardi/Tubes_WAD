@extends('layouts.app')
@section('title', 'Dashboard Keuangan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Tambah Keuangan</h2>
    <form method="POST" action="/keuangan">
        @csrf
        <input name="kegiatan" placeholder="Nama kegiatan" class="block p-2 border w-full mb-2">
        <select name="jenis" class="block p-2 border w-full mb-2">
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
        </select>
        <input name="jumlah" placeholder="Jumlah" class="block p-2 border w-full mb-2" type="number">
        <input name="tanggal" type="date" class="block p-2 border w-full mb-2">
        <textarea name="keterangan" class="block p-2 border w-full mb-2" placeholder="Keterangan (opsional)"></textarea>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection