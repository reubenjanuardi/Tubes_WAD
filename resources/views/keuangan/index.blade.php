@extends('layouts.app')
@section('title', 'Dashboard Keuangan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Data Keuangan</h2>
    <a href="/keuangan/create" class="bg-green-600 text-white px-4 py-2 rounded">+ Tambah</a>

    <table class="mt-4 w-full table-auto border-collapse border">
        <thead class="bg-gray-100">
            <tr>
                <th>Kegiatan</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="text-center border-t">
                <td>{{ $item->kegiatan }}</td>
                <td>{{ ucfirst($item->jenis) }}</td>
                <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>
                    <a href="/keuangan/{{ $item->id }}/edit" class="text-blue-600">Edit</a> |
                    <form action="/keuangan/{{ $item->id }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin?')" class="text-red-600">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection