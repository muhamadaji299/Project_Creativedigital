<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function index()
    {

       $about = About::first();

        return view('admin.about.index',compact('about'));
    }

    public function StoreAbout (Request $request)

   

    {$request->validate([
        'judul' => 'required|string|max:255',
        'keterangan' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        'poin1' => 'nullable|string',
        'poin2' => 'nullable|string',
        'poin3' => 'nullable|string',
    ]);

        $about = About::first(); // hanya ada 1 record

        // Handle upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('uploads'), $fileName);
            $gambar = $fileName;
        } else {
            $gambar = $about->gambar ?? null;
        }

        if ($about) {
            // update data
            $about->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $gambar,
                'poin1' => $request->poin1,
                'poin2' => $request->poin2,
                'poin3' => $request->poin3,
            ]);
        } else {
            // buat data baru
            About::create([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'gambar' => $gambar,
                'poin1' => $request->poin1,
                'poin2' => $request->poin2,
                'poin3' => $request->poin3,
            ]);
        }

       

        return redirect()->route('aboutsa')->with('success', 'Data berhasil disimpan!');
        
    }
}
