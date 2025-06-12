<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leidos extends Model
{
    protected $table = 'leidos';
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
        'paginas',
        'isbn',
        'portada',
        'fin_lectura',
        'created_at',
        'updated_at',
    ];
}
