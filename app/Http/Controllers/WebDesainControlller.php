<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Models\Configuration;

class WebDesainControlller extends Controller
{
    public function index(){
        $configuration = Configuration::all();
        $selectedNames = ['Desain Mockup Web Pendidikan', 'Desain Mockup Web Ecomerce', 'Desain Mockup Web Usaha Ayam']; // nama yang ingin ditampilkan
        $portofolios = Portofolio::whereIn('nama_projek', $selectedNames)->get();
        return view('webdesain', compact('portofolios', 'configuration'));
    }
}
