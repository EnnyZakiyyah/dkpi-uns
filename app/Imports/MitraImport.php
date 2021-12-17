<?php

namespace App\Imports;

use App\Models\Mitra;
use Maatwebsite\Excel\Concerns\ToModel;

class MitraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mitra([
            'instansi' => $row[0],
            'nama_instansi' =>$row[1],
            'no_mou_uns' =>$row[2],
            'no_mou_mitra' =>$row[3],
            'ruang_lingkup' =>$row[4],
            'jangka_waktu_awal' =>$row[5],
            'jangka_waktu_akhir' =>$row[6],
            'pejabat_penandatangan' =>$row[7],
            // 'file_mou' =>$row[8],
            // 'status_hidden' =>$row[9],
            'status'=>$row[8]
            ]);
    }
}
