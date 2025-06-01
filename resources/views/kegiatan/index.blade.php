@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="page-title">Manajemen Kegiatan</h1>
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

<style>
    /* General Page Styling */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Page Title Styling */
    .page-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f4f4f4;
        color: #333;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #f1f1f1;
    }

    /* Button Styling */
    .btn {
        padding: 8px 16px;
        border: none;
        font-size: 14px;
        cursor: pointer;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-warning {
        background-color: #ffc107;
        color: white;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    /* Form Style */
    form {
        display: inline;
    }
</style>

@endsection
