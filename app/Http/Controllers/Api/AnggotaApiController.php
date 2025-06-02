<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Anggota;

class AnggotaApiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return response()->json([
            'success' => true,
            'data' => $anggota,
        ], 200);
    }

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
}
