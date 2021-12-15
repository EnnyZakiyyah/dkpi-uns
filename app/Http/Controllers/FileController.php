<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
<<<<<<< HEAD
    public function download($id)
    {
        $file = File::findOrFail($id);
        $file->increment('download');
        $file->update();
        
        if ($file->file)
            {
                $file_path = public_path('storage/'.$file->file);
        
                return response()->download($file_path);
            }
        
        else
            {
                $headers = [
                    'Content-Type' => 'application/zip',
                 ];
      
                return response()->download($file->link, 'testing.zip', $headers);;
            }         

    }

    
=======
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }
>>>>>>> 27caf6f3da1cdaaaa6dc0950fedab564c6c09875
}
