<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class WebDevelopmentController extends Controller
{
    public function index(){
        $selectedNames = ['Website Penginapan/Hotel', 'Website Company Profile', 'Website Pemerintahan']; // nama yang ingin ditampilkan
        $portofolios = Portofolio::whereIn('nama_projek', $selectedNames)->get();
        return view('webdevelopment',compact('portofolios'));
    }
}
