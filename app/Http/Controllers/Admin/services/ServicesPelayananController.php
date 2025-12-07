<?php

namespace App\Http\Controllers\Admin\services;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $services = Services::select('id', 'icon', 'judul_pelayanan', 'keterangan_pelayanan')->get();
        return view('admin.services.pelayanan', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'judul_pelayanan' => 'required|string|max:255',
            'keterangan_pelayanan' => 'required|string',
        ]);

        // Simpan file gambar ke folder storage/public/services
        $path = $request->file('icon')->store('services', 'public');

        Services::create([
            'icon' => $path,
            'judul_pelayanan' => $request->judul_pelayanan,
            'keterangan_pelayanan' => $request->keterangan_pelayanan,
        ]); 

        return redirect()->route('pelayanan.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Services::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::findOrFail($id);

        $request->validate([
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'judul_pelayanan' => 'required|string|max:255',
            'keterangan_pelayanan' => 'required|string',
        ]);

        // Jika user upload gambar baru, hapus gambar lama
        if ($request->hasFile('icon')) {
            if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }

            $path = $request->file('icon')->store('services', 'public');
            $service->icon = $path;
        }

        $service->judul_pelayanan = $request->judul_pelayanan;
        $service->keterangan_pelayanan = $request->keterangan_pelayanan;
        $service->save();


        return redirect()->route('pelayanan.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);

        // Hapus file gambar dari storage
        if ($service->icon && Storage::disk('public')->exists($service->icon)) {
            Storage::disk('public')->delete($service->icon);
        }

        $service->delete();

        return redirect()->route('pelayanan.index')->with('success', 'Data berhasil dihapus');
    }
}
