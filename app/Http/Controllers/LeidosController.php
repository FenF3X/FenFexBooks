<?php

namespace App\Http\Controllers;

use App\Models\Leidos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
use App\Models\Diario; // Assuming Diario is a model you want to use
class LeidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menus()
    {
    $opciones = MenuOpcion::where('visible', true)->orderBy('orden')->get();
    $leidos = Leidos::orderByDesc('created_at')->get();
    $cantidad = $leidos->count();
    $notas = Diario::all()->groupBy('titulo_libro');
    return view('auth.leidos', compact('opciones','leidos','notas', 'cantidad'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Leidos $leidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leidos $leidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leidos $leidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leidos $leidos)
    {
        //
    }
}
