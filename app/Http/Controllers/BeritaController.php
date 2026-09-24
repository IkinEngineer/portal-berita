<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\kategori;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function welcome()
    {
        $berita = Berita::all();
        return view('welcome', compact('berita'));
    }
    public function index()
    {
        if (!session()->has('key')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!session()->has('key')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $kategori = Kategori::all();
        return view('berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $image = $request->file('gambar')->store('images', 'public');
        $input = $request->all();
        $input['gambar'] = "$image";
        $input['penulis_id'] = session('key.0.id');

        Berita::create($input);

        return redirect()->route('berita.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = Berita::find($id);
        return view('detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!session()->has('key')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();

        return view('berita.edit', compact('berita', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Berita::find($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('images', 'public');
            $berita->gambar = $gambar;
        }

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->tgl = $request->tgl;
        $berita->save();

        return redirect()->route('berita.index')->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('berita.index')->with('success');
    }
}
