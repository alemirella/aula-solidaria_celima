<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampanaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TransparenciaController;
use App\Models\Campana;

// Página principal: ahora apunta a donaciones.index
Route::get('/', [HomeController::class, 'index']);

// Página de login y registro
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
});


// Campañas
Route::controller(CampanaController::class)->group(function () {
    Route::get('campanas', 'index')->name('campanas.index');
    Route::get('campanas/create', 'create')->name('campanas.create');
    Route::get('campanas/{id}', 'show')->name('campanas.show');
});


// Donaciones (según PDF)
Route::controller(DonacionController::class)->group(function () {
    Route::get('donaciones', 'index')->name('donaciones.index');
    Route::get('donaciones/crear', 'create')->name('donaciones.create');
    Route::get('donaciones/{id}', 'show')->name('donaciones.show');
});


// Proyectos
Route::controller(ProyectoController::class)->group(function () {
    Route::get('proyectos', 'index')->name('proyectos.index');
    Route::get('proyectos/crear', 'create')->name('proyectos.create');
    Route::get('proyectos/{id}', 'show')->name('proyectos.show');
});


// Transparencia
Route::get('transparencia', [TransparenciaController::class, 'index']);
