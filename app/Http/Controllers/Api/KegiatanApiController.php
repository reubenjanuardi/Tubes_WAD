<?php

namespace App\Http\Controllers\Api;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KegiatanApiController extends Controller
{
    // Menampilkan semua kegiatan
    public function index()
    {
        $kegiatans = Kegiatan::all(); // Mengambil semua data kegiatan
        return response()->json($kegiatans); // Mengembalikan data kegiatan dalam format JSON
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
        $kegiatan = Kegiatan::create($request->all());

        // Mengembalikan response JSON dengan status sukses
        return response()->json($kegiatan, 201);
    }

    // Menampilkan detail kegiatan berdasarkan ID
    public function show($id)
    {
        // Menampilkan kegiatan berdasarkan ID
        $kegiatan = Kegiatan::findOrFail($id);
        return response()->json($kegiatan); // Mengembalikan data kegiatan dalam format JSON
    }

    // Mengupdate kegiatan berdasarkan ID
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

        // Mengembalikan response JSON setelah update
        return response()->json($kegiatan);
    }

    // Menghapus kegiatan berdasarkan ID
    public function destroy($id)
    {
        // Temukan kegiatan berdasarkan ID dan hapus
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        // Mengembalikan response sukses
        return response()->json(null, 204); // Mengembalikan HTTP status code 204 (No Content) 
    }
}
