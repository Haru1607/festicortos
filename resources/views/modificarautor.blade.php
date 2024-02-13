@extends('plantilla')
@section('titulo', 'Modificar Autor')
@section('contenido')
    <h1>Modificar Autor</h1>
    <form action="{{ route('autores.update',$autor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control"  value="{{$autor->nombre}}" name="nombre"id="nombre">
    </div>
    <div class="form-group">
        <label for="nacimiento">Nacimiento:</label>
        <input type="text" class="form-control" value="{{$autor->nacimiento}}" name="nacimiento"id="
        nacimiento">
    </div>
        <input type="submit" name="enviar" value="Enviar" class="btn btn-dark
        btn-block" >
        </div>
    </form>
@endsection
