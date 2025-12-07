<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
   public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        Pesan::create($request->all());

        return back()->with('success', 'Message sent successfully!');
    }


    public function index()
    {
        $pesans = Pesan::latest()->get();
        return view('admin.pesan.index', compact('pesans'));
    }

    // Hapus pesan
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        return back()->with('success', 'Message deleted!');
    }
}
