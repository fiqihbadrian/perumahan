<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $fillable = [
        'blok',
        'nomor',
        'status',
        'penghuni',
        'no_telp',
        'email',
        'jumlah_penghuni',
        'keterangan'
    ];

    protected $casts = [
        'status' => 'string',
    ];
}
