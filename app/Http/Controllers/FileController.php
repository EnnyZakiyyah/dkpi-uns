<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
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

    
}
