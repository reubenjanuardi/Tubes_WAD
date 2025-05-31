<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    // Menampilkan semua kegiatan
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $kegiatans = Kegiatan::all(); // Mengambil semua data kegiatan
            return view('kegiatan.index', compact('kegiatans')); // Mempassing variabel ke view
        } else {
            return redirect('login');
        }
    }

    // Menampilkan form untuk menambah kegiatan
    public function create()
    {
        return view('kegiatan.create');
    }

    // Menyimpan kegiatan baru ke dalam database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required|in:aktif,selesai,batal',
        ]);

        // Menyimpan data kegiatan baru
        Kegiatan::create($request->all());

        // Redirect ke halaman kegiatan setelah berhasil
        return redirect()->route('kegiatan.index');
    }

    // Menampilkan form untuk mengedit kegiatan
    public function edit($id)
    {
        // Menampilkan form untuk mengedit kegiatan berdasarkan ID
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.edit', compact('kegiatan'));
    }

    // Menyimpan perubahan kegiatan yang sudah diedit
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required|in:aktif,selesai,batal',
        ]);

        // Temukan kegiatan berdasarkan ID
        $kegiatan = Kegiatan::findOrFail($id);

        // Perbarui data kegiatan
        $kegiatan->update($request->all());

        // Redirect kembali ke halaman kegiatan setelah berhasil
        return redirect()->route('kegiatan.index');
    }

    // Menghapus kegiatan berdasarkan ID
    public function destroy($id)
    {
        // Temukan kegiatan berdasarkan ID dan hapus
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        // Redirect kembali ke halaman kegiatan setelah berhasil dihapus
        return redirect()->route('kegiatan.index');
    }
}
