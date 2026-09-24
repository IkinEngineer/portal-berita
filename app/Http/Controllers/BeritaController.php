<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Penulis;

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
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('images','public');
        $input = $request->all();
        $input['image'] = "$image";
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
        return view('berita.detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Berita::find($id);

        if ($request->hasFile('image')){
            $image = $request->file('image')->store('images','public');
            $berita->image = $image;
        }

        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->tanggal = $request->tanggal;
        $berita->save();

        return redirect()->route('berita.index')->with('success','');

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
