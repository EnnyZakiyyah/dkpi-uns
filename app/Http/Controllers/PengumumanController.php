<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::whereDate('berlaku', '>=', today())->filter(request(['pengumuman']))->paginate(5)->withQueryString();

        $expired = Pengumuman::whereDate('berlaku', '<', today())->latest()->filter(request(['pengumuman']))->paginate(5)->withQueryString();

        return view('pengumuman.index',[
            'title' => 'Pengumuman',
            'active' => $pengumuman,
            'expired'=> $expired
        ]);
        // return $pengumuman;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
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
        $validatedData = $request->validate([
            'pengumuman'=>'required',
            'berlaku'=>'required',
            'link'=>'required',

        ]);
        Pengumuman::create($validatedData);

        return redirect('/pengumuman')->with('success', 'Data berhasil ditambah!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
        return view('pengumuman.show', [
            'pengumuman' => $pengumuman
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {

        return view('pengumuman.edit', [
            'pengumuman' => $pengumuman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
        $validatedData = $request->validate([
            'pengumuman'=>'required',
            'berlaku'=>'required',
            'link'=>'required',

        ]);
        Pengumuman::where('id', $pengumuman)->update($validatedData);

        return redirect('/pengumuman')->with('success', 'Data berhasil ditambah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
        Pengumuman::destroy($pengumuman);

        return redirect('/pengumuman')
        ->with('success', 'data berhasil dihapus');
    }
}
