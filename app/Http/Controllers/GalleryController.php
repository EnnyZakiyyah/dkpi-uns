<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery =  Gallery::latest()->filter(request(['judul']))->paginate(5)->withQueryString();
        return view('gallery.index', [
            'title' => 'galeri',
            'galleries' => $gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create', [
            'title' => 'galeri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'gambar' => 'image|file|max:1024',
            'caption' => 'required',
            'link' => ''
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar');
        }
        Gallery::create($validatedData);
        return redirect('/gallery')->with('success', 'Gambar berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('gallery.show', [
            'title' => 'galeri ',
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', [
            'title' => 'galeri',
            'galeri' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validatedData = $request->validate([
            'jenis' => '',
            'judul' => 'required',
            'gambar' => 'image|file|max:1024',
            'caption' => 'required',
            'link' => '',
            'published_at' => 'required'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('galeri-images');
        }
        Gallery::where('id', $gallery->id)->update($validatedData);
        return redirect('/gallery')->with('success', 'Gallery berhasil ditambah!');
    }
    public function jenis($jenis)
    {
        $jenis = Gallery::where('jenis', $jenis)->latest()->paginate(5)->withQueryString();
        return view('mitra.index', [
            'title' => 'Data Galeri',
            'galleries' => $jenis
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($gallery)
    {
        Gallery::destroy($gallery);
        return redirect('/gallery')->with('status', 'data berhasil dihapus');
    }
}
