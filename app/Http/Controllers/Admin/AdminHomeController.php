<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    public function index()
    {
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

        // hanya ada 1 record
        $home = Home::first();

        // ========== UPLOAD GAMBAR ==========
        if ($request->hasFile('gambar')) {

            // hapus gambar lama jika ada
            if ($home && $home->gambar && Storage::exists('public/' . $home->gambar)) {
                Storage::delete('public/' . $home->gambar);
            }

            // simpan gambar baru ke folder yg sama dengan About
            $path = $request->file('gambar')->store('uploads/home', 'public');

        } else {
            // gunakan gambar lama
            $path = $home->gambar ?? null;
        }

        // ========== UPDATE / CREATE ==========
        $data = [
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'gambar' => $path,
            'judul1' => $request->judul1,
            'judul2' => $request->judul2,
            'deskripsi_judul1' => $request->deskripsi_judul1,
            'deskripsi_judul2' => $request->deskripsi_judul2,
        ];

        if ($home) {
            $home->update($data);
        } else {
            Home::create($data);
        }

        return redirect()->route('homesa')->with('success', 'Data berhasil disimpan!');
    }
}
