<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'icon_images',
        'nama_website',
        'overview',
        'judul_about',
        'keterangan_about',
        'judul_services',
        'keterangan_services',
        'judul_portofolio',
        'keterangan_portofolio',
        'judul_contact',
        'keterangan_contact',
    ];
}
