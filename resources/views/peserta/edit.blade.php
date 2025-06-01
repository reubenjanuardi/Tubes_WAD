@extends('layouts.app')
@section('title', 'Edit Peserta')

@section('content')
<div class="p-6">
    <h1 class="text-4xl font-bold mb-4 text-center"> Edit Peserta</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('peserta.update', $peserta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2"
                    value="{{ old('nama', $peserta->nama) }}" required>
            </div>

            <div class="mb-4">
                <label for="nim" class="block text-sm font-medium text-gray-700">NIM:</label>
                <input type="text" name="nim" id="nim"
                    class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2"
                    value="{{ old('nim', $peserta->nim) }}" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email"
                    class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2"
                    value="{{ old('email', $peserta->email) }}" required>
            </div>

            <div class="mb-4">
                <label for="no_hp" class="block text-sm font-medium text-gray-700">No HP:</label>
                <input type="text" name="no_hp" id="no_hp"
                    class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2"
                    value="{{ old('no_hp', $peserta->no_hp) }}" required>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
                <select name="status" id="status"
                    class="mt-1 block w-full rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 px-3 py-2"
                    required>
                    <option value="Pending" {{ $peserta->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Accepted" {{ $peserta->status == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="Rejected" {{ $peserta->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="text-end">
                <a href="{{ route('peserta.index') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded">Kembali</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection