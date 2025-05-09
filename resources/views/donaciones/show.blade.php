@extends('layouts.plantilla')

@section('titulo', 'Detalles de la Donación')

@section('contenido')
    <h2>Detalles de la donación al centro educativo: {{ $donaciones }}</h2>
    <p>Gracias por ser parte de esta iniciativa de Celima por una mejor educación.</p>
@endsection
