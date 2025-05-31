index blade

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peserta</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">📋 Daftar Peserta UKM</h1>

    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3 text-end">
        <a href="{{ route('peserta.create') }}" class="btn btn-primary">+ Tambah Peserta</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Kegiatan</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pesertas as $index => $peserta)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->nim }}</td>
                            <td>{{ $peserta->email }}</td>
                            <td>{{ $peserta->no_hp }}</td>
                            <td>{{ $peserta->kegiatan }}</td>
                            <td>{{ date('d-m-Y', strtotime($peserta->tanggal_daftar)) }}</td>
                            <td class="text-center">
                                <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
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

</body>
</html>
