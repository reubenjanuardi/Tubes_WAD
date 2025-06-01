<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'no_hp',
        'status',
        'tanggal_daftar',
    ];

    protected $dates = ['tanggal_daftar'];
}
