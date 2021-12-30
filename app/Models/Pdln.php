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
        $query->when($filters['judul'] ?? false, function($query, $judul){
            return $query->where('judul', 'like', '%' . $judul. '%');
        });
        
    }
}
