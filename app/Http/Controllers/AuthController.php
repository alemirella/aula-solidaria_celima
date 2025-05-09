<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return "Bienvenido a la página de inicio de sesión";
    }

    public function registro()
    {
        return "Bienvenido a la página de registro";
    }
}
