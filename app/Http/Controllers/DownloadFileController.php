<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
    public function mou()

    {

    	$filePath = public_path("Ketentuan MoU.docx");

    	$headers = ['Content-Type: application/docx'];

    	$fileName = "Ketentuan MoU.docx";

    	return response()->download($filePath, $fileName, $headers);
        redirect('/home/layanan');

    }
    public function pks()

    {

    	$filePath = public_path("Ketentuan PKS.docx");

    	$headers = ['Content-Type: application/docx'];

    	$fileName = "Ketentuan PKS.docx";

    	return response()->download($filePath, $fileName, $headers);
        redirect('/home/layanan');

    }

}
