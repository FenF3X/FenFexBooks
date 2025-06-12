<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
use App\Models\Leyendo;
use App\Models\Leidos;

use Illuminate\Support\Facades\DB;
class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function menus()
    {
    $opciones = MenuOpcion::where('visible', true)->orderBy('orden')->get();
    $leyendo = Leyendo::all();
    return view('auth.diario', compact('opciones', 'leyendo'));    
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
        Diario::create([
            'libro_id' => $request->libro_id,
            'pagina_inicio' => $request->pagina_inicio,
            'pagina_fin' => $request->pagina_fin,
            'descripcion' => $request->descripcion,
            'dia' => now()->format('Y-m-d'),
            'hora' => now()->format('H:i:s'),
            'created_at' => now(),
        ]);

        if ($request->libro_terminado == "1") {
        Leidos::create([
            'titulo' => Leyendo::find($request->libro_id)->titulo,
            'autor' => Leyendo::find($request->libro_id)->autor,
            'anio_publicacion' => Leyendo::find($request->libro_id)->anio_publicacion,
            'paginas' => Leyendo::find($request->libro_id)->paginas,
            'isbn' => Leyendo::find($request->libro_id)->isbn,
            'portada' => Leyendo::find($request->libro_id)->portada,
            'fin_lectura' => now(),
            'fecha_leido' => now()
        ]);
        Leyendo::where('id', $request->libro_id)->delete();

        }

        return redirect()->back()->with('success', 'Entrada de diario guardada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Diario $diario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diario $diario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diario $diario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diario $diario)
    {
        //
    }
}
