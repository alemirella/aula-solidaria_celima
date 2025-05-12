@extends('layouts.plantilla')

@section('titulo', 'Registrarse')

@section('contenido')
<div class="bg-white p-8 rounded shadow-md w-full max-w-md mx-auto">
    <h2 class="text-2xl font-bold text-blue-600 text-center mb-6">Registrarse</h2>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4 text-sm">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nombre</label>
            <input type="text" name="name" required class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Correo electrónico</label>
            <input type="email" name="email" required class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Contraseña</label>
            <input type="password" name="password" required class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Confirmar contraseña</label>
            <input type="password" name="password_confirmation" required class="w-full border px-3 py-2 rounded">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
            Registrarse
        </button>
    </form>

    <p class="mt-4 text-center text-sm">
        ¿Ya tienes una cuenta?
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Iniciar sesión</a>
    </p>
</div>
@endsection
