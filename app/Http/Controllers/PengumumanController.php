<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        // $pengumuman->pengumuman = Str::limit($pengumuman->pengumuman, 50);

        $expired = Pengumuman::whereDate('berlaku', '<', today())->latest()->filter(request(['pengumuman']))->paginate(5)->withQueryString();

        return view('pengumuman.index', [
            'title' => 'Pengumuman',
            'active' => $pengumuman,
            // 'expired' => $expired
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create', [
            'title' => 'Pengumuman'
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
        $file_download = 'null';
        $validatedData = $request->validate([
            'pengumuman' => 'required',
            'judul' => 'required',
            'berlaku' => 'required',
            'link' => ''
        ]);
        if ($request->file('file_download')) {
            $validatedData['file_download'] = $request->file('file_download')->store('file_pengumuman');
        }
        // $validatedData['file_download'] = $file_download;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->pengumuman), 100);
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
        return view('pengumuman.show', [
            'title' => 'Pengumuman',
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
            'title' => 'Pengaduan',
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
    public function update(Request $request, $pengumuman)
    {
        $validatedData = $request->validate([
            'pengumuman' => 'required',
            'judul' => 'required',
            'berlaku' => 'required',
            'link' => ''

        ]);
        if ($request->file('file_download')) {
            $validatedData['file_download'] = $request->file('file_download')->store('file_pengumuman');
        }
        // $validatedData['file_download'] = $file_download;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->pengumuman), 100);
        Pengumuman::where('id', $pengumuman)->update($validatedData);

        return redirect('/pengumuman')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy($pengumuman)
    {
        Pengumuman::destroy($pengumuman);

        return redirect('/pengumuman')
            ->with('success', 'data berhasil dihapus');
    }
    public function download($id)
    {
        $file = Pengumuman::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
            // 'Content-Disposition' => 'inline; filename="'.$id.'"'
        ];
        return Storage::download($file->file_download);
    }

    public function pengumuman($id)
    {
        $file = Pengumuman::find($id);
        $headers = [
            'Content-Type' => 'application/pdf',
            // 'Content-Disposition' => 'inline; filename="'.$id.'"'
        ];
        return Storage::download($file->file_download);
    }
}
