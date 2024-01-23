@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')
<div class="padre">
    @forelse ($cortos as $corto)
    @if ($corto['id'] == $id)
        <div class="hijo"> 
            <h2>{{ $corto["titulo"] }}</h2>
            <p>({{ $corto["director"] }})</p>
            <p>({{ $corto["sinapsis"] }})</p>
            <a href="{{ route('cortos') }}" class="btn btn-primary">volver</a>
        </div>
    @endif
    @empty
        <li>No se encontraron cortos</li>
    @endforelse
</div>

@endsection

