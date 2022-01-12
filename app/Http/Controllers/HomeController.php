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
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\Header;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    //
    public function index()
    {
        $faq = Faq::get();
        $pengumuman = Pengumuman::whereDate('berlaku', '>=', today())->get();
        $berita = Berita::latest()->take(6)->paginate(3);
        $gallery = Gallery::latest()->take(9);
        $header = Header::latest()->get();


        return view('home.index', [
            'title' => 'DKPI',
            'pengumumans' => $pengumuman,
            'faqs' => $faq,
            'beritas' => $berita,
            'galleries' => $gallery,
            'headers' => $header
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
            'code' => 'no',
            'pdln' => $pdln
        ]);
    }
    public function pdlntoken(Request $request, $id)
    {
        $code = $request->token;
        $check = Pdln::find($id);

        if ($check->token == $code) {
            return $this->pdlnacc($id, $code);
        } else {
            return back()->with('key', 'kode salah');
        }
    }
    public function pdlnacc($id, $code)
    {
        $pdln = Pdln::find($id);

        return view('home.pdlndetails', [
            'title' => 'Details PDLN',
            'code' => $code,
            'pdln' => $pdln
        ]);
    }

    public function mitra()
    {
        $cv = Mitra::where('instansi', 'cv')->latest()->paginate(5)->withQueryString();
        $yayasan = Mitra::where('instansi', 'yayasan')->latest()->paginate(5)->withQueryString();
        $internasional = Mitra::where('instansi', 'internasional')->latest()->paginate(5)->withQueryString();
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->paginate(5)->withQueryString();
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->paginate(5)->withQueryString();

        return view('home.mitra', [
            'title' => 'Data Mitra',
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
    }

    public function mitratoken(Request $request, $id)
    {
        $code = $request->token;
        $check = Mitra::find($id);

        if ($check->token == $code) {
            $headers = [
                'Content-Type' => 'application/pdf',
            ];
            return Storage::download($check->file_mou);
        } else {
            return back()->with('gagal', 'kode salah');
        }
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

    public function layanan()
    {
        return view('home.layanan', [
            'title' => 'Layanan'
        ]);
    }

    public function legaldrafting()
    {
        $file = Layanan::find(1);
        return view('home.layanan.legaldrafting', [
            "title" => "Legal Drafting",
            'file' => '$file'
        ]);
    }

    public function galeridetails($id)
    {
        $galeri = Gallery::find($id);
        return view('home.galeridetails', [
            'title' => 'Detail Galeri',
            'galeri' => $galeri
        ]);
    }

    public function pengumumandetails($id)
    {
        $pengumuman = Pengumuman::find($id);
        return view('home.pengumumandetails', [
            'title' => 'Detail Pengumuman',
            'pengumuman' => $pengumuman
        ]);
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(3);
        return view('home.berita', [
            'title' => 'Berita',
            'beritas' => $berita
        ]);
    }

    // public function header()
    // {
    //     // $faqs = Faq::get();
    //     // return view('home.faq', [
    //     //     'title' => 'FAQ',
    //     //     'faqs' => $faqs
    //     // ]);
    //     $header = Header::get();
    //     return view('home.header', [
    //         'title' => 'Header',
    //         'headers' => $header
    //     ]);
    // }

    public function beritadetails($id)
    {
        $berita = Berita::where('id', $id)->get();
        return view('home.beritadetails', [
            'title' => 'Detail Berita',
            'berita' => $berita
        ]);
    }

    public function galeri()
    {
        $gallery = Header::get();
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
            'title' => 'Data Mitra',
            'yayasans' => $yayasan
        ]);
    }
    public function internasional()
    {
        $internasional = Mitra::where('instansi', 'internasional')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.internasional', [
            'title' => 'Data Mitra',
            'internasionals' => $internasional
        ]);
    }
    public function cv()
    {
        $cv = Mitra::where('instansi', 'cv')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.cv', [
            'title' => 'Data Mitra',
            'cvs' => $cv
        ]);
    }
    public function jasaKeuangan()
    {
        $jasaKeuangan = Mitra::where('instansi', 'jasaKeuangan')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.jasaKeuangan', [
            'title' => 'Data Mitra',
            'jasaKeuangans' => $jasaKeuangan
        ]);
    }
    public function pemerintah()
    {
        $pemerintah = Mitra::where('instansi', 'pemerintah')->latest()->filter(request(['nama_instansi', 'pejabat_penandatangan', 'jangka_waktu_awal', 'jangka_waktu_akhir']))->paginate(5)->withQueryString();

        return view('home.mitra.pemerintah', [
            'title' => 'Data Mitra',
            'pemerintahs' => $pemerintah
        ]);
    }
    public function mitradelete($id)
    {
        //
        Mitra::destroy($id);
        return redirect('home/mitra-cv')->with('status', 'data berhasil dihapus');
    }
    public function mahasiswa()
    {
        $mahasiswa = Pdln::where('jenis', 'mahasiswa')->latest()->filter(request(['nama', 'jangka_waktu_awal', 'jangka_waktu_akhir', 'negara']))->paginate(5)->withQueryString();
        return view('home.pdln.mahasiswa', [
            'title' => 'Data PDLN',
            'mahasiswas' => $mahasiswa
        ]);
    }
    public function dosen()
    {
        $dosen = Pdln::where('jenis', 'dosen')->latest()->filter(request(['nama', 'jangka_waktu_awal', 'jangka_waktu_akhir', 'negara']))->paginate(5)->withQueryString();;

        return view('home.pdln.dosen', [
            'title' => 'Data PDLN',
            'dosens' => $dosen
        ]);
    }
    public function pimpinan()
    {
        $pimpinan = Pdln::where('jenis', 'pimpinan')->latest()->filter(request(['nama', 'jangka_waktu_awal', 'jangka_waktu_akhir', 'negara']))->paginate(5)->withQueryString();;

        return view('home.pdln.pimpinan', [
            'title' => 'Data Mitra',
            'pimpinans' => $pimpinan
        ]);
    }
    public function pdlndelete($id)
    {
        Pdln::destroy($id);
        return redirect('home/pdln-mahasiswa')->with('status', 'data berhasil dihapus');
    }

    public function thes()
    {
        $thes = Peringkat::where('jenis', 'THES')->latest()->get();
        return view('home.peringkat.thes', [
            'title' => 'Peringkat',
            'thess' => $thes
        ]);
    }
    public function qstar()
    {
        $qs = Peringkat::where('jenis', 'QSstar')->latest()->get();
        return view('home.peringkat.qstar', [
            'title' => 'Peringkat',
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
        return view('home.galeri.video', [
            'title' => 'Galeri-Video',
            'galleries' => $galeri
        ]);
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
    public function headers()
    {
        $header = Header::latest()->get();
        return view('home.header', [
            'title' => 'header',
            'headers' => $header
        ]);
    }
}
