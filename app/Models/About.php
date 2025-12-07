<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'judul',
        'keterangan',
        'gambar',
        'poin1',
        'poin2',
        'poin3',
    ];
}
