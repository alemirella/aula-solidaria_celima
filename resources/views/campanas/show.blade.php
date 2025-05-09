@extends('layouts.plantilla')

@section('titulo', 'Campana'.$campana->name)

@section('contenido')
    <h1>Bienvenido a la campaña: {{ $campana->name }}</h1>

    <a href="{{route('campanas.index')}}">Volver a la lista de campañas</a>

    <p>Categoría: {{ $campana->category }}</p>
    <p>{{ $campana->description }}</p>
@endsection
