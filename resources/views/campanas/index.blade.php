@extends('layouts.plantilla')

@section('titulo', 'Inicio de Campañas')

@section('contenido')
    <h1>Bienvenido al portal de campañas de donaciones educativas de Celima</h1>

    <a href="{{route('campanas.create')}}">Crear nueva campaña</a>

    <ul>
        @foreach ($campanas as $campana)
            <li>
                <a href="{{route('campanas.show', $campana)}}">{{ $campana->name }}</a>
            </li>
            
        @endforeach
    </ul>
    
    {{$campanas->links()}}
@endsection
