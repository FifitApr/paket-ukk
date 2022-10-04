<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_fasilitas extends Model
{
    protected $fillable = [
        'tipekamar',
        'nm_fasilitas'
    ];

    public function type(){
        return $this->belongsTo(admin_kamar::class);
    }
}
