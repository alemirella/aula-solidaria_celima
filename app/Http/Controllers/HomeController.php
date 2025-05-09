<?php

namespace App\Http\Controllers;
use App\Models\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Crear el metodo principal del aplicativo
    public function index()
    {
        return view('home');
    }
}
