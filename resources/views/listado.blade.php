@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
<div class="padre">
    @forelse ($libros as $libro)
        <div class="hijo"> 
            <h2>{{ $libro["titulo"] }}</h2>
            <p>({{ $libro["autor"] }})</p>
        </div>
    @empty
        <li>No se encontraron libros</li>
    @endforelse
</div>
@endsection
