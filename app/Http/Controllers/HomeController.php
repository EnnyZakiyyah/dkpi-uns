<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Faq;


use App\Models\Pdln;
use App\Models\Mitra;
use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Peringkat;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $faq = Faq::get();
        $pengumuman = Pengumuman::whereDate('berlaku', '>=', today())->get();
        $berita = Berita::latest()->take(6)->get();

        return view('home.index',[
            'title' => 'DKPI',
            'pengumumans' => $pengumuman,
            'faqs' => $faq,
            'beritas' => $berita
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

    public function legaldrafting()
    {
        return view('home.layanan.legaldrafting', [
            "title" => "Legal Drafting",
        ]);
    }

    public function galeridetails( $id)
    {
        $galeri = Gallery::find($id)->get();
        return view('home.galeridetails',[
            'title' => 'detail gambar',
            'galeri' => $galeri
        ]);
    }

    public function berita()
    {
        $berita = Berita::get();
        return view('home.berita',[
            'title' => 'berita',
            'beritas' => $berita
        ]);

    }

    public function beritadetails(Berita $id)
    {
        // $berita = Berita::where('id', $id)->get();
        return view('home.beritadetails',[
            'title'=>'Detail Berita',
            'berita' => $id
        ]);
    }

    public function galeri()
    {
        $gallery =  Gallery::get();
        return view('home.galeri',[
            'title'=>'Galeri',
            'galleries' => $gallery
        ]);
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('home.faq',[
            'title'=>'FAQ',
            'faqs' => $faqs
        ]);

    }

    public function peringkat()
    {

        $thes = Peringkat::where('jenis', 'THES')->latest()->get();
        $qs = Peringkat::where('jenis', 'QSstar')->latest()->get();
        return view('home.peringkat',[
            'title'=>'peringkat',
            'thess' => $thes,
            'qss' => $qs
        ]);
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::whereDate('berlaku', '>=', today())->get();

        return view('home/pengumuman',[
            'title'=>'Pengumuman',
            'pengumumans' => $pengumuman
        ]);

    }

}
