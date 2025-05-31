<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Menampilkan daftar peserta
     */
    public function index()
    {
        $pesertas = Peserta::all();
        return view('peserta.index', compact('pesertas'));
    }

    /**
     * Menampilkan form membuat peserta baru
     */
    public function create()
    {
        return view('peserta.create');
    }

    /**
     * Simpan peserta baru ke database
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
        ]);

        Peserta::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'status' => 'Pending', 
            'tanggal_daftar' => now(),
        ]);

        return redirect()->route('peserta.index')
            ->with('success', 'Peserta berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail peserta
     */
    public function show(Peserta $peserta)
    {
        return view('peserta.show', compact('peserta'));
    }

    /**
     * Menampilkan form edit peserta
     */
    public function edit(Peserta $peserta)
    {
        return view('peserta.edit', compact('peserta'));
    }

    /**
     * Update data peserta
     */
    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'status' => 'required|in:Pending,Accepted,Rejected',
        ]);

        $peserta->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'status' => $request->status,
        ]);

        return redirect()->route('peserta.index')
            ->with('success', 'Data peserta berhasil diperbarui.');
    }

    /**
     * Hapus peserta dari database
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();

        return redirect()->route('peserta.index')
            ->with('success', 'Peserta berhasil dihapus.');
    }
}
