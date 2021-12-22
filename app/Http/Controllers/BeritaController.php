<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = Berita::latest()->paginate(5);
        return view('berita.index', [
            'beritas' => $berita,
            // 'slug' => 'judul-post-pertama'
            // 'berita' => Berita::latest()->get
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('gambar')->store('berita-images');
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|file|max:1024',
            'excerpt' => 'required',
            'body' => 'required',
            'published_at' => 'required'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('berita-images');
        }
        // $validatedData['gambar'] = $request->file('gambar')->store('berita-images');
        Berita::create($validatedData);
        return redirect('/berita')->with('status', 'berita telah ditambahkan');
    }
    // public static function find($id)
    // {
    //     return view('beritadetails', [
    //         "judul" => "pertama",
    //         "berita" => "Berita::find($id)"
    //     ]);
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($berita)
    {
        $berita = Berita::find($berita);
        return view('berita.show', [
            'berita' => $berita
        ]);

        //  return $berita;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $berita = Berita::find($id);
        return view('berita.edit', [
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        //
        // $validatedData['gambar'] = request()->file('gambar')->store('gambar');
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|file|max:1024',
            'excerpt' => 'required',
            'body' => 'required',
            'published_at' => 'required'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('berita-images');
        }
       
        Berita::where('id', $id)->update($validatedData);
        return redirect('/berita')->with('status', 'berita telah ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($berita)
    {
        // //
        // $post = Berita::find($berita);
        Berita::destroy($berita);
        return redirect('/berita')->with('success', 'data berhasil dihapus');
    }
}
