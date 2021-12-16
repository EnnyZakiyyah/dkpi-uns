<?php

namespace App\Imports;

use App\Models\Pdln;
use Maatwebsite\Excel\Concerns\ToModel;

class PdlnImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pdln([
            'jenis' => $row[0],
            'nama' => $row[1],
            'jumlah_orang'=> $row[2],
            'unit_kerja'=> $row[3] ,
            'jangka_waktu_awal'=> $row[5],
            'jangka_waktu_akhir'=> $row[6],
            'tujuan'=> $row[4],
            'negara'=> $row[7],
            'surat_uns'=> $row[8],
            'catatan_uns'=> $row[9],
            'status'=> $row[10]
        ]);
    }
}
