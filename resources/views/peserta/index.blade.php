@extends('layouts.app')
@section('title', 'Daftar Peserta')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center"> Daftar Peserta UKM</h1>

    <div class="mb-3 text-end py-2">
        <a href="{{ route('peserta.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Peserta</a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="mb-4 w-full border-collapse">
            <thead class="bg-black text-white">
                <tr>
                    <th class="border py-2">No</th>
                    <th class="border py-2">Nama</th>
                    <th class="border py-2">NIM</th>
                    <th class="border py-2">Email</th>
                    <th class="border py-2">No HP</th>
                    <th class="border py-2">Status</th>
                    <th class="border py-2">Tanggal Daftar</th>
                    <th class="border py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pesertas as $index => $peserta)
                <tr class="text-center bg-white hover:bg-gray-100 border-t">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $peserta->nama }}</td>
                    <td class="border px-4 py-2">{{ $peserta->nim }}</td>
                    <td class="border px-4 py-2">{{ $peserta->email }}</td>
                    <td class="border px-4 py-2">{{ $peserta->no_hp }}</td>
                    <td class="border px-4 py-2">
                        @if($peserta->status == 'Pending')
                        <span class="inline-block px-3 py-1 text-sm font-semibold text-yellow-800 bg-yellow-100 rounded">Pending</span>
                        @elseif($peserta->status == 'Accepted')
                        <span class="inline-block px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded">Accepted</span>
                        @elseif($peserta->status == 'Rejected')
                        <span class="inline-block px-3 py-1 text-sm font-semibold text-red-800 bg-red-100 rounded">Rejected</span>
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ date('d-m-Y', strtotime($peserta->tanggal_daftar)) }}</td>
                    <td class="text-center border px-4 py-2">
                        <a href="{{ route('peserta.edit', $peserta->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded">Edit</a>
                        <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">Belum ada peserta terdaftar.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection