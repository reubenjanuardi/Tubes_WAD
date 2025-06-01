<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'status' => 'in:Tersedia,Terpinjam',
        ]);

        Inventaris::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'status' => $request->status ?? 'Tersedia',
        ]);

        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $inventaris = Inventaris::findOrFail($id);
        return view('inventaris.show', compact('inventaris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $inventaris = Inventaris::findOrFail($id);
        return view('inventaris.edit', compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'status' => 'in:Tersedia,Terpinjam',
        ]);

        $inventaris = Inventaris::findOrFail($id);

        $inventaris->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'status' => $request->status ?? 'Tersedia',
        ]);

        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $inventaris = Inventaris::findOrFail($id);
        $inventaris->delete();
        return redirect()->route('inventaris.index')->with('success', 'Inventaris berhasil dihapus.');
    }
}
