<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengaduan = ContactUs::get();

        return view('pengaduan.index',[
            'pengaduans' => $pengaduan
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
        return view('pengaduan.create');

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
            'nama'=>'',
            'email'=>'',
            'subject'=>'',
            'message'=>'required'
            ]);

            Pengaduan::create($validatedData);

            return redirect('/');
            // ->with('success', 'Data berhasil ditambah!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $pengaduan)
    {
        //
        return view('pengaduan.show', [
            'pengaduan' => $pengaduan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
        return view('pengaduan.edit', [
            'pengaduan' => $pengaduan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
        Pengaduan::destroy($pengaduan);

        return redirect('/pengaduan')
        ->with('success', 'data berhasil dihapus');
    }
}
