<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdlnController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PeringkatController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DownloadFileController;

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
Route::get('/home/layanan', [HomeController::class, 'layanan']);
Route::get('/home/pdln', [HomeController::class, 'pdln']);
Route::get('/home/mitra', [HomeController::class, 'mitra']);
Route::get('/home/faq', [HomeController::class, 'faq']);
Route::get('/home/berita', [HomeController::class, 'berita']);
// Route::get('/home/berita/{slug}', [HomeController::class, 'show']);
// Route::get('/home/berita{berita}', [HomeController::class, 'show']);
Route::get('/home/galeri', [HomeController::class, 'galeri']);
Route::get('/home/peringkat', [HomeController::class, 'peringkat']);
Route::get('/home/pengumuman', [HomeController::class, 'pengumuman']);
Route::get('/home/galeri/{id}', [HomeController::class, 'galeridetails']);
Route::get('/home/berita/beritadetails/{id}', [HomeController::class, 'beritadetails']);
Route::get('/home/mitra/{id}', [HomeController::class, 'mitradetails']);
Route::get('/home/pdln/{id}', [HomeController::class, 'pdlndetails']);
Route::get('/layanan/legaldrafting', [HomeController::class, 'legaldrafting']);


Route::get('/mou-download', [DownloadFileController::class, 'mou']);
Route::get('/pks-download', [DownloadFileController::class, 'pks']);


// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);


Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/register', [RegisterController::class, 'index']);


// Route::get('/create',[PengaduanController::class, 'create']);
Route::post('/pengaduan', [PengaduanController::class, 'store']);




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::resource('/mitra',  MitraController::class);
    Route::resource('/pdln', PdlnController::class);
    Route::resource('/berita', BeritaController::class);
    Route::resource('/galeri', GalleryController::class);
    Route::resource('/pengumuman', PengumumanController::class);
    Route::resource('/pengaduan', PengaduanController::class);
    Route::resource('/peringkat', PeringkatController::class);
    Route::resource('/faq', FaqController::class);


    Route::get('/data/mahasiswa', [PdlnController::class, 'mahasiswa']);
    Route::get('/data/dosen', [PdlnController::class, 'dosen']);
    Route::get('/data/pimpinan', [PdlnController::class, 'pimpinan']);

    // import
    Route::get('/data/pdlnimport', [PdlnController::class, 'import']);
    Route::get('/data/mitraimport', [MitraController::class, 'import']);

    //mitra
    Route::get('/data/{instansi}', [MitraController::class, 'instansi']);

    Route::get('/data/cv', [MitraController::class, 'cv']);
    Route::get('/data/yayasan', [MitraController::class, 'yayasan']);
    Route::get('/data/internasional', [MitraController::class, 'internasional']);
    Route::get('/data/jasaKeuangan', [MitraController::class, 'jasaKeuangan']);
    Route::get('/data/pemerintah', [MitraController::class, 'pemerintah']);

    //     Route::prefix('/pengaduan')->group(function(){
    //     Route::get('/',[PengaduanController::class, 'index']);
    //     Route::get('/{id}',[PengaduanController::class, 'show']);
    //     Route::get('/create',[PengaduanController::class, 'create']);
    //     // Route::post('/',[PengaduanController::class, 'store']);
    //     Route::get('/{id}/edit',[PengaduanController::class, 'edit']);
    //     Route::put('/{id}',[PengaduanController::class, 'update']);
    //     Route::delete('/{id}',[PengaduanController::class, 'destroy']);
    // });


});

// Route::prefix('/mitra')->group(function(){
//     Route::get('/',[MitraController::class, 'index']);
//     //
//     Route::get('/create',[MitraController::class, 'create']);
//     Route::post('/',[PdlnController::class, 'store']);
//     Route::get('/{id}',[MitraController::class, 'show']);
//     Route::get('/{id}/edit',[MitraController::class, 'edit']);
//     Route::post('/{id}',[MitraController::class, 'update']);
//     Route::delete('/{id}',[MitraController::class, 'destroy']);


// });

