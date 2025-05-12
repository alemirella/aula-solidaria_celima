@extends('layouts.plantilla')

@section('titulo', 'Campaña - ' . $campana->name)

@section('contenido')
    <div class="bg-white p-6 rounded shadow-md">
        <h2 class="text-3xl font-bold text-blue-900 mb-4">Campaña: {{ $campana->name }}</h2>

        <p class="text-gray-700 mb-2"><span class="font-semibold text-blue-800">Categoría:</span> {{ $campana->category }}</p>
        <p class="text-gray-700 mb-6"><span class="font-semibold text-blue-800">Descripción:</span> {{ $campana->description }}</p>

        <div class="space-x-4">
            <a href="{{ route('campanas.index') }}"
               class="inline-block bg-blue-200 text-blue-900 px-4 py-2 rounded hover:bg-blue-300 transition">
                Volver a la lista
            </a>

            <a href="{{ route('campanas.edit', $campana) }}"
               class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition">
                Editar campaña
            </a>
        </div>
    </div>
@endsection
