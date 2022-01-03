<?php

namespace App\Http\Controllers;

use App\Models\Pdln;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\PdlnImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\ExcelMatch;

class PdlnController extends Controller
{

    public function __construct()
    {
        $status = ['status'=>'tidak berlaku'];
        $pdln = Pdln::where('status','berlaku')->whereDate('jangka_waktu_akhir', '<=', today())->update($status);
        return $pdln;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dosen = Pdln::where('jenis', 'dosen')->latest()->get();
        // $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->get();
        $pdln = Pdln::latest()->filter(request(['nama']))->paginate(5)->withQueryString();


        return view('pdln.index', [
            'title' => 'Data PDLN',
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
        return view('pdln.create',[
            'title' => 'Data PDLN'
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
        // Excel::import(new PdlnImport, request()->file('file_surat_uns'));
        $file_surat_uns = '';
        $file_belmawa = '';
        $file_ktln = '';

        $validatedData = $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'jumlah_orang'=> 'required',
            'unit_kerja'=> 'required' ,
            'jangka_waktu_awal'=> 'required',
            'jangka_waktu_akhir'=> 'required',
            'tujuan'=> 'required',
            'negara'=> 'required',
            'surat_uns'=> '',
            'catatan_uns'=> '',
            'belmawa'=> '',
            'catatan_belmawa'=> '',
            'ktln_kemensetneg'=> '',
            'catatan_setneg'=> ''
        ]);

        $validatedData['token'] = $this->code();
        if($request->file('file_surat_uns')){
        $file_surat_uns = $request->file('file_surat_uns')->store('file_surat_uns');
        }
        if ($request->file('file_belmawa')){
        $file_belmawa  = $request->file('file_belmawa')->store('file_belmawa');
        }
        if ($request->file('file_ktln')){
        $file_ktln = $request->file('file_ktln')->store('file_ktln');
        }

        $validatedData['file_surat_uns'] = $file_surat_uns;
        $validatedData['file_belmawa'] = $file_belmawa;
        $validatedData['file_ktln'] = $file_ktln;
        $validatedData['status_hidden'] = 'berlaku';
        $validatedData['status'] = 'diterima';

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

        return view('pdln.show', [
            'title' => 'Data PDLN',
            'pdln' => $pdln
            // 'file_uns' => $file_surat_uns,
            // 'file_belmawa' => $file_belmawa,
            // 'file_ktln' => $file_ktln
        ]);


        // return $pdln;
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
            'title' => 'Data PDLN',
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
    public function update(Request $request, $pdln)
    {
        $validatedData = $request->validate([
            'jenis' => '',
            'nama' => 'required',
            'jumlah_orang' => 'required',
            'unit_kerja' => 'required',
            'jangka_waktu_awal' => 'required',
            'jangka_waktu_akhir' => 'required',
            'tujuan' => 'required',
            'negara' => 'required',
            'surat_uns' => '',
            'catatan_uns' => '',
            'belmawa' => '',
            'catatan_belmawa' => '',
            'ktln_kemensetneg' => '',
            'catatan_setneg' => '',
            'status' => 'required'
        ]);
        if ($request->file('file_surat_uns')){
            $validatedData['file_surat_uns'] = $request->file('file_surat_uns')->store('file_surat_uns');
            }
        if ($request->file('file_belmawa')){
            $validatedData['file_belmawa']  = $request->file('file_belmawa')->store('file_belmawa');
            }
        if ($request->file('file_ktln')){
            $validatedData['file_ktln'] = $request->file('file_ktln')->store('file_ktln');
            }

        Pdln::where('id', $pdln)->update($validatedData);
        return redirect('/pdln')->with('status', 'data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pdln  $pdln
     * @return \Illuminate\Http\Response
     */
    public function destroy($pdln)
    {
        // return $pdln;
        Pdln::destroy($pdln);
        return redirect('/pdln')->with('status', 'data berhasil dihapus');
    }

    public function jenis($jenis)
    {

        $jenis = Pdln::where('jenis', $jenis)->latest()->paginate(5)->withQueryString();

        return view('pdln.index', [
            'title' => 'Data PDLN',
            'pdlns' => $jenis
        ]);
    }
    public function import()
    {
        // Excel::import(new PdlnImport, 'pdln.xlsx');
        Excel::import(new PdlnImport, 'pdlns.xlsx');


        return redirect('/pdln')->with('success', 'All good!');
    }
    public function uns($id)
    {
        $file = Pdln::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->file_surat_uns);
    }
    public function belmawa($id)
    {
        $file = Pdln::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->file_belmawa);
    }
    public function ktln($id)
    {
        $file = Pdln::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
         ];
        return Storage::download($file->file_ktln);
    }
    public function code()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Pdln::where("token", "=", $code)->first());

        return $code;
    }
}
