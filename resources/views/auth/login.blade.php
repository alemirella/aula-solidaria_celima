@extends('layouts.plantilla')

@section('titulo', 'Iniciar Sesión')

@section('contenido')
<div class="bg-white p-8 rounded shadow-md w-full max-w-md mx-auto">
    <h2 class="text-2xl font-bold text-blue-600 text-center mb-6">Iniciar Sesión</h2>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4 text-sm">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4 text-sm">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Correo electrónico</label>
            <input type="email" name="email" required class="w-full border px-3 py-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Contraseña</label>
            <input type="password" name="password" required class="w-full border px-3 py-2 rounded">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
            Iniciar Sesión
        </button>
    </form>

    <p class="mt-4 text-center text-sm">
        ¿No tienes una cuenta?
        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Regístrate</a>
    </p>
</div>
@endsection
