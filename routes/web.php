<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampanaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TransparenciaController;

// Página principal: ahora apunta a donaciones.index
Route::get('/', [DonacionController::class, 'index']);

// Página de login y registro
Route::get('login', [AuthController::class, 'login']);
Route::get('registro', [AuthController::class, 'registro']);

// Campañas
Route::get('campanas', [CampanaController::class, 'index']);
Route::get('campanas/crear', [CampanaController::class, 'crear']);
Route::get('campanas/{id}', [CampanaController::class, 'detalle']);

// Donaciones (según PDF)
Route::get('donaciones', [DonacionController::class, 'index']);
Route::get('donaciones/crear', [DonacionController::class, 'create']);
Route::get('donaciones/{donaciones}', [DonacionController::class, 'show']);

// Proyectos
Route::get('proyectos', [ProyectoController::class, 'index']);
Route::get('proyectos/{id}/reporte', [ProyectoController::class, 'reporte']);

// Transparencia
Route::get('transparencia', [TransparenciaController::class, 'index']);
