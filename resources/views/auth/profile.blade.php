@extends('layouts.plantilla')

@section('titulo', 'Perfil de Usuario')

@section('contenido')
    <div class="bg-white p-8 rounded shadow-md max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-blue-700 mb-6">Perfil de Usuario</h2>

        <div class="space-y-3 text-gray-700">
            <p><span class="font-semibold">Nombre:</span> {{ Auth::user()->name }}</p>
            <p><span class="font-semibold">Correo electrónico:</span> {{ Auth::user()->email }}</p>
            <p><span class="font-semibold">Fecha de registro:</span> {{ Auth::user()->created_at->format('d/m/Y') }}</p>
        </div>

        <a href="{{ route('edit.account') }}" class="mt-6 inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition">
            Editar cuenta
        </a>
    </div>
@endsection
