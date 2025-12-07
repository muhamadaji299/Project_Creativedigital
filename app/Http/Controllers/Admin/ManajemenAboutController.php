<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class ManajemenAboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'poin1' => 'nullable|string|max:255',
            'poin2' => 'nullable|string|max:255',
            'poin3' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['judul','keterangan','poin1','poin2','poin3']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('images/about', 'public');
        }

        About::create($data);

        return redirect()->route('abouts.index')->with('success', 'Data about berhasil ditambahkan.');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'poin1' => 'nullable|string|max:255',
            'poin2' => 'nullable|string|max:255',
            'poin3' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['judul','keterangan','poin1','poin2','poin3']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('images/about', 'public');
        }

        $about->update($data);

        return redirect()->route('abouts.index')->with('success', 'Data about berhasil diupdate.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'Data about berhasil dihapus.');
    }
}
