<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;

class AdminHomeController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel homes (anggap hanya 1 data)
        $home = Home::first();

        return view('admin.home.index', compact('home'));
    }

    public function storeOrUpdate(Request $request)
    {


        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'judul1' => 'required|string|max:255',
            'judul2' => 'required|string|max:255',
            'deskripsi_judul1' => 'nullable|string',
            'deskripsi_judul2' => 'nullable|string',
        ]);

        $home = Home::first(); // hanya ada 1 record

        // Handle upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $fileName);
            $gambar = $fileName;
        } else {
            $gambar = $home->gambar ?? null;
        }

        if ($home) {
            // update data
            $home->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $gambar,
                'judul1' => $request->judul1,
                'judul2' => $request->judul2,
                'deskripsi_judul1' => $request->deskripsi_judul1,
                'deskripsi_judul2' => $request->deskripsi_judul2
            ]);
        } else {
            // buat data baru
            Home::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $gambar,
                'judul1' => $request->judul1,
                'judul2' => $request->judul2,
                'deskripsi_judul1' => $request->deskripsi_judul1,
                'deskripsi_judul2' => $request->deskripsi_judul2
            ]);
        }


        return redirect()->route('homesa')->with('success', 'Data berhasil disimpan!');
    }
}
