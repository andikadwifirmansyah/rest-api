<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'students';
    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'rayon',
        'image',
        'tgl_lahir',
    ];
}
