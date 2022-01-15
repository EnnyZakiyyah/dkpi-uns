<?php

namespace App\Http\Controllers;

use App\Models\Peringkat;
use Illuminate\Http\Request;

class PeringkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thes =  Peringkat::where('jenis', 'THES')->get();
        $qs = Peringkat::where('jenis', 'QSstar')->get();
        return view('peringkat.index', [
            'title' => 'Peringkat',
            'thes' => $thes,
            'qs' => $qs
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
        return view('peringkat.create', [
            'title' => 'Peringkat'
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function show(Peringkat $peringkat)
    {
        //
        return view('peringkat.show', [
            'title' => 'Peringkat',
            'peringkat' => $peringkat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Peringkat $peringkat)
    {
        //

        return view('peringkat.edit', [
            'title' => 'Peringkat',
            'peringkat' => $peringkat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peringkat $peringkat)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'peringkat' => 'required',
            'link' => '',
            'berita' => 'required'
        ]);
        Peringkat::where('id', $peringkat->id)->update($validatedData);
        return redirect('/peringkat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peringkat $peringkat)
    {
        //
        Peringkat::destroy($peringkat);

        return redirect('/peri$peringkat')
            ->with('success', 'data berhasil dihapus');
    }
}
