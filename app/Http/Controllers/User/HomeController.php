<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Home;
use App\Models\Mitra;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::all();
        $configuration = Configuration::all();
        $mitra = Mitra::all();
        return view('users.home',compact('home','mitra','configuration'));
    }
}
