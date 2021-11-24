<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    protected $table = 'tabungans';
    protected $fillable = [
        'nama',
        'kelas',
        'jml_tabungan',
    ];
}
