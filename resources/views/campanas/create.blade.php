@extends('layouts.plantilla')

@section('titulo', 'Nueva Campaña')

@section('contenido')
    <h1>En esta pagina podras crear una nueva campaña</h1>
    <form action=""> 
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" rows="5"> </textarea>
        </label>
        <br>
        <label>
            Categoría:
            <br>
            <input type="text" name="category">
        </label>
    </form>
@endsection
