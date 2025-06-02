@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="page-title">Edit Kegiatan</h1>

    <!-- Display Validation Errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Kegiatan Form -->
    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $kegiatan->nama }}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $kegiatan->deskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kegiatan->tanggal }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="aktif" {{ $kegiatan->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="selesai" {{ $kegiatan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="batal" {{ $kegiatan->status == 'batal' ? 'selected' : '' }}>Batal</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>

<style>
    /* General Page Styling */
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Page Title Styling */
    .page-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    /* Form Container */
    .form-container {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Form Group Styling */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 16px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 14px;
        background-color: #fff;
        margin-top: 6px;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Alert Box */
    .alert {
        background-color: #f8d7da;
        color: #721c24;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #f5c6cb;
    }

    .alert ul {
        margin: 0;
        padding-left: 20px;
    }

    .alert ul li {
        font-size: 14px;
    }
</style>
@endsection
