<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use App\Models\Pdln;


use App\Models\Mitra;
use App\Models\Berita;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $faq = Faq::get();
        $pengumuman = Pengumuman::get();
        $berita = Berita::get();

        return view('home.index',[
            'title' => 'DKPI',
            'pengumumans' => $pengumuman,
            'faqs' => $faq
        ]);
    }

    public function pdln()
    {

        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->get();
        $dosen = Pdln::where('jenis', 'dosen')->latest()->get();
        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->get();

        return view('home.pdln', [
            'title' => 'data PDLN',
            'mahasiswas' => $mahasiswa,
            'dosens' => $dosen,
            'pimpinans' => $pimpinan
        ]);
    }

    public function mitra()
    {
        // $yayasan = Mitra::where('instansi', 'yayasan')->latest()->get();
        $cv = Mitra::where('instansi', 'cv')->latest()->get();
        $yayasan = Mitra::where('instansi', 'yayasan')->latest()->get();
        $internasional = Mitra::where('instansi', 'internasional')->latest()->get();
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->get();
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->get();

        return view('home.mitra', [
            'title' => 'data Mitra',
            'yayasans' => $yayasan,
            'cvs' => $cv,
            'internasionals' => $internasional,
            'jasaKeuangans' => $jasaKeuangan,
            'pemerintahs' => $pemerintah
        ]);
    }

    public function layanan()
    {
        return view('home.layanan',[
            'title'=>'layanan'
        ]);
    }

    public function faq()
    {
        return view('home.faq',[
            'title'=>'FAQ'
        ]);
    }
    public function berita()
    {
        return view('home.berita',[
            'title'=>'berita'
        ]);
    }
    public function galeri()
    {
        return view('home.galeri',[
            'title'=>'galeri'
        ]);
    }
    public function peringkat()
    {
        return view('home.peringkat',[
            'title'=>'peringkat'
        ]);
    }
    public function pengumuman()
    {
        return view('home.pengumuman',[
            'title'=>'pengumuman'
        ]);
    }
}
