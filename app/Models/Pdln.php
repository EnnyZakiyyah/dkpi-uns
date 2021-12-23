<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdln extends Model
{
    use HasFactory;

    protected $table = 'pdlns';
    protected $guarded =  ['id'];

    public function scopeFilter($query, array $filters)
    {   
        // if(isset($filters['nama_instansi']) ? $filters['nama_instansi'] : false){
        //     return $query->where('nama_instansi', 'like', '%' . $filters['nama_instansi']. '%');
        // }
        $query->when($filters['nama'] ?? false, function($query, $nama){
            return $query->where('nama', 'like', '%' . $nama. '%');
        });
        
    }
}
