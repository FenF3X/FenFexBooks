<?php

namespace App\Http\Controllers;

use App\Models\Leyendo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
use Illuminate\Support\Facades\DB;
use App\Models\Leidos; // Assuming Leidos is a model you want to use
class LeyendoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menus()
{
    $opciones = MenuOpcion::where('visible', true)->orderBy('orden')->get();    
    $leyendo = Leyendo::orderBy('created_at')->get();
    $cantidad = Leidos::all()->count();
    return view('auth.leyendo', compact('opciones', 'leyendo', 'cantidad'));
}

    public function ultimaPaginaFin($id)
{
    $pagina = DB::table('diario_lectura')
        ->where('libro_id', $id)
        ->orderByDesc('created_at')
        ->value('pagina_fin');

    return response()->json(['pagina_fin' => $pagina]);
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
    public function show(Leyendo $leyendo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leyendo $leyendo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leyendo $leyendo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leyendo $leyendo)
    {
        //
    }
}
