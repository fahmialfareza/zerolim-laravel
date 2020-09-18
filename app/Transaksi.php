<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'id_user',
        'id_agen',
        'berat_estimasi',
        'berat_agen',
        'alamat_penjemputan',
        'status',
    ];

    protected $table = 'TRANSAKSI';
}
