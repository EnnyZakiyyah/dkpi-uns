<?php

namespace App\Http\Controllers;

use App\Models\Pdln;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PdlnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dosen = Pdln::where('jenis', 'dosen')->latest()->get();
        // $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->get();
        $pdln = Pdln::latest()->get();


        return view('pdln.index',[
            'title' => 'Data Pdln',
            'pdlns' => $pdln
            // 'mahasiswa' => $mahasiswa,
            // 'dosen' => $dosen,
            // 'pimpinan' => $pimpinan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdln.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_surat_uns = $request->file('file_surat_uns')->store('file_surat_uns');
        $file_belmawa = $request->file('file_belmawa')->store('file_belmawa');
        $file_ktln = $request->file('file_ktln')->store('file_ktln');

        $validatedData = $request->validate([
            'jenis' => '',
            'nama' => 'required',
            'jumlah_orang'=> 'required',
            'unit_kerja'=> 'required' ,
            'jangka_waktu_awal'=> 'required',
            'jangka_waktu_akhir'=> 'required',
            'tujuan'=> 'required',
            'negara'=> 'required',
            'surat_uns'=> 'required',
            'catatan_uns'=> 'required',
            'belmawa'=> 'required',
            'catatan_belmawa'=> 'required',
            'ktln_kemensetneg'=> 'required',
            'catatan_setneg'=> 'required'
        ]);

        $validatedData['file_surat_uns'] = $file_surat_uns;
        $validatedData['file_belmawa'] = $file_belmawa;
        $validatedData['file_ktln'] = $file_ktln;
        $validatedData['status_hidden'] = 'ada';
        $validatedData['status'] = 'ada';

        Pdln::create($validatedData);

        return redirect('/pdln')->with('success', 'Data berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pdln  $pdln
     * @return \Illuminate\Http\Response
     */
    public function show(Pdln $pdln)
    {
        // $file_surat_uns = Storage::get($pdln->file_surat_uns, $pdln->nama);
        // $file_belmawa = Storage::get($pdln->file_belmawa, $pdln->nama);
        // $file_ktln = Storage::get($pdln->file_ktln, $pdln->nama);

        return view('pdln.show',[
            'pdln' => $pdln
            // 'file_uns' => $file_surat_uns,
            // 'file_belmawa' => $file_belmawa,
            // 'file_ktln' => $file_ktln
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pdln  $pdln
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdln $pdln)
    {
        //
        return view('pdln.edit', [
            'pdln' => $pdln
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pdln  $pdln
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdln $pdln)
    {
        $validatedData = $request->validate([
            'jenis' => '',
            'nama' => 'required',
            'jumlah_orang'=> 'required',
            'unit_kerja'=> 'required' ,
            'jangka_waktu_awal'=> 'required',
            'jangka_waktu_akhir'=> 'required',
            'tujuan'=> 'required',
            'negara'=> 'required',
            'surat_uns'=> 'required',
            'catatan_uns'=> 'required',
            'belmawa'=> 'required',
            'catatan_belmawa'=> 'required',
            'ktln_kemensetneg'=> 'required',
            'catatan_setneg'=> 'required'
        ]);

        Pdln::where('id', $pdln->id)->update($validatedData);
        return redirect('/pdln')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdln  $pdln
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdln $pdln)
    {
        Pdln::destroy($pdln);
        return redirect('/pdln')->with('status', 'data berhasil dihapus');
    }

    public function mahasiswa(){

        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->latest()->get();

        return view('pdln.index',[
            'pdlns' => $mahasiswa
        ]);
    }
    public function dosen(){

        $dosen = Pdln::where('jenis', 'dosen')->latest()->get();

        return view('pdln.index',[
            'pdlns' => $dosen
        ]);
    }
    public function pimpinan(){

        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->get();

        return view('pdln.index',[
            'pdlns' => $pimpinan
        ]);
    }
}
