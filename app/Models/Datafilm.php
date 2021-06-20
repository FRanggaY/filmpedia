<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datafilm extends Model
{
    protected $primaryKey = 'id_film';
    protected $table = 'tbl_data_film';
    protected $fillable = [
        'judul',
        'produser',
        'tipe',
        'foto',
    ];
}

