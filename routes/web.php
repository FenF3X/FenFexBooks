<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuOpcionesController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/inicio', MenuOpcionesController::class)->name('inicio');
Route::get('/', LoginController::class)->name('login');