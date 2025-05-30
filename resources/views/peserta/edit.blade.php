edit blade

<!DOCTYPE html>
<html>
<head>
    <title>Edit Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .alert-success {
            color: green;
            margin-bottom: 20px;
        }
        .alert-error {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Edit Data Peserta</h1>

    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(isset($peserta))
    <form action="{{ route('peserta.update', $peserta->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama', $peserta->nama) }}" required>
        </div>

        <div class="form-group">
            <label>NIM:</label><br>
            <input type="text" name="nim" value="{{ old('nim', $peserta->nim) }}" required>
        </div>

        <div class="form-group">
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $peserta->email) }}" required>
        </div>

        <div class="form-group">
            <label>No HP:</label><br>
            <input type="text" name="no_hp" value="{{ old('no_hp', $peserta->no_hp) }}" required>
        </div>

        <div class="form-group">
            <label>Kegiatan:</label><br>
            <input type="text" name="kegiatan" value="{{ old('kegiatan', $peserta->kegiatan) }}" required>
        </div>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('peserta.index') }}">Batal</a>
    </form>
    @else
        <p style="color: red;">Data peserta tidak ditemukan.</p>
    @endif

</body>
</html>
