<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    //model untuk tabel keuangan
    use HasFactory;

    protected $table = 'keuangan'; // nama tabel di database

    protected $fillable = [
        'kegiatan',
        'jenis',
        'jumlah',
        'keterangan',
        'tanggal',
    ];
}
