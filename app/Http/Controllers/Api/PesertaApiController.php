<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaApiController extends Controller
{
    public function index()
    {
        return response()->json(Peserta::all(), 200);
    }

    public function show($id)
    {
        $peserta = Peserta::find($id);
        if (!$peserta) {
            return response()->json(['message' => 'Peserta tidak ditemukan'], 404);
        }
        return response()->json($peserta, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'status' => 'required|in:Pending,Accepted,Rejected'
        ]);

        $peserta = Peserta::create($validated);
        return response()->json($peserta, 201);
    }

    public function update(Request $request, $id)
    {
        $peserta = Peserta::find($id);
        if (!$peserta) {
            return response()->json(['message' => 'Peserta tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'status' => 'required|in:Pending,Accepted,Rejected'
        ]);

        $peserta->update($validated);
        return response()->json($peserta, 200);
    }

    public function destroy($id)
    {
        $peserta = Peserta::find($id);
        if (!$peserta) {
            return response()->json(['message' => 'Peserta tidak ditemukan'], 404);
        }

        $peserta->delete();
        return response()->json(['message' => 'Peserta berhasil dihapus'], 200);
    }
}
