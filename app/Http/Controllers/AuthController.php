<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión.');
    }

    public function storeLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Bienvenido');
        }

        return back()->with('error', 'Credenciales inválidas. Inténtalo de nuevo.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Sesión cerrada correctamente.');
    }

    public function editAccount()
    {
        return view('auth.edit');
    }

    public function updateAccount(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:4|confirmed',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('edit.account')->with('success', 'Datos actualizados correctamente.');
    }

    public function deleteAccount(Request $request)
    {
        $user = Auth::user();
        Auth::logout();
        $user->delete();

        return redirect('/')->with('success', 'Cuenta eliminada correctamente.');
    }

    // Agregado: perfil del usuario
    public function profile()
    {
        return view('auth.profile'); // crea esta vista si quieres mostrar perfil
    }

    public function updateProfile(Request $request)
    {
        // implementación opcional si decides permitir edición directa del perfil
    }
}
