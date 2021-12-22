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
        $berita = Berita::latest()->take(6)->paginate(3);


        return view('home.index', [
            'title' => 'DKPI',
            'pengumumans' => $pengumuman,
            'faqs' => $faq,
            'beritas' => $berita
        ]);
    }

    public function pdln()
    {

        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->paginate(5);
        $dosen = Pdln::where('jenis', 'dosen')->latest()->paginate(5);
        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->paginate(5);

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
        // $mitras = Mitra::latest();
        // dd(request('nama_instansi'));

        $cv = Mitra::where('instansi', 'cv')->latest()->filter(['nama_instansi'])->paginate(5)->withQueryString();
        $yayasan = Mitra::where('instansi', 'yayasan')->latest()->filter(['nama_instansi'])->paginate(5)->withQueryString();
        $internasional = Mitra::where('instansi', 'internasional')->latest()->filter(['nama_instansi'])->paginate(5)->withQueryString();
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->filter(['nama_instansi'])->paginate(5)->withQueryString();
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->filter(['nama_instansi'])->paginate(5)->withQueryString();

        return view('home.mitra', [
            'title' => 'data Mitra',
            // 'mitras' => $mitras->get(),
            'yayasans' => $yayasan,
            'cvs' => $cv,
            'internasionals' => $internasional,
            'jasaKeuangans' => $jasaKeuangan,
            'pemerintahs' => $pemerintah
        ]);
    }

    public function layanan()
    {
        return view('home.layanan', [
            'title' => 'layanan'
        ]);
    }

    public function legaldrafting()
    {
        return view('home.layanan.legaldrafting', [
            "title" => "Legal Drafting",
        ]);
    }

    public function galeridetails($id)
    {
        $galeri = Gallery::find($id)->get();
        return view('home.galeridetails', [
            'title' => 'detail gambar',
            'galeri' => $galeri
        ]);
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(3);
        return view('home.berita', [
            'title' => 'berita',
            'beritas' => $berita
        ]);
    }

    public function beritadetails($id)
    {
        $berita = Berita::where('id', $id)->get();
        return view('home.beritadetails', [
            'title' => 'Detail Berita',
            'berita' => $berita
        ]);
        // return $berita;
    }

    public function galeri()
    {
        $gallery =  Gallery::get();
        return view('home.galeri', [
            'title' => 'Galeri',
            'galleries' => $gallery
        ]);
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('home.faq', [
            'title' => 'FAQ',
            'faqs' => $faqs
        ]);
    }

    public function peringkat()
    {

        $thes = Peringkat::where('jenis', 'THES')->latest()->get();
        $qs = Peringkat::where('jenis', 'QSstar')->latest()->get();
        return view('home.peringkat', [
            'title' => 'peringkat',
            'thess' => $thes,
            'qss' => $qs
        ]);
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::whereDate('berlaku', '>=', today())->get();

        return view('home/pengumuman', [
            'title' => 'Pengumuman',
            'pengumumans' => $pengumuman
        ]);
    }
}
