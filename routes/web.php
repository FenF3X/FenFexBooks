<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuOpcionesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendientesController;

Route::get('/', [LoginController::class, 'viewForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Rutas privadas
Route::get('/inicio', MenuOpcionesController::class)
    ->middleware('auth')
    ->name('inicio');

Route::get('/porleer', [PendientesController::class, 'index'])
    ->middleware('auth')
    ->name('porleer');