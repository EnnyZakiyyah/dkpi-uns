<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mitra;
use App\Imports\MitraImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    public function __construct()
    {
        $mitra = Mitra::where('status_hidden','new')->get();
        foreach( $mitra as $mit){

           $date = Carbon::parse($mit->jangka_waktu_akhir);
        $days = today()->diffInDays($date);
            if($date < today()){
                    $status = ['status'=>'tidak berlaku'];
                    Mitra::where('id', $mit->id)->update($status);
            }else if($days < 90){
                    $status = ['status'=>'segera berakhir'];
                    Mitra::where('id', $mit->id)->update($status);
            }else if($days > 90){
                    $status = ['status'=>'berlaku'];
                    Mitra::where('id', $mit->id)->update($status);
            }
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mitra = Mitra::latest()->filter(request(['nama_instansi']))->paginate(5)->withQueryString();

        return view('mitra.index', [
            'title' => 'Data Mitra',
            'mitras' => $mitra
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.create',[
            'title' => 'Data Mitra'
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
         if ($request->file('file_mou')){
        $file_mou = $request->file('file_mou')->store('file_mou');
        }
        $validatedData = $request->validate([
            'instansi' => 'required',
            'nama_instansi' => 'required',
            'no_mou_uns' => 'required',
            'no_mou_mitra' => 'required',
            'ruang_lingkup' => 'required',
            'jangka_waktu_awal' => 'required',
            'jangka_waktu_akhir' => 'required',
            'pejabat_penandatangan' => 'required',
            'file_mou' =>''
        ]);
        $validatedData['file_mou'] = $file_mou;
        $validatedData['status_hidden'] = 'new';
        $validatedData['status'] = 'berlaku';

        $validatedData['token'] = $this->code();

        Mitra::create($validatedData);

        return redirect('/mitra')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mitra = Mitra::find($id);
        return view('mitra.show', [
            'title' => 'Data Mitra',
            'mitra' =>  $mitra
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit($mitra)
    {
        $data = Mitra::find($mitra);
        return view('mitra.edit', [
            'title' => 'Data Mitra',
            'mitra' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mitra)
    {
        $validatedData = request()->validate([
            'instansi' => '',
            'nama_instansi' => 'required',
            'no_mou_uns' => 'required',
            'no_mou_mitra' => 'required',
            'ruang_lingkup' => 'required',
            'jangka_waktu_awal' => 'required',
            'jangka_waktu_akhir' => 'required',
            'pejabat_penandatangan' => 'required',
            'file_mou' => '',
            'status_hidden' => '',
            'status' => ''
        ]);
        if ($request->file('file_mou')){
            $validatedData['file_mou'] = $request->file('file_mou')->store('file_mou');
            }
        // $validatedData['file_mou'] = $file_mou;
        Mitra::where('id', $mitra)->update($validatedData);
        return redirect('/mitra')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy($mitra)
    {
        Mitra::destroy($mitra);
        return redirect('/mitra')->with('status', 'data berhasil dihapus');
    }

    public function instansi($instansi)
    {
        $instansi = Mitra::where('instansi', $instansi)->latest()->paginate(5)->withQueryString();
        return view('mitra.index', [
            'title' => 'Data Mitra',
            'mitras' => $instansi
        ]);
    }

    public function import()
    {
        Excel::import(new MitraImport, 'mitra.xlsx');
        return redirect('/mitra')->with('success', 'All good!');
    }
    public function mou($id)
    {
        $file = Mitra::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->file_mou);
    }

    public function code()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Mitra::where("token", "=", $code)->first());

        return $code;
    }





    // public function cv(){

    //     $cv = Mitra::where('instansi', 'cv')->latest()->get();

    //     return view('mitra.index',[
    //         'mitra' => $cv
    //     ]);
    // }
    // public function yayasan(){

    //     $yayasan = Mitra::where('instansi', 'yayasan')->latest()->get();

    //     return view('mitra.index',[
    //         'mitra' => $yayasan
    //     ]);
    // }
    // public function internasional(){

    //     $internasional = Mitra::where('instansi', 'internasional')->latest()->get();

    //     return view('mitra.index',[
    //         'mitra' => $internasional
    //     ]);
    // }
    // public function jasaKeuangan(){

    //     $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->get();

    //     return view('mitra.index',[
    //         'mitra' => $jasaKeuangan
    //     ]);
    // }
    // public function pemerintah(){

    //     $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->get();

    //     return view('mitra.index',[
    //         'mitra' => $pemerintah
    //     ]);
    // }

}
