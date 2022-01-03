<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pengumuman extends Model
{
    use HasFactory;

    // const LIMIT = 50;
    protected $table = 'pengumumen';
    protected $guarded =  ['id'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['nama_instansi']) ? $filters['nama_instansi'] : false){
        //     return $query->where('nama_instansi', 'like', '%' . $filters['nama_instansi']. '%');
        // }
        $query->when($filters['pengumuman'] ?? false, function ($query, $pengumuman) {
            return $query->where('pengumuman', 'like', '%' . $pengumuman . '%');
        });
    }
    // public function limit()
    // {
    //     return Str::limit($this->pengumuman, Pengumuman::LIMIT);
    // }
}
