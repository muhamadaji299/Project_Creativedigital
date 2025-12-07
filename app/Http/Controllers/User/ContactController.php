<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
         $configuration = Configuration::all();
        return view('users.contact',compact('configuration'));
    }
}
