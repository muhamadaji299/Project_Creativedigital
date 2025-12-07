<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $configuration = Configuration::all();

        // Ambil data "pelayanan" — hanya yang punya kolom 'judul_pelayanan'
        $services = Services::select('id', 'icon', 'judul_pelayanan', 'keterangan_pelayanan')
            ->whereNotNull('judul_pelayanan')  // pastikan bukan data detail
            ->get();

        // Ambil data "service detail" — hanya yang punya kolom 'judul1'
        $serviceDetail = Services::select('id', 'judul1', 'keterangan1', 'pesan', 'keterangan_pesan')
            ->whereNotNull('judul1')            // pastikan bukan data layanan biasa
            ->get();

        return view('users.services', compact('configuration', 'services', 'serviceDetail'));
    }
}
    