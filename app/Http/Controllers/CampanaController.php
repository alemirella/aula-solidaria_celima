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
        return view ('campanas.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $campana = new Campana();

        $campana->name = $request->name;
        $campana->description = $request->description;
        $campana->category = $request->category;

        $campana->save();

        return redirect()->route('campanas.show', $campana);
    }

    public function show($id)
    {
        $campana = Campana::find($id);

        return view('campanas.show', compact('campana'));
    }

    public function edit(Campana $campana)
    {
        return view('campanas.edit', compact('campana'));
    }

    public function update(Request $request, Campana $campana)
    { 
        $campana->name = $request->name;
        $campana->description = $request->description;
        $campana->category = $request->category;

        $campana->save();

        return redirect()->route('campanas.show', $campana);
    }
}
