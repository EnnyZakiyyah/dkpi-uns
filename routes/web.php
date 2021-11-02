<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

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
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});
Route::get('/data-pdln', function () {
    return view('data-pdln');
});
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/show{mahasiswa}', [MahasiswaController::class, 'show']);
Route::get('/mahasiswa/edit{mahasiswa}', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/update{mahasiswa}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/destroy{mahasiswa}', [MahasiswaController::class, 'destroy']);


