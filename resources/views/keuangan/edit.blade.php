@extends('layouts.app')
@section('title', 'Dashboard Keuangan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Edit Data Keuangan</h2>
    <form method="POST" action="/keuangan/{{ $item->id }}">
        @csrf @method('PUT')
        <input name="kegiatan" value="{{ $item->kegiatan }}" class="block p-2 border w-full mb-2">
        <select name="jenis" class="block p-2 border w-full mb-2">
            <option value="pemasukan" {{ $item->jenis == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
            <option value="pengeluaran" {{ $item->jenis == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
        </select>
        <input name="jumlah" value="{{ $item->jumlah }}" class="block p-2 border w-full mb-2" type="number">
        <input name="tanggal" value="{{ $item->tanggal }}" type="date" class="block p-2 border w-full mb-2">
        <textarea name="keterangan" class="block p-2 border w-full mb-2">{{ $item->keterangan }}</textarea>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection