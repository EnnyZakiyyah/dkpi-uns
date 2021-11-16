<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra = Mitra::latest()->get();

        return view('mitra.index', [
            'mitra' => $mitra
        ]);
        // $yayasan = Mitra::where('jenis', 'yayasan')->latest()->get();
        // $cv = Mitra::where('jenis', 'cv')->latest()->get();
        // $internasional = Mitra::where('jenis', 'internasional')->latest()->get();
        // $jasa_keuangan = Mitra::where('jenis', 'jasa_keuangan')->latest()->get();
        // $pemerintah = Mitra::where('jenis', 'pemerintah')->latest()->get();

        // return view('mitra.index',[
        //     'yayasan' => $yayasan,
        //     'cv' => $cv,
        //     'internasional' => $internasional,
        //     'jasa_keuangan' => $jasa_keuangan,
        //     'pemerintah' => $pemerintah
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mitra.create');

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
        // $file_mou = $request->file('file_mou')->store('file_mou');

        $validatedData = $request->validate([
        'instansi' => '',
        'nama_instansi' =>'required',
        'no_mou_uns' =>'required',
        'no_mou_mitra' =>'required',
        'ruang_lingkup' =>'required',
        'jangka_waktu_awal' =>'required',
        'jangka_waktu_akhir' =>'required',
        'pejabat_penandatangan' =>'required',
        'file_mou' =>'',
        'status_hidden' =>''
        ]);



        Mitra::create($validatedData);

        return redirect('/mitra')->with('success', 'Data berhasil ditambah!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $mitra)
    {
        //
        return view('mitra.show',[
            'mitra' =>  $mitra
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        //
        return view('mitra.edit',[
            'mitra' => $mitra
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mitra $mitra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        //
        Mitra::destroy($mitra);
        return redirect('/mitra')->with('status', 'data berhasil dihapus');

    }
}
