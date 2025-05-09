<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        return "Listado de proyectos activos de instalación";
    }

    public function reporte($id)
    {
        return "Reporte del proyecto con ID: $id";
    }
}
