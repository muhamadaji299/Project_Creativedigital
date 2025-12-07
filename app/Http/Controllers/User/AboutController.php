<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Configuration;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $configuration = Configuration::all();
        $about = About::all();

        foreach ($about as $item) {

        $parts = explode('.', $item->keterangan, 2);
        $item->part1 = $parts[0] ?? '';
        $item->part2 = $parts[1] ?? '';
    
        $bagian = explode('.',$item->poin2, 3);
        $item->bagian1 = $bagian[0] ?? '';
        $item->bagian2 = $bagian[1] ?? '';
        $item->bagian3 = $bagian[2] ?? '';
       }
        return view('users.about',compact('about','configuration'));
    }
}
