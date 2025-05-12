@extends('layouts.plantilla')

@section('titulo', 'Inicio de Campañas')

@section('contenido')
    <h2 class="text-3xl font-semibold text-blue-900 mb-6 text-center">Bienvenido al portal de campañas de donaciones educativas de Celima</h2>

    <a
        href="{{ route('campanas.create') }}"
        class="inline-block bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-600 transition mb-4"
    >
        Crear nueva campaña
    </a>

    <ul class="space-y-3">
        @forelse ($campanas as $campana)
            <li class="bg-white p-4 rounded shadow hover:bg-blue-100 transition">
                <a href="{{ route('campanas.show', $campana) }}" class="text-blue-800 font-semibold hover:underline">
                    📦 {{ $campana->name }}
                </a>
            </li>
        @empty
            <li class="text-blue-800">No hay campañas activas por el momento.</li>
        @endforelse
    </ul>

    <div class="mt-6">
        {{ $campanas->links() }}
    </div>
@endsection
