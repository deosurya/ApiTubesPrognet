<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detilkrs extends Model
{
    use HasFactory;

    protected $fillable = [
        'krs_id',
        'mahasiswa_id',
        'matakuliah_id',
        'nilai',
    ];
}
