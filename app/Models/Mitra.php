<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitras';
    protected $guarded =  ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['nama_instansi'] ?? false, function($query, $nama_instansi){
            return $query->where('nama_instansi', 'like', '%' . $nama_instansi. '%');
        });
    }
}
