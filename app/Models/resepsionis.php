<?php

namespace App\Models;

use App\Models\Tamu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class resepsionis extends Model
{
    protected $fillable = [
        'tgl_cekin',
        'tgl_cekout',
        'jml_kamar',
        'nm_pemesan',
        'email',
        'no_hp',
        'nm_tamu',
        'tipekamar',
    ];

    // public function reseps() 
    // { 
    //     return $this->hasMany(Tamu::class); 
    // } 
}
