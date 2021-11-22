<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PdlnController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PeringkatController;
use App\Http\Controllers\PengumumanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/home/layanan',[HomeController::class, 'layanan']);
Route::get('/home/pdln', [HomeController::class, 'pdln']);
Route::get('/home/mitra',[HomeController::class, 'mitra']);
Route::get('/home/faq',[HomeController::class, 'faq']);
Route::get('/home/berita',[HomeController::class, 'berita']);
Route::get('/home/geleri',[HomeController::class, 'galeri']);
Route::get('/home/peringkat',[HomeController::class, 'peringkat']);
Route::get('/home/pengumuman',[HomeController::class, 'pengumuman']);
Route::get('/', function () {
    return view('home.index', [
        "title" => "DKPI - UNS",
    ]);
});

Route::get('/home/galeri', function () {
    return view('home.galeri', [
        "title" => "Galeri",
    ]);
});

Route::get('/galeri/more-details', function () {
    return view('home.galeridetails', [
        "title" => "Detail MoU",
    ]);
});

Route::get('/home/berita', function () {
    return view('home.berita', [
        "title" => "Berita",
    ]);
});

Route::get('/berita/berita-details', function () {
    return view('home.beritadetails', [
        "title" => "Detail Berita",
    ]);
});


Route::get('/layanan', function () {
    return view('home.layanan', [
        "title" => "Layanan",
    ]);
});

Route::get('layanan/legal-drafting', function () {
    return view('home.layanan.legaldrafting', [
        "title" => "Legal Drafting",
    ]);
});

Route::get('/home/faq', function () {
    return view('home.faq', [
        "title" => "FAQ",
    ]);
});

Route::get('/home/pengumuman', function () {
    return view('home.pengumuman', [
        "title" => "Pengumuman",
    ]);
});

Route::get('/home/peringkat', function () {
    return view('home.peringkat', [
        "title" => "Peringkat",
    ]);
});


Route::get('/layanan/legaldrafting', [HomeController::class, 'legaldrafting']);
Route::get('/home/pdln', [HomeController::class, 'pdln']);
Route::get('home/mitra', [HomeController::class, 'mitra']);

Route::get('/home/peringkat', function () {
    return view('home.peringkat', [
        "title" => "Peringkat",
    ]);
});



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resources([
    'mitra' => MitraController::class,
    'pdln' => PdlnController::class,
    'berita' => BeritaController::class,
    'galeri' => GalleryController::class,
    'pengumuman' => PengumumanController::class,
    'pengaduan' => PengaduanController::class,
    'faq' => FaqController::class,
    'peringkat' => PeringkatController::class
]);

//pdln
Route::get('/data/mahasiswa', [PdlnController::class, 'mahasiswa']);
Route::get('/data/dosen', [PdlnController::class, 'dosen']);
Route::get('/data/pimpinan', [PdlnController::class, 'pimpinan']);

//mitra
Route::get('/data/cv', [MitraController::class, 'cv']);
Route::get('/data/yayasan', [MitraController::class, 'yayasan']);
Route::get('/data/internasional', [MitraController::class, 'internasional']);
Route::get('/data/jasaKeuangan', [MitraController::class, 'jasaKeuangan']);
Route::get('/data/pemerintah', [MitraController::class, 'pemerintah']);
