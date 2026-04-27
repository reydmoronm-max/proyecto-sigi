<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficial extends Model
{
    protected $table = 'oficiales';

    protected $fillable = [
        'nombres',
        'apellidos',
        'estatus'
    ];
}
