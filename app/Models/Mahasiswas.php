<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswas extends Model
{
    use HasFactory;
    //[NEW MODELS]
    protected $fillable = [
        'npm',
        'nama',
        'jk',
        'kelas',
        'jurusan',
        'fakultas',
        'region',
        'no_telp'
    ];
 
}
