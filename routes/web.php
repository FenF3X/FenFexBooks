<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuOpcionesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendientesController;
use App\Http\Controllers\LeyendoController;
use App\Http\Controllers\LeidosController;
use App\Http\Controllers\FavoritosController;
use App\Http\Controllers\DiarioController;
use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\GuardarLibroController;

Route::get('/', [LoginController::class, 'viewForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Rutas privadas
Route::get('/inicio', MenuOpcionesController::class)
    ->middleware('auth')
    ->name('inicio');

Route::get('/porleer', [PendientesController::class, 'menus'])
    ->middleware('auth')
    ->name('porleer');

Route::get('/leyendo', [LeyendoController::class, 'menus'])
    ->middleware('auth')
    ->name('leyendo');
    
Route::get('/leidos', [LeidosController::class, 'menus'])
    ->middleware('auth')
    ->name('leidos');

Route::get('/favoritos', [FavoritosController::class, 'menus'])
    ->middleware('auth')
    ->name('favoritos');

Route::get('/diario', [DiarioController::class, 'menus'])
    ->middleware('auth')
    ->name('diario');

Route::get('/ajustes', [ConfiguracionController::class, 'menus'])
    ->middleware('auth')
    ->name('configuracion');

Route::post('/libros/guardar',[GuardarLibroController::class, 'store']);