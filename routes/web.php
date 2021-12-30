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
Route::get('/home/galeridetails/{id}', [HomeController::class, 'galeridetails']);
Route::get('/home/berita/beritadetails/{id}', [HomeController::class, 'beritadetails']);
Route::get('/home/mitra/{id}', [HomeController::class, 'mitradetails']);
Route::get('/home/pdln/{id}', [HomeController::class, 'pdlndetails']);
Route::get('/layanan/legaldrafting', [HomeController::class, 'legaldrafting']);

Route::get('/home/mitra-yayasan', [HomeController::class, 'yayasan']);
Route::get('/home/mitra-cv', [HomeController::class, 'cv']);
Route::get('/home/mitra-internasional', [HomeController::class, 'internasional']);
Route::get('/home/mitra-jasaKeuangan', [HomeController::class, 'jasaKeuangan']);
Route::get('/home/mitra-pemerintah', [HomeController::class, 'pemerintah']);

Route::get('/home/thes', [HomeController::class, 'thes']);
Route::get('/home/qstar', [HomeController::class, 'qstar']);

Route::get('/home/pdln-mahasiswa', [HomeController::class, 'mahasiswa']);
Route::get('/home/pdln-dosen', [HomeController::class, 'dosen']);
Route::get('/home/pdln-pimpinan', [HomeController::class, 'pimpinan']);

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
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/pengumuman', PengumumanController::class);
    Route::resource('/pengaduan', PengaduanController::class);
    Route::resource('/peringkat', PeringkatController::class);
    Route::resource('/faq', FaqController::class);


    Route::get('/data/pdln/{jenis}', [PdlnController::class, 'jenis']);
    Route::get('/data/mitra/{instansi}', [MitraController::class, 'instansi']);

    // import
    Route::get('/import/pdln', [PdlnController::class, 'import']);
    Route::get('/import/mitra', [MitraController::class, 'import']);

    //download
    Route::get('/mitra/download/mou/{id}', [MitraController::class, 'mou']);
    Route::get('/pdln/download/uns/{id}', [PdlnController::class, 'uns']);
    Route::get('/pdln/download/belmawa/{id}', [PdlnController::class, 'belmawa']);
    Route::get('/pdln/download/ktln/{id}', [PdlnController::class, 'ktln']);


});

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
