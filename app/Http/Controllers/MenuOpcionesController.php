<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
use App\Models\Leidos; // Assuming Leidos is a model you want to use
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
         $cantidad = Leidos::all()->count();
        return view('auth.inicio', compact('opciones','cantidad'));
     }
}
