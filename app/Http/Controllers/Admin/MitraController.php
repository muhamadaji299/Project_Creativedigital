<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua mitra
        $mitras = Mitra::all();
        return view('admin.mitra.index', compact('mitras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan file logo
        $logoPath = $request->file('logo')->store('mitras', 'public');

        // Simpan data ke database
        Mitra::create([
            'logo' => $logoPath,
        ]);

    

        return redirect()->route('mitras.index')->with('success', 'Mitra berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitra $mitra)
    {
        return view('admin.mitra.edit', compact('mitra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mitra $mitra)
    {
        // Validasi input
        $request->validate([
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update logo jika ada file baru
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('mitras', 'public');
            $mitra->logo = $logoPath;
        }

        $mitra->save();

        return redirect()->route('mitras.index')->with('success', 'Mitra berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        // Hapus mitra
        $mitra->delete();

        return redirect()->route('mitras.index')->with('success', 'Mitra berhasil dihapus!');
    }
}
