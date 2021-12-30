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
        //
        $gallery =  Gallery::latest()->filter(request(['judul']))->paginate(5)->withQueryString();
        return view('gallery.index',[
            'title'=>'galeri',
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
        return view('gallery.create',[
            'title'=>'galeri'
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
        //
        // $gambar = $request->file('gambar')->store('gambar');

        $validatedData = $request->validate([
        'judul' => 'required',
        'caption' => 'required',
        'link' =>'required'
        ]);

        // $validatedData['gambar'] = $gambar;

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
            'title' => 'data galeri ',
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
        //
        return view('gallery.edit', [
            'title' => 'edit galeri',
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
    public function update(Request $request,$gallery)
    {
        //
        $validatedData = $request->validate([
            'judul' => 'required',
            'caption' => 'required',
            'link' =>'required',
            'published_at' => 'required'
            ]);

            // $validatedData['gambar'] = $gambar;

            Gallery::where('id', $gallery)->update($validatedData);
            return redirect('/gallery')->with('success', 'Gambar berhasil ditambah!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy( $gallery)
    {
        Gallery::destroy($gallery);
        return redirect('/gallery')->with('status', 'data berhasil dihapus');
    }
}
