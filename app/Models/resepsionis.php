<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepsionis extends Model
{
    protected $fillable = [
        'nm_pemesan',
        'email',
        'no_hp',
        'nm_tamu',
        'tipekamar',
        'tgl_cekin',
        'tgl_cekout',
    ];
}
