@extends('plantilla')
@section('titulo', 'Crear Autor')
@section('contenido')
    <h1>Nuevo Autor</h1>
    <form action="{{route('autores.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre"id="nombre">
    </div>
    <div class="form-group">
        <label for="nacimiento">Nacimiento:</label>
        <input type="text" class="form-control" name="nacimiento"id="
        nacimiento">
    </div>
        <input type="submit" name="enviar" value="Enviar" class="btn btn-dark
        btn-block" >
@endsection
