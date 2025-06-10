<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuOpcion extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'nombre',
        'ruta',
        'icono',
        'orden',
        'visible'
    ];

    
}
