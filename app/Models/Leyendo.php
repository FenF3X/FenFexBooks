<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leyendo extends Model
{
    protected $table = 'leyendo';
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
        'paginas',
        'isbn',
        'portada',
        'orden_leyendo', 
    ];
}
