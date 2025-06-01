<!-- <!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light"> -->

@extends('layouts.app')
@section('title', 'Daftar Anggota')

@section('content')

<div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">📋 Daftar Anggota</h1>
    <div class="mb-3 py-2">
        <a href="{{ route('anggota.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">➕ Tambah Anggota</a>
    </div>
    <table class="mb-4 w-full border-collapse">
        <thead class="bg-black text-white">
            <tr>
                <th class="border py-2">ID</th>
                <th class="border py-2">Nama</th>
                <th class="border py-2">NIM</th>
                <th class="border py-2">No HP</th>
                <th class="border py-2">Email</th>
                <th class="border py-2">Status</th>
                <th class="border py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $member)
            <tr class="bg-white hover:bg-gray-100 border-t">
                <td class="border px-4 py-2 text-center">{{ $member->id }}</td>
                <td class="border px-4 py-2">{{ $member->name }}</td>
                <td class="border px-4 py-2 text-center">{{ $member->nim }}</td>
                <td class="border px-4 py-2 text-center">{{ $member->no_hp }}</td>
                <td class="border px-4 py-2 text-center">{{ $member->email }}</td>
                <td class="border px-4 py-2 text-center">{{ $member->status }}</td>
                <td class="border px-4 py-2 text-center">
                    <a href="{{ route('anggota.edit', $member->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-1 px-4 rounded">Edit</a>
                    <form action="{{ route('anggota.destroy', $member->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection