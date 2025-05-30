@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Manajemen Kegiatan</h1>
    <a href="{{ route('kegiatan.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">Tambah Kegiatan</a>
 
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nama Kegiatan</th>
                <th class="py-2 px-4 border-b">Tanggal</th>
                <th class="py-2 px-4 border-b">Deskripsi</th>
                <th class="py-2 px-4 border-b">Status</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kegiatans as $kegiatan)
            <tr>
                <td class="py-2 px-4 border-b">{{ $kegiatan->nama }}</td>
                <td class="py-2 px-4 border-b">{{ $kegiatan->tanggal }}</td>
                <td class="py-2 px-4 border-b">{{ $kegiatan->deskripsi }}</td>
                <td class="py-2 px-4 border-b">{{ $kegiatan->status }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="text-blue-500">Edit</a> |
                    <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
