<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    public function StoreAbout(Request $request)
    {
        $request->validate([
            'judul'      => 'required|string|max:255',
            'keterangan' => 'required|string',
            'gambar'     => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'poin1'      => 'nullable|string',
            'poin2'      => 'nullable|string',
            'poin3'      => 'nullable|string',
        ]);

        // hanya ada 1 record
        $about = About::first();

        // ========== UPLOAD GAMBAR ==========
        if ($request->hasFile('gambar')) {

            // hapus gambar lama jika ada
            if ($about && $about->gambar && Storage::exists('public/'.$about->gambar)) {
                Storage::delete('public/'.$about->gambar);
            }

            // simpan gambar baru
            $path = $request->file('gambar')->store('uploads/about', 'public');
        } else {
            // gunakan gambar lama
            $path = $about->gambar ?? null;
        }

        // ========== UPDATE / CREATE ==========
        $data = [
            'judul'      => $request->judul,
            'keterangan' => $request->keterangan,
            'gambar'     => $path,
            'poin1'      => $request->poin1,
            'poin2'      => $request->poin2,
            'poin3'      => $request->poin3,
        ];

        if ($about) {
            $about->update($data);
        } else {
            About::create($data);
        }

        return redirect()->route('aboutsa')->with('success', 'Data berhasil disimpan!');
    }
}