// Route::prefix('/pdln')->group(function(){
//     Route::get('/',[PdlnController::class, 'index']);
//     Route::get('/{id}',[PdlnController::class, 'show']);
//     Route::get('/create',[PdlnController::class, 'create']);
//     Route::post('/',[PdlnController::class, 'store']);
//     Route::get('/{id}/edit',[PdlnController::class, 'edit']);
//     Route::put('/{id}',[PdlnController::class, 'update']);
//     Route::delete('/{id}',[PdlnController::class, 'destroy']);
//     Route::get('/data/{jenis}', [PdlnController::class, 'jenis']);
// });
// Route::prefix('/berita')->group(function(){
//     Route::get('/',[BeritaController::class, 'index']);
//     Route::get('/create',[BeritaController::class, 'create']);
//     Route::post('/',[BeritaController::class, 'store']);
//     Route::get('/{id}',[BeritaController::class, 'show']);
//     Route::get('/{id}/edit',[BeritaController::class, 'edit']);
//     Route::put('/{id}',[BeritaController::class, 'update']);
//     Route::delete('/{id}',[BeritaController::class, 'destroy']);
// });

// Route::prefix('/pengumuman')->group(function(){
//     Route::get('/',[PengumumanController::class, 'index']);
//     Route::get('/{id}',[PengumumanController::class, 'show']);
//     Route::get('/create',[PengumumanController::class, 'create']);
//     Route::post('/',[PengumumanController::class, 'store']);
//     Route::get('/{id}/edit',[PengumumanController::class, 'edit']);
//     Route::put('/{id}',[PengumumanController::class, 'update']);
//     Route::delete('/{id}',[PengumumanController::class, 'destroy']);
// });
//     Route::prefix('/peringkat')->group(function(){
//     Route::get('/',[PeringkatController::class, 'index']);
//     Route::get('/{id}',[PeringkatController::class, 'show']);
//     Route::get('/create',[PeringkatController::class, 'create']);
//     Route::post('/',[PeringkatController::class, 'store']);
//     Route::get('/{id}/edit',[PeringkatController::class, 'edit']);
//     Route::put('/{id}',[PeringkatController::class, 'update']);
//     Route::delete('/{id}',[PeringkatController::class, 'destroy']);
// });
//     Route::prefix('/faq')->group(function(){
//     Route::get('/',[FaqController::class, 'index']);
//     Route::get('/{id}',[FaqController::class, 'show']);
//     Route::get('/create',[FaqController::class, 'create']);
//     Route::post('/',[FaqController::class, 'store']);
//     Route::get('/{id}/edit',[FaqController::class, 'edit']);
//     Route::put('/{id}',[FaqController::class, 'update']);
//     Route::delete('/{id}',[FaqController::class, 'destroy']);
// });
// Route::prefix('/galeri')->group(function(){
//     Route::get('/',[GalleryController::class, 'index']);
//     Route::get('/{id}',[GalleryController::class, 'show']);
//     Route::get('/create',[GalleryController::class, 'create']);
//     Route::post('/',[GalleryController::class, 'store']);
//     Route::get('/{id}/edit',[GalleryController::class, 'edit']);
//     Route::put('/{id}',[GalleryController::class, 'update']);
//     Route::delete('/{id}',[GalleryController::class, 'destroy']);
// });

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::resources([
//     'mitra' => MitraController::class,
//     'pdln' => PdlnController::class,
//     'berita' => BeritaController::class,
//     'galeri' => GalleryController::class,
//     'pengumuman' => PengumumanController::class,
//     'pengaduan' => PengaduanController::class,
//     'faq' => FaqController::class,
//     'peringkat' => PeringkatController::class
// ]);

//pdln
//
//email
// Route::get('/contact', '@showContactForm');
// Route::post('/contact', 'EmailController@sendMail')->name('send.email');

//Route::get('/email', 'EmailController@create');
//Route::get('/send-email', '@showContactForm');
//Route::get('/send-email', 'EmailController@create');
//Route::post('/send-email', 'EmailController@sendEmail')->name('send.email');

Route::get('/contact-form', [ContactController::class, 'showForm']);

Route::post('/contact-form', [ContactController::class, 'storeForm'])->name('contact.save');

// download file
Route::get('books/{uuid}/download', 'FileController@download')->name('file.download');



Route::get('/blog', function () {
    $berita = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Enny Zakiyyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum id ducimus amet sequi eius quidem ipsum impedit eos ea, optio incidunt at, necessitatibus accusantium? Animi quam odio ut sequi?"
        ], [
            "title" => "Judul Kedua",
            "author" => "Enny Zakiyyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque earum id ducimus amet sequi eius quidem ipsum impedit eos ea, optio incidunt at, necessitatibus accusantium? Animi quam odio ut sequi?"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $berita
    ]);
});

Route::get('berita/{slug}', function ($slug) {
    return view('post');
});
