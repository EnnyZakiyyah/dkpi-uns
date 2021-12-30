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
        $berita = Berita::latest()->take(6)->paginate(3);
        $gallery = Gallery::latest()->take(9);


        return view('home.index', [
            'title' => 'DKPI',
            'pengumumans' => $pengumuman,
            'faqs' => $faq,
            'beritas' => $berita,
            'galleries' => $gallery
        ]);
    }

    public function pdln()
    {

        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->latest()->paginate(5);
        $dosen = Pdln::where('jenis', 'dosen')->latest()->paginate(5);
        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->paginate(5);

        return view('home.pdln', [
            'title' => 'Data PDLN',
            'mahasiswas' => $mahasiswa,
            'dosens' => $dosen,
            'pimpinans' => $pimpinan
        ]);
    }
    public function pdlndetails($id)
    {
        $pdln = Pdln::find($id);

        return view('home.pdlndetails', [
            'title' => 'Details PDLN',
            'pdln' => $pdln
        ]);
    }

    public function mitra()
    {
        // $yayasan = Mitra::where('instansi', 'yayasan')->latest()->get();
        // $mitras = Mitra::latest();
        // dd(request('nama_instansi'));

        $cv = Mitra::where('instansi', 'cv')->latest()->paginate(5)->withQueryString();
        $yayasan = Mitra::where('instansi', 'yayasan')->latest()->paginate(5)->withQueryString();
        $internasional = Mitra::where('instansi', 'internasional')->latest()->paginate(5)->withQueryString();
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->paginate(5)->withQueryString();
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->paginate(5)->withQueryString();

        return view('home.mitra', [
            'title' => 'Data Mitra',
            // 'mitras' => $mitras->get(),
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

        return view('home.mitradetails', [
            'title' => 'Detail Mitra',
            'mitra' => $mitra
        ]);
        // return $mitra;
    }

    public function layanan()
    {
        return view('home.layanan', [
            'title' => 'Layanan'
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
        $galeri = Gallery::find($id);
        return view('home.galeridetails', [
            'title' => 'Detail Galeri',
            'galeri' => $galeri
        ]);
        // return $galeri;
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(3);
        return view('home.berita', [
            'title' => 'Berita',
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
        return view('home.galeri.gambar', [
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
            'title' => 'Peringkat',
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

    public function yayasan()
    {

        $yayasan = Mitra::latest()->where('instansi', 'yayasan')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();
        return view('home.mitra.yayasan', [
            'title' => 'Sekolah/Yayasan',
            'yayasans' => $yayasan


        ]);
    }
    public function internasional()
    {
        $internasional = Mitra::where('instansi', 'internasional')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.internasional', [
            'title' => 'Internasional',
            'internasionals' => $internasional
        ]);
        // return $yayasan;
    }
    public function cv()
    {
        $cv = Mitra::where('instansi', 'cv')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.cv', [
            'title' => 'CV/PT',
            'cvs' => $cv
        ]);
        // return $yayasan;
    }
    public function jasaKeuangan()
    {
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.jasaKeuangan', [
            'title' => 'Jasa Keuangan',
            'jasaKeuangans' => $jasaKeuangan
        ]);
        // return $yayasan;
    }
    public function pemerintah()
    {
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.pemerintah', [
            'title' => 'Pemerintah',
            'pemerintahs' => $pemerintah
        ]);
        // return $yayasan;
    }
    public function mahasiswa()
    {
        // $date = empty(strtotime($pdln->jangka_waktu_awal)) ? $pdln->jangka_waktu_awal : Carbon::parse(date('Y-m-d', strtotime($pdln->jangka_waktu_awal)))->isoFormat('D MMMM Y');
        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->latest()->filter(request(['nama', 'jangka_waktu_awal', 'jangka_waktu_akhir', 'negara']))->paginate(5)->withQueryString();;

        return view('home.pdln.mahasiswa', [
            'title' => 'PDLN-Mahasiswa',
            'mahasiswas' => $mahasiswa
        ]);
    }
    public function dosen()
    {
        $dosen = Pdln::where('jenis', 'dosen')->latest()->filter(request(['nama', 'jangka_waktu_awal', 'jangka_waktu_akhir', 'negara']))->paginate(5)->withQueryString();;

        return view('home.pdln.dosen', [
            'title' => 'PDLN-Dosen',
            'dosens' => $dosen
        ]);
    }
    public function pimpinan()
    {
        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->filter(request(['nama', 'jangka_waktu_awal', 'jangka_waktu_akhir', 'negara']))->paginate(5)->withQueryString();;

        return view('home.pdln.pimpinan', [
            'title' => 'PDLN-Pimpinan',
            'pimpinans' => $pimpinan
        ]);
    }

    public function thes()
    {
        $thes = Peringkat::where('jenis', 'THES')->latest()->get();
        return view('home.peringkat.thes', [
            'title' => 'Peringkat-THES',
            'thess' => $thes
        ]);
    }
    public function qstar()
    {
        $qs = Peringkat::where('jenis', 'QSstar')->latest()->get();
        return view('home.peringkat.qstar', [
            'title' => 'Peringkat-QStar',
            'qss' => $qs
        ]);
    }
    public function gambar()
    {
        $galeri = Gallery::where('jenis', 'gambar')->latest()->get();
        // return $galeri;
        return view('home.galeri.gambar', [
            'title' => 'Galeri-Gambar',
            'galleries' => $galeri
        ]);
    }
    public function video()
    {
        $galeri = Gallery::where('jenis', 'video')->latest()->get();
        // return $galeri;
        return view('home.galeri.video', [
            'title' => 'Galeri-Video',
            'galleries' => $galeri
        ]);
    }
}
