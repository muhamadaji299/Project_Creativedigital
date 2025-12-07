<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
     public function index()
    {
       
        $configuration = Configuration::all();

        return view('users.layout', compact('configuration'));
    }
}
