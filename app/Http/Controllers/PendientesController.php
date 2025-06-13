<?php

namespace App\Http\Controllers;

use App\Models\Pendientes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
use App\Models\Leidos; // Assuming Leidos is a model you want to use
class PendientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menus()
    {
    $opciones = MenuOpcion::where('visible', true)->orderBy('orden')->get();
    $pendientes = Pendientes::orderBy('created_at')->get();
    $cantidad = Leidos::all()->count();
    return view('auth.porleer', compact('opciones','pendientes','cantidad'));    
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
    public function show(Pendientes $pendientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendientes $pendientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendientes $pendientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendientes $pendientes)
    {
        //
    }
}
