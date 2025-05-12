@extends('layouts.plantilla')

@section('titulo', 'Mi cuenta')

@section('contenido')
    <div class="bg-white p-8 rounded shadow-md max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-blue-700 mb-6">Mi Cuenta</h2>

        @if (session('status'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('update.account') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-400">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium text-gray-700">Correo electrónico</label>
                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" required class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-400">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-sm font-medium text-gray-700">Nueva Contraseña (opcional)</label>
                <input type="password" name="password" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-400">
            </div>

            <div class="mb-6">
                <label class="block mb-1 text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring focus:border-blue-400">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Actualizar Cuenta
            </button>
        </form>

        <form method="POST" action="{{ route('delete.account') }}" class="mt-6">
            @csrf
            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.')" class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700 transition">
                Eliminar Cuenta
            </button>
        </form>
    </div>
@endsection
