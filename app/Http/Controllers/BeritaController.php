<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $berita = Berita::latest()->filter(request(['judul']))->paginate(5)->withQueryString();
        return view('berita.index', [
            'title' => 'Berita',
            'beritas' => $berita
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create',[
            'title' => 'Berita'
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
            'gambar' => 'image|file|max:1024',
            'body' => 'required',
            'published_at' => 'required'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('berita-images');
        } 

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Berita::create($validatedData);
        return redirect('/berita')->with('status', 'berita telah ditambahkan');
       
    }
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
            'title' => 'Berita',
            'berita' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', [
            'title' => 'Berita',
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
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            // 'gambar' => 'image|file|max:1024',
            // 'excerpt' => 'required',
            'body' => 'required',
            'published_at' => 'required'
        ]);
        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('berita-images');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
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
        Berita::destroy($berita);
        return redirect('/berita')->with('success', 'data berhasil dihapus');
    }
}
