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
//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/home/layanan',[HomeController::class, 'layanan']);
Route::get('/home/pdln', [HomeController::class, 'pdln']);
Route::get('/home/mitra',[HomeController::class, 'mitra']);
Route::get('/home/faq',[HomeController::class, 'faq']);
Route::get('/home/berita',[HomeController::class, 'berita']);
Route::get('/home/galeri',[HomeController::class, 'galeri']);
Route::get('/home/peringkat',[HomeController::class, 'peringkat']);
Route::get('/home/pengumuman',[HomeController::class, 'pengumuman']);
Route::get('/home/galeri/{id}', [HomeController::class, 'galeridetails']);
Route::get('/home/berita/berita-details',[HomeController::class, 'beritadetails']);
Route::get('/layanan/legaldrafting', [HomeController::class, 'legaldrafting']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::resources([
//     // 'mitra' => MitraController::class,
//     // 'pdln' => PdlnController::class,
//     // 'berita' => BeritaController::class,
//     // 'galeri' => GalleryController::class,
//     // 'pengumuman' => PengumumanController::class,
//     // 'pengaduan' => PengaduanController::class,
//     // 'faq' => FaqController::class,
//     // 'peringkat' => PeringkatController::class
// ]);
// ]);

//pdln
Route::get('/data/mahasiswa', [PdlnController::class, 'mahasiswa']);
Route::get('/data/dosen', [PdlnController::class, 'dosen']);
Route::get('/data/pimpinan', [PdlnController::class, 'pimpinan']);

//mitra



Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index']);



    Route::prefix('/mitra')->group(function(){
        Route::get('/',[MitraController::class, 'index']);
        Route::get('/{id}',[MitraController::class, 'show']);
        Route::post('/create',[MitraController::class, 'create']);
        Route::get('/{id}/edit',[MitraController::class, 'edit']);
        Route::put('/{id}',[MitraController::class, 'update']);
        Route::delete('/{id}',[MitraController::class, 'destroy']);
        //data
        Route::get('/data/{instansi}', [MitraController::class, 'instansi']);
    });

    Route::prefix('/pdln')->group(function(){
        Route::get('/',[PdlnController::class, 'index']);
        Route::get('/{id}',[PdlnController::class, 'show']);
        Route::post('/create',[PdlnController::class, 'create']);
        Route::get('/{id}/edit',[PdlnController::class, 'edit']);
        Route::put('/{id}',[PdlnController::class, 'update']);
        Route::delete('/{id}',[PdlnController::class, 'destroy']);
    });
    Route::prefix('/berita')->group(function(){
        Route::get('/',[BeritaController::class, 'index']);
        Route::get('/{id}',[BeritaController::class, 'show']);
        Route::post('/create',[BeritaController::class, 'create']);
        Route::get('/{id}/edit',[BeritaController::class, 'edit']);
        Route::put('/{id}',[BeritaController::class, 'update']);
        Route::delete('/{id}',[BeritaController::class, 'destroy']);
    });
    Route::prefix('/pengaduan')->group(function(){
        Route::get('/',[PengaduanController::class, 'index']);
        Route::get('/{id}',[PengaduanController::class, 'show']);
        Route::post('/create',[PengaduanController::class, 'create']);
        Route::get('/{id}/edit',[PengaduanController::class, 'edit']);
        Route::put('/{id}',[PengaduanController::class, 'update']);
        Route::delete('/{id}',[PengaduanController::class, 'destroy']);
    });
    Route::prefix('/pengumuman')->group(function(){
        Route::get('/',[PengumumanController::class, 'index']);
        Route::get('/{id}',[PengumumanController::class, 'show']);
        Route::post('/create',[PengumumanController::class, 'create']);
        Route::get('/{id}/edit',[PengumumanController::class, 'edit']);
        Route::put('/{id}',[PengumumanController::class, 'update']);
        Route::delete('/{id}',[PengumumanController::class, 'destroy']);
    });
        Route::prefix('/peringkat')->group(function(){
        Route::get('/',[PeringkatController::class, 'index']);
        Route::get('/{id}',[PeringkatController::class, 'show']);
        Route::post('/create',[PeringkatController::class, 'create']);
        Route::get('/{id}/edit',[PeringkatController::class, 'edit']);
        Route::put('/{id}',[PeringkatController::class, 'update']);
        Route::delete('/{id}',[PeringkatController::class, 'destroy']);
    });
        Route::prefix('/faq')->group(function(){
        Route::get('/',[FaqController::class, 'index']);
        Route::get('/{id}',[FaqController::class, 'show']);
        Route::post('/create',[FaqController::class, 'create']);
        Route::get('/{id}/edit',[FaqController::class, 'edit']);
        Route::put('/{id}',[FaqController::class, 'update']);
        Route::delete('/{id}',[FaqController::class, 'destroy']);
    });
    Route::prefix('/galeri')->group(function(){
        Route::get('/',[GalleryController::class, 'index']);
        Route::get('/{id}',[GalleryController::class, 'show']);
        Route::post('/create',[GalleryController::class, 'create']);
        Route::get('/{id}/edit',[GalleryController::class, 'edit']);
        Route::put('/{id}',[GalleryController::class, 'update']);
        Route::delete('/{id}',[GalleryController::class, 'destroy']);
    });

});
