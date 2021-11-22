<?php

namespace App\Http\Controllers;

use App\Models\Pdln;
use App\Models\Mitra;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
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
        $yayasan = Mitra::where('instansi', 'yayasan')->latest()->get();
        $cv = Mitra::where('instansi', 'cv')->latest()->get();
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
        return view('home.layanan');
    }

    public function legaldrafting()
    {
        return view('home.layanan.legaldrafting', [
            "title" => "Legal Drafting",
        ]);
    }

    public function galeridetails()
    {
        return view('home.galeridetails');
    }

    public function berita()
    {
        return view('home.berita');
    }

    public function beritadetails()
    {
        return view('home.beritadetails');
    }

    public function galeri()
    {
        return view('home.galeri');
    }

    public function peringkat()
    {
        return view('home.peringkat');
    }
}
