<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonacionController extends Controller
{
    // Vista principal de donaciones
    public function index() {
        return view('donaciones.index');
    }
 // Formulario para realizar una donación
 public function create() {
    return view('donaciones.create');
}

// Mostrar detalle de una donación (recibe parámetro)
public function show($donaciones) {
    return view('donaciones.show', compact('donaciones'));
}
   
}
