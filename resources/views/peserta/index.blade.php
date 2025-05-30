@extends('layouts.app')

@section('content')
    <h2>Daftar Peserta</h2>
    <a href="{{ route('peserta.create') }}">+ Tambah Peserta</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th><th>NIM</th><th>Email</th><th>No HP</th><th>Kegiatan</th><th>Aksi</th>
        </tr>
        @foreach ($pesertas as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->nim }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->no_hp }}</td>
            <td>{{ $p->kegiatan }}</td>
            <td>
                <a href="{{ route('peserta.edit', $p->id) }}">Edit</a>
                <form action="{{ route('peserta.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
