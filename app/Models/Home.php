<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $fillable = [
        'judul',
        'keterangan',
        'gambar',
        'judul1',
        'judul2',
        'deskripsi_judul1',
        'deskripsi_judul2',
    ];
}
