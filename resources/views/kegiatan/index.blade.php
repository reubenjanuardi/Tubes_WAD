@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen Kegiatan</h1>
    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Kegiatan</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kegiatans as $kegiatan)
                <tr>
                    <td>{{ $kegiatan->nama }}</td>
                    <td>{{ $kegiatan->tanggal }}</td>
                    <td>{{ $kegiatan->deskripsi }}</td>
                    <td>{{ $kegiatan->status }}</td>
                    <td>
                        <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
