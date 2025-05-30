@extends('layouts.app')

@section('content')
    <h2>{{ isset($peserta) ? 'Edit' : 'Tambah' }} Peserta</h2>
    <form method="POST" action="{{ isset($peserta) ? route('peserta.update', $peserta->id) : route('peserta.store') }}">
        @csrf
        @if(isset($peserta)) @method('PUT') @endif

        Nama: <input type="text" name="nama" value="{{ $peserta->nama ?? '' }}"><br>
        NIM: <input type="text" name="nim" value="{{ $peserta->nim ?? '' }}"><br>
        Email: <input type="email" name="email" value="{{ $peserta->email ?? '' }}"><br>
        No HP: <input type="text" name="no_hp" value="{{ $peserta->no_hp ?? '' }}"><br>
        Kegiatan: <input type="text" name="kegiatan" value="{{ $peserta->kegiatan ?? '' }}"><br>
        <button type="submit">{{ isset($peserta) ? 'Update' : 'Simpan' }}</button>
    </form>
@endsection
