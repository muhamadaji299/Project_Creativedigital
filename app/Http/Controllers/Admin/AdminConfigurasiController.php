<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;

class AdminConfigurasiController extends Controller
{
    public function index()
    {

        $configuration = Configuration::first();
        return view('admin.configurasi.index', compact('configuration'));
    }

    public function StoreConfigurasi(Request $request)


    {
        $request->validate([
            'nama_website' => 'required|string|max:255',
            'overview' => 'required|string',
            'icon_images' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'judul_about' => 'nullable|string',
            'keterangan_about' => 'nullable|string',
            'judul_services' => 'nullable|string',
            'keterangan_services' => 'nullable|string',
            'judul_portofolio' => 'nullable|string',
            'keterangan_portofolio' => 'nullable|string',
            'judul_contact' => 'nullable|string',
            'keterangan_contact' => 'nullable|string',
        ]);

        $configuration = Configuration::first(); // hanya ada 1 record

        // Handle upload gambar jika ada
        if ($request->hasFile('icon_images')) {
            $fileName = time() . '.' . $request->icon_images->extension();
            $request->icon_images->move(public_path('uploads'), $fileName);
            $gambar = $fileName;
        } else {
            $gambar = $configuration->icon_images ?? null;
        }


        if ($configuration) {
            // update data
            $configuration->update([
                'nama_website' => $request->nama_website,
                'overview' => $request->overview,
                'icon_images' => $gambar,
                'judul_about' => $request->judul_about,
                'keterangan_about' => $request->keterangan_about,
                'judul_services' => $request->judul_services,
                'keterangan_services' => $request->keterangan_services,
                'judul_portofolio' => $request->judul_portofolio,
                'keterangan_portofolio' => $request->keterangan_portofolio,
                'judul_contact' => $request->judul_contact,
                'keterangan_contact' => $request->keterangan_contact,
            ]);
        } else {
            // buat data baru
            Configuration::create([
                'nama_website' => $request->nama_website,
                'overview' => $request->overview,
                'icon_images' => $gambar,
                'judul_about' => $request->judul_about,
                'keterangan_about' => $request->keterangan_about,
                'judul_services' => $request->judul_services,
                'keterangan_services' => $request->keterangan_services,
                'judul_portofolio' => $request->judul_portofolio,
                'keterangan_portofolio' => $request->keterangan_portofolio,
                'judul_contact' => $request->judul_contact,
                'keterangan_contact' => $request->keterangan_contact,
            ]);
        }



        return redirect()->route('configurasi.index')->with('success', 'Data berhasil disimpan!');
    }
}
