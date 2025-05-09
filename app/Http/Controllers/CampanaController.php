<?php

namespace App\Http\Controllers;

use App\Models\Campana;
use Illuminate\Http\Request;

class CampanaController extends Controller
{
    public function index()
    {
        $campanas = Campana::paginate();

        return view('campanas.index', compact('campanas'));
    }

    public function create()
    {
        return "Formulario para crear una campaña de donación";
    }

    public function show($id)
    {
        $campana = Campana::find($id);

        return view('campanas.show', compact('campana'));
    }
    
}
