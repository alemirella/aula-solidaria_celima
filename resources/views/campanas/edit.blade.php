@extends('layouts.plantilla')

@section('titulo', 'Editar campaña')

@section('contenido')
    <h2 class="text-2xl font-bold text-blue-900 mb-6">Editar campaña: {{ $campana->name }}</h2>

    <form action="{{ route('campanas.update', $campana) }}" method="POST" class="bg-white p-6 rounded shadow-md space-y-6">
        @csrf
        @method('PUT')

        <!-- Nombre -->
        <div>
            <label class="block text-blue-800 font-medium mb-1">
                Nombre:
            </label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $campana->name) }}"
                class="w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            @error('name')
                <span class="text-red-600 text-sm mt-1 block">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Descripción -->
        <div>
            <label class="block text-blue-800 font-medium mb-1">
                Descripción:
            </label>
            <textarea
                name="description"
                rows="4"
                class="w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >{{ old('description', $campana->description) }}</textarea>
            @error('description')
                <span class="text-red-600 text-sm mt-1 block">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Categoría -->
        <div>
            <label class="block text-blue-800 font-medium mb-1">
                Categoría:
            </label>
            <input
                type="text"
                name="category"
                value="{{ old('category', $campana->category) }}"
                class="w-full border border-blue-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            @error('category')
                <span class="text-red-600 text-sm mt-1 block">*{{ $message }}</span>
            @enderror
        </div>

        <!-- Botón -->
        <div class="text-right">
            <button
                type="submit"
                class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-600 transition"
            >
                Actualizar campaña
            </button>
        </div>
    </form>
@endsection
