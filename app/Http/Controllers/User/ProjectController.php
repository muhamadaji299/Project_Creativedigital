<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
         $configuration = Configuration::all();
         $portofolio = Portofolio::all();
        return view('users.project',compact('configuration', 'portofolio'));
    }
}
