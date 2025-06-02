@extends('layouts.app')
@section('title', 'Dashboard Keuangan')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-4 text-center">Data Keuangan</h2>

    <div class="mb-3 py-2">
        <a href="/keuangan/create" class="bg-blue-600 text-white px-4 py-2 rounded shadow-md">+ Tambah</a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="mb-4 w-full border-collapse shadow-sm">
            <thead class="bg-black text-white">
                <tr>
                    <th class="border py-2">Kegiatan</th>
                    <th class="border py-2">Jenis</th>
                    <th class="border py-2">Jumlah</th>
                    <th class="border py-2">Keterangan</th>
                    <th class="border py-2">Tanggal</th>
                    <th class="border py-2">Aksi</th>
                </tr>
            </thead>
            <tbody class="py-4 text-center">
                @forelse ($data as $item)
                <tr class="bg-gray-100 hover:bg-gray-200 border-t">
                    <td class="border px-4 py-2">{{ $item->kegiatan }}</td>
                    <td class="border px-4 py-2">{{ ucfirst($item->jenis) }}</td>
                    <td class="border px-4 py-2">Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                    <td class="border px-4 py-2">{{ $item->keterangan }}</td>
                    <td class="border px-4 py-2">{{ $item->tanggal }}</td>
                    <td class="border px-4 py-2">
                        <a href="/keuangan/{{ $item->id }}/edit" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded">Edit</a> |
                        <form action="/keuangan/{{ $item->id }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin?')" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr class="bg-gray-100 hover:bg-gray-200 border-t">
                    <td colspan="8" class="text-center py-2">Belum ada data keuangan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection