<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;

class menuOpcionesController extends Controller
{
    /**
     * Handle the incoming request.
     */
     public function __invoke(Request $request)
     {
        $opciones = MenuOpcion::where('visible', true)
            ->orderby('orden')
            ->get();

        return view('auth.inicio', compact('opciones'));
     }
}
