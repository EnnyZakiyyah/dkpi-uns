<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index()
    {
    }

    public function create()
    {
        return view('books.create');
    }
}
