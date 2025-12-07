<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class ManajemenPortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('admin.portofolio.index', compact('portofolios'));
    }

    public function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar_projek' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama_projek'   => 'required|string|max:255',
            'deskripsi_singkat' => 'nullable|string',
        ]);

        $gambarPath = $request->file('gambar_projek')->store('portofolios', 'public');

        Portofolio::create([
            'gambar_projek' => $gambarPath,
            'nama_projek'   => $request->nama_projek,
            'deskripsi_singkat' => $request->deskripsi_singkat,
        ]);

     

        return redirect()->route('portofolios.index')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function show(Portofolio $portofolio)
    {
        return view('admin.portofolios.show', compact('portofolio'));
    }

    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'nama_projek'   => 'required|string|max:255',
            'gambar_projek' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi_singkat' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar_projek')) {
            $gambarPath = $request->file('gambar_projek')->store('portofolios', 'public');
            $portofolio->gambar_projek = $gambarPath;
        }

        $portofolio->nama_projek = $request->nama_projek;
        $portofolio->save();

        return redirect()->route('portofolios.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('portofolios.index')->with('success', 'Portofolio berhasil dihapus!');
    }
}