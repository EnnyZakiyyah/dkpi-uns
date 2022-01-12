<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreLayananRequest;
use App\Http\Requests\UpdateLayananRequest;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan.index',[
            'title' => 'layanan'
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mou = '';
        $pks = '';
        $id = 1;
        if ($request->file('mou')){
            $mou = $request->file('mou')->store('mou');
            }
        if ($request->file('pks')){
            $pks = $request->file('pks')->store('pks');
            }

            $validatedData['ketentuan_pks'] = $pks;
            $validatedData['ketentuan_mou'] = $mou;
            Layanan::where('id', $id)->update($validatedData);

            return redirect('/layanan')->with('success', 'Data berhasil diubah!');
    }
    public function ketentuan_mou()
    {
        $id = 1;
        $file = Layanan::find(1);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->ketentuan_mou, 'ketentuan MoU.docx');
        // return $file;
    }
    public function ketentuan_pks()
    {
        $file = Layanan::find(1);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->ketentuan_pks, 'ketentuan PKS.docx');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLayananRequest  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLayananRequest $request, Layanan $layanan)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        //
    }

}
