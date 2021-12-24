<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {   
        // if(isset($filters['nama_instansi']) ? $filters['nama_instansi'] : false){
        //     return $query->where('nama_instansi', 'like', '%' . $filters['nama_instansi']. '%');
        // }
        $query->when($filters['nama_instansi'] ?? false, function($query, $nama_instansi){
            return $query->where('nama_instansi', 'like', '%' . $nama_instansi. '%');
        });
        $query->when($filters['pejabat_penandatangan'] ?? false, function($query, $pejabat_penandatangan){
            return $query->where('pejabat_penandatangan', 'like', '%' . $pejabat_penandatangan. '%');
        });
        $query->when($filters['jangka_waktu_awal'] ?? false, function($query, $jangka_waktu_awal){
            return $query->where('jangka_waktu_awal', 'like', '%' . $jangka_waktu_awal . '%');
        });
        $query->when($filters['jangka_waktu_akhir'] ?? false, function($query, $jangka_waktu_akhir){
            return $query->where('jangka_waktu_akhir', 'like', '%' . $jangka_waktu_akhir . '%');
        });
    }
}
