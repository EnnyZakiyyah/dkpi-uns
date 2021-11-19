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

Route::get('/', function () {
    return view('home.index', [
        "title" => "DKPI - UNS",
    ]);
});

Route::get('/layanan', function () {
    return view('home.layanan', [
        "title" => "Layanan",
    ]);
});

Route::get('/home/pdln', [HomeController::class, 'pdln']);
Route::get('home/mitra',[HomeController::class, 'mitra']);

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


