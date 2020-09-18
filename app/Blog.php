<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'id_penulis',
        'judul',
        'tanggal',
        'isi',
    ];

    protected $table = 'BLOG';
}
