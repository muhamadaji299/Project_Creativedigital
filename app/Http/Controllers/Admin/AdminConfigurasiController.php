<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'nama_website'        => 'required|string|max:255',
            'overview'            => 'required|string',
            'icon_images'         => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'judul_about'         => 'nullable|string',
            'keterangan_about'    => 'nullable|string',
            'judul_services'      => 'nullable|string',
            'keterangan_services' => 'nullable|string',
            'judul_portofolio'    => 'nullable|string',
            'keterangan_portofolio' => 'nullable|string',
            'judul_contact'       => 'nullable|string',
            'keterangan_contact'   => 'nullable|string',
        ]);

        $configuration = Configuration::first();

        // ===============================
        // Upload Gambar (Ikon Website)
        // ===============================
        // ===============================
        // Upload Gambar (Ikon Website)
        // ===============================
        if ($request->hasFile('icon_images')) {

            // hapus gambar lama jika ada
            if ($configuration && $configuration->icon_images && Storage::exists('public/' . $configuration->icon_images)) {
                Storage::delete('public/' . $configuration->icon_images);
            }

            // simpan gambar baru ke storage/app/public/uploads/configurasi
            $path = $request->file('icon_images')->store('uploads/configurasi', 'public');
        } else {
            // gunakan gambar lama (jika ada)
            $path = $configuration->icon_images ?? null;
        }


        // Data yang disimpan
        $data = [
            'nama_website'        => $request->nama_website,
            'overview'            => $request->overview,
            'icon_images'         => $path,
            'judul_about'         => $request->judul_about,
            'keterangan_about'    => $request->keterangan_about,
            'judul_services'      => $request->judul_services,
            'keterangan_services' => $request->keterangan_services,
            'judul_portofolio'    => $request->judul_portofolio,
            'keterangan_portofolio' => $request->keterangan_portofolio,
            'judul_contact'       => $request->judul_contact,
            'keterangan_contact'   => $request->keterangan_contact,
        ];

        if ($configuration) {
            $configuration->update($data);
        } else {
            Configuration::create($data);
        }

        return redirect()->route('configurasi.index')->with('success', 'Data berhasil disimpan!');
    }
}
