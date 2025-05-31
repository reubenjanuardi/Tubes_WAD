<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Keuangan;
use App\Http\Resources\KeuanganResource;


class KeuanganApiController extends Controller
{
    // GET /api/keuangan
    public function index()
    {
        // Ambil semua data keuangan
        $data = Keuangan::all();

        return new KeuanganResource(
            'success',
            'Data keuangan berhasil diambil',
            $data
        );
    }

    // POST /api/keuangan
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'required|string|max:255',
            'jenis' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric',
            'keterangan' => 'sometimes|nullable|string|max:255',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Simpan data keuangan
        $item = Keuangan::create($request->all());

        return new KeuanganResource('success', 'Data keuangan berhasil ditambahkan', $item);
    }

    // PUT /api/keuangan/{id}
    public function update(Request $request, $id)
    {
        // Ambil semua data keuangan
        $data = Keuangan::all();
        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'kegiatan' => 'sometimes|required|string|max:255',
            'jenis' => 'sometimes|required|in:pemasukan,pengeluaran',
            'jumlah' => 'sometimes|required|numeric',
            'keterangan' => 'sometimes|nullable|string|max:255',
            'tanggal' => 'sometimes|required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 422);
        }

        // Cari item keuangan
        $item = Keuangan::find($id);

        if (!$item) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        // Update data keuangan
        $item->update([
            'kegiatan' => $request->kegiatan,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
        ]);

        return new KeuanganResource(true, 'Data Keuangan Berhasil Diubah!', $item);
    }

    // GET /api/keuangan/{id}
    public function show($id)
    {
        $item = Keuangan::find($id);

        if (!$item) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return new KeuanganResource('success', 'Detail Data Keuangan!', $item);
    }

    // DELETE /api/keuangan/{id}
    public function destroy($id)
    {
        $item = Keuangan::find($id);

        if (!$item) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        // Hapus data keuangan
        $item->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data keuangan berhasil dihapus'
        ], 200);
    }
}
