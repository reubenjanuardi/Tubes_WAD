<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data keuangan
        $data = Keuangan::all();
        return view('keuangan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('keuangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kegiatan' => 'required',
            'jenis' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        Keuangan::create($request->all());
        return redirect('/keuangan')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $item = Keuangan::findOrFail($id);
        return view('keuangan.edit', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item = Keuangan::findOrFail($id);
        return view('keuangan.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kegiatan' => 'required',
            'jenis' => 'required|in:pemasukan,pengeluaran',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
        ]);

        $item = Keuangan::findOrFail($id);
        $item->update($request->all());

        return redirect('/keuangan')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Keuangan::findOrFail($id);
        $item->delete();
        return redirect('/keuangan')->with('success', 'Data berhasil dihapus!');
    }
}
