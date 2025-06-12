<?php

namespace App\Http\Controllers;

use App\Models\GuardarLibro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuardarLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            $tabla = $request->lista;
              if (!in_array($tabla, ['favoritos', 'leidos', 'leyendo', 'pendientes'])) {
                return response()->json(['status' => 'error', 'message' => 'Grupo inválido.']);
                }
      
        if ($tabla == 'pendientes') {
        $siguienteOrden = DB::table('pendientes')->max('orden_pendiente') + 1;
        \DB::table($tabla)->insert([
        'titulo' => $request->titulo,
        'autor' => $request->autor,        
        'anio_publicacion' => $request->anio_publicacion,
        'paginas' => $request->paginas,
        'isbn' => $request->isbn,
        'portada' => $request->portada,
        'orden_pendiente' => $siguienteOrden,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
        } else {
            \DB::table($tabla)->insert([
                'titulo' => $request->titulo,
                'autor' => $request->autor,        
                'anio_publicacion' => $request->anio_publicacion,
                'paginas' => $request->paginas,
                'isbn' => $request->isbn,
                'portada' => $request->portada,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return response()->json(['status' => 'ok']);
    }

    /**
     * Display the specified resource.
     */
    public function show(GuardarLibro $guardarLibro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuardarLibro $guardarLibro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuardarLibro $guardarLibro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuardarLibro $guardarLibro)
    {
        //
    }
}
