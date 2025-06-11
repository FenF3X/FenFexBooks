<?php

namespace App\Http\Controllers;

use App\Models\Diario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function menus()
    {
    $opciones = MenuOpcion::where('visible', true)->orderBy('orden')->get();
    return view('auth.diario', compact('opciones'));    
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
