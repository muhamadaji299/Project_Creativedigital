<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesKeteranganController extends Controller
{
    public function index()
    {
        // Ambil satu record keterangan service
        $services = Services::select('id', 'judul1', 'keterangan1', 'pesan', 'keterangan_pesan')
            ->whereNotNull('judul1')
            ->first();

        return view('admin.services.keterangan', compact('services'));
    }

    public function StoreKeterangan(Request $request)
    {
        $request->validate([
            'judul1' => 'required|string|max:255',
            'keterangan1' => 'required|string',
            'pesan' => 'required|string|max:255',
            'keterangan_pesan' => 'required|string',
        ]);

        Services::updateOrCreate(
            ['id' => 6],
            [
                'judul1' => $request->judul1,
                'keterangan1' => $request->keterangan1,
                'pesan' => $request->pesan,
                'keterangan_pesan' => $request->keterangan_pesan,
            ]
        );

        return redirect()->route('services.keterangan')->with('success', 'Keterangan layanan berhasil disimpan.');
    }
}
