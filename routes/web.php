<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampanaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TransparenciaController;
use App\Models\Campana;

Route::get('/', HomeController::class);

// Rutas de autenticación
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'storeLogin')->name('login.store');

    Route::get('register', 'register')->name('register');
    Route::post('register', 'storeRegister')->name('register.store');

    Route::post('logout', 'logout')->name('logout');

    // Rutas para editar y eliminar cuenta
    Route::get('account/edit', 'editAccount')->name('edit.account')->middleware('auth');
    Route::post('account/update', 'updateAccount')->name('update.account')->middleware('auth');
    //Route::post('account/delete', 'deleteAccount')->name('delete.account')->middleware('auth');
    Route::post('account/delete', [AuthController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');


    // Ruta para ver el perfil del usuario
    Route::get('profile', [AuthController::class, 'profile'])->name('profile');

    // Ruta para editar el perfil del usuario
    Route::put('profile', [AuthController::class, 'updateProfile'])->name('profile.update');

});

// Rutas de campañas
Route::controller(CampanaController::class)->group(function () {
    Route::get('campanas', 'index')->name('campanas.index');
    Route::get('campanas/create', 'create')->name('campanas.create');
    Route::post('campanas', 'store')->name('campanas.store');
    Route::get('campanas/{campana}', 'show')->name('campanas.show');
    Route::get('campanas/{campana}/edit', 'edit')->name('campanas.edit');
    Route::put('campanas/{campana}', 'update')->name('campanas.update');
});

// Rutas de donaciones
Route::controller(DonacionController::class)->group(function () {
    Route::get('donaciones', 'index')->name('donaciones.index');
    Route::get('donaciones/crear', 'create')->name('donaciones.create');
    Route::get('donaciones/{id}', 'show')->name('donaciones.show');
});

// Rutas de proyectos
Route::controller(ProyectoController::class)->group(function () {
    Route::get('proyectos', 'index')->name('proyectos.index');
    Route::get('proyectos/crear', 'create')->name('proyectos.create');
    Route::get('proyectos/{id}', 'show')->name('proyectos.show');
});

// Ruta de transparencia
Route::get('transparencia', [TransparenciaController::class, 'index']);
