<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoInfraccion extends Model
{
    protected $table = 'tipos_infracciones';

    protected $fillable = [
        'nombre'
    ];
}
