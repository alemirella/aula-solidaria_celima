<?php

namespace App\Http\Controllers;

use App\Models\Campana;
use Illuminate\Http\Request;

class CampanaController extends Controller
{
    public function index()
    {
        $campanas = Campana::all();

        return view('campanas.index', compact('campanas'));
    }

    public function crear()
    {
        return "Formulario para crear una campaña de donación";
    }

    public function detalle($id)
    {
        return "Detalle de la campaña con ID: $id";
    }
}
