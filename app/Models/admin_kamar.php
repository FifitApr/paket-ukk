<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_kamar extends Model
{
    protected $fillable = [
        'tipekamar',
        'jmlkamar'
    ];

    public function types(){
        return $this->HasMany(admin_fasilitas::class);
    }
}
