@extends('layouts.app')
@section('title', 'Tambah Anggota Baru')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold mb-4 text-center">➕ Tambah Anggota Baru</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('anggota.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" class="fmt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                <input type="text" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="nim" name="nim" value="{{ old('nim') }}" required>
            </div>

            <div class="mb-3">
                <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                <input type="text" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2" id="status" name="status" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Tidak Aktif" {{ old('status') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('anggota.index') }}" class="inline-block bg-gray-400 text-white px-6 py-2 rounded">Batal</a>
        </form>
    </div>
</div>
@endsection