<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class ManajemenHomeController extends Controller
{
    public function index(Home $home)
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul','keterangan']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('images/home', 'public');
        }

        Home::create($data);

        return redirect()->route('homes.index')->with('success', 'Data home berhasil ditambahkan.');
    }

    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['judul','keterangan']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('images/home', 'public');
        }

        $home->update($data);

        return redirect()->route('homes.index')->with('success', 'Data home berhasil diupdate.');
    }

    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('homes.index')->with('success', 'Data home berhasil dihapus.');
    }
}
