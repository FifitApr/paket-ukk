<?php

namespace App\Models;

use App\Models\resepsionis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tamu extends Model
{
    use HasFactory;

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

}
