<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    protected $fillable = [
        'judul1',
        'keterangan1',
        'icon',
        'judul_pelayanan',
        'keterangan_pelayanan',
        'pesan',
        'keterangan_pesan',
    ];
}
   