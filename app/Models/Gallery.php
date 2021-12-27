<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';
    protected $guarded =  ['id'];

    public function scopeFilter($query, array $filters)
    {   
        // if(isset($filters['nama_instansi']) ? $filters['nama_instansi'] : false){
        //     return $query->where('nama_instansi', 'like', '%' . $filters['nama_instansi']. '%');
        // }
        $query->when($filters['nama'] ?? false, function($query, $nama){
            return $query->where('nama', 'like', '%' . $nama. '%');
        });
        $query->when($filters['jangka_waktu_awal'] ?? false, function($query, $jangka_waktu_awal){
            return $query->where('jangka_waktu_awal', 'like', '%' . $jangka_waktu_awal. '%');
        });
        $query->when($filters['jangka_waktu_akhir'] ?? false, function($query, $jangka_waktu_akhir){
            return $query->where('jangka_waktu_akhir', 'like', '%' . $jangka_waktu_akhir. '%');
        });
        $query->when($filters['negara'] ?? false, function($query, $negara){
            return $query->where('negara', 'like', '%' . $negara. '%');
        });
        
    }
}
