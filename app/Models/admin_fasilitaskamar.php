<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_fasilitaskamar extends Model
{
    protected $fillable = [
        'nm_fasilitas',
        'ket',
        'gambar'
    ];
}
