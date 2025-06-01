@extends('layouts.app')
@section('title', 'Manajemen Inventaris')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">Manajemen Inventaris</h1>
    <div class="mb-3 py-2">
        <a href="{{ route('inventaris.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Inventaris</a>
    </div>

    <table class="mb-4 w-full border-collapse">
        <thead class="bg-black text-white">
            <tr>
                <th class="border py-2">Nama Barang</th>
                <th class="border py-2">Tanggal</th>
                <th class="border py-2">Deskripsi</th>
                <th class="border py-2">Jumlah</th>
                <th class="border py-2">Status</th>
                <th class="border py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventaris as $inventari)
            <tr class="bg-white hover:bg-gray-100 border-t">
                <td class="border px-4 py-2">{{ $inventari->nama }}</td>
                <td class="border px-4 py-2 text-center">{{ $inventari->tanggal }}</td>
                <td class="border px-4 py-2">{{ $inventari->deskripsi }}</td>
                <td class="border px-4 py-2 text-center">{{ $inventari->jumlah }}</td>
                <td class="border px-4 py-2 text-center">{{ $inventari->status }}</td>
                <td class="border px-4 py-2 text-center">
                    <!-- Edit button -->
                    <a href="{{ route('inventaris.edit', $inventari->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded">Edit</a>
                    <!-- Delete form -->
                    <form action="{{ route('inventaris.destroy', $inventari->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection