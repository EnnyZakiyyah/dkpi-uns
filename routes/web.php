<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PdlnController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PeringkatController;

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
    return view('home', [
        "title" => "DKPI - UNS",
    ]);
});

Route::get('/layanan', function () {
    return view('layanan',[
        "title" => "Layanan",
    ]);
});

Route::get('/peringkat', function () {
    return view('peringkat',[
        "title" => "Peringkat",
    ]);
});

Route::get('/mitra', function () {
    return view('mitra',[
        "title" => "Mitra",
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
    'pengaduan' => PengumumanController::class,
    'faq' => FaqController::class,
    'peringkat' => PeringkatController::class
]);
