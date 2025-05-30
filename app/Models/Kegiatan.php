<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    // Menambahkan atribut yang bisa diisi melalui mass assignment
    protected $fillable = [
        'nama',
        'deskripsi',
        'tanggal',
        'status',
    ];
}
