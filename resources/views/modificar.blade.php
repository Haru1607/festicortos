@extends('plantilla')
@section('titulo', 'Modificar libro')
@section('contenido')
    <h1>Modificar Libro</h1>
    <form action="{{ route('modificandolibro') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
            </div>
            <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial" id="editorial">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" class="form-control" name="precio" id="precio">
            </div>
            <input type="hidden" name="id" id="id" class="btn btn-dark btn-block" value="{{$id}}">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
        </div>
    </form>
@endsection
