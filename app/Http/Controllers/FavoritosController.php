<?php

namespace App\Http\Controllers;

use App\Models\Favoritos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuOpcion;
class FavoritosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menus()
    {
    $opciones = MenuOpcion::where('visible', true)->orderBy('orden')->get();
    return view('auth.favoritos', compact('opciones'));    
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
    public function show(Favoritos $favoritos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favoritos $favoritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favoritos $favoritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favoritos $favoritos)
    {
        //
    }
}
