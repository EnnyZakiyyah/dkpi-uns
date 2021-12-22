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
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index()
    {
        $faq = Faq::get();
        $pengumuman = Pengumuman::whereDate('berlaku', '>=', today())->get();
        $berita = Berita::latest()->take(3)->get();

        return view('home.index',[
            'title' => 'DKPI',
            'pengumumans' => $pengumuman,
            'faqs' => $faq,
            'beritas' => $berita
        ]);
    }

    public function pdln()
    {

        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->paginate(15);
        $dosen = Pdln::where('jenis', 'dosen')->latest()->paginate(15);
        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->paginate(15);

        return view('home.pdln', [
            'title' => 'data PDLN',
            'mahasiswas' => $mahasiswa,
            'dosens' => $dosen,
            'pimpinans' => $pimpinan
        ]);
    }
    public function pdlndetails($id)
    {
        $pdln = Pdln::find($id);

        return view('home.pdlndetails',[
            'title' => 'detail pdln',
            'pdlns' => $pdln
        ]);
    }

    public function mitra()
    {
        // $yayasan = Mitra::where('instansi', 'yayasan')->latest()->get();
        $cv = Mitra::where('instansi', 'cv')->latest()->paginate(20);
        $yayasan = Mitra::where('instansi', 'yayasan')->latest()->paginate(20);
        $internasional = Mitra::where('instansi', 'internasional')->latest()->paginate(20);
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->paginate(20);
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->paginate(20);

        return view('home.mitra', [
            'title' => 'data Mitra',
            'yayasans' => $yayasan,
            'cvs' => $cv,
            'internasionals' => $internasional,
            'jasaKeuangans' => $jasaKeuangan,
            'pemerintahs' => $pemerintah
        ]);
    }
    public function mitradetails($id)
    {
        $mitra = Mitra::find($id);

        return view('home.mitradetails',[
            'title' => 'detail mitra',
            'mitra' => $mitra
        ]);
        // return $mitra;
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

    public function beritadetails($id)
    {
        $berita = Berita::where('id', $id)->get();
        return view('home.beritadetails',[
            'title'=>'Detail Berita',
            'berita' => $berita
        ]);
        // return $berita;
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

<<<<<<< Updated upstream
=======
    public function yayasan(){
        $yayasan = Mitra::where('instansi', 'yayasan')->paginate(5)->withQueryString();

        return view('home.mitra.yayasan',[
            'title' => 'yayasan',
            'yayasans' => $yayasan
        ]);
        // return $yayasan;
    }
    public function internasional(){
        $internasional = Mitra::where('instansi', 'internasional')->paginate(5)->withQueryString();

        return view('home.mitra.internasional',[
            'title' => 'internasional',
            'internasionals' => $internasional
        ]);
        // return $yayasan;
    }
    public function cv(){
        $cv = Mitra::where('instansi', 'cv')->paginate(5)->withQueryString();

        return view('home.mitra.cv',[
            'title' => 'cv',
            'cvs' => $cv
        ]);
        // return $yayasan;
    }
    public function jasaKeuangan(){
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->paginate(5)->withQueryString();

        return view('home.mitra.jasaKeuangan',[
            'title' => 'jasaKeuangan',
            'jasaKeuangans' => $jasaKeuangan
        ]);
        // return $yayasan;
    }
        public function pemerintah(){
        $pemerintah = Mitra::where('instansi', 'pemerintah')->paginate(5)->withQueryString();

        return view('home.mitra.pemerintah',[
            'title' => 'pemerintah',
            'pemerintahs' => $pemerintah
        ]);
        // return $yayasan;
    }
>>>>>>> Stashed changes
}
