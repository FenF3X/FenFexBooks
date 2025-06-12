<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    protected $table = "diario_lectura";
    protected $fillable = [
        'libro_id',
        'pagina_inicio',
        'pagina_fin',
        'descripcion',
        'dia',
        'hora',
        'created_at'
    ];
}
