<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Portofolio;
use App\Models\About;
use App\Models\Mitra;

class IndexController extends Controller
{
    public function index()
    {

        $homes = Home::all();
        $portofolios = Portofolio::all();
        $abouts = About::all();
        $mitras = Mitra::all();
        return view('index', compact('homes', 'portofolios', 'abouts','mitras'));
    }
}
