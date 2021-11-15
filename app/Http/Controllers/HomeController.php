<?php

namespace App\Http\Controllers;

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
        return view('home.pdln');
    }

    public function mitra()
    {
        return view('home.mitra');
    }

    public function layanan()
    {
        return view('home.layanan');
    }

    public function peringkat()
    {
        return view('home.peringkat');
    }

}
