<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\Configuration;

class DigitalMarketingController extends Controller
{
    public function index()
    {
         $selectedNames = ['Digital Marketing Negara&Partners', 'Digital Marketing Pesta Rakyat 2025', 'Digital Marketing Wahana Kolam Renang']; // nama yang ingin ditampilkan
        $portofolios = Portofolio::whereIn('nama_projek', $selectedNames)->get();
         $configuration = Configuration::all();
        return view('digitalmarketing',compact('portofolios','configuration'));
    }
}
