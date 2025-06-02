<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaApiController extends Controller
{
    /**
     * Get all anggota.
     */
    public function index()
    {
        $anggota = Anggota::all();
        return response()->json([
            'success' => true,
            'data' => $anggota,
        ], 200);
    }

    /**
     * Get specific anggota.
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        if (!$anggota) {
            return response()->json([
                'success' => false,
                'message' => 'Anggota tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $anggota,
        ], 200);
    }

    /**
     * Store a new anggota.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:anggota',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $anggota = Anggota::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Anggota berhasil ditambahkan',
            'data' => $anggota,
        ], 201);
    }

    /**
     * Update an existing anggota.
     */
    public function update(Request $request, $id)
    {
        $anggota = Anggota::find($id);
        if (!$anggota) {
            return response()->json([
                'success' => false,
                'message' => 'Anggota tidak ditemukan',
            ], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:anggota,email,' . $anggota->id,
            'status' => 'sometimes|required|in:Aktif,Tidak Aktif',
        ]);

        $anggota->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Anggota berhasil diperbarui',
            'data' => $anggota,
        ], 200);
    }

    /**
     * Delete a specific anggota.
     */
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        if (!$anggota) {
            return response()->json([
                'success' => false,
                'message' => 'Anggota tidak ditemukan',
            ], 404);
        }

        $anggota->delete();

        return response()->json([
            'success' => true,
            'message' => 'Anggota berhasil dihapus',
        ], 200);
    }
}
