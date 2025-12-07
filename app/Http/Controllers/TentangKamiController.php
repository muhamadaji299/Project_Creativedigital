<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;

class TentangKamiController extends Controller
{
    public function index(){
        $configuration = Configuration::all();
        return view('tentangkami',compact('configuration'));
    }
}
