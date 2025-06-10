<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuOpcionesController;
use App\Http\Controllers\LoginController;

Route::get('/inicio', MenuOpcionesController::class)->name('inicio');
Route::get('/', [LoginController::class, 'viewForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');