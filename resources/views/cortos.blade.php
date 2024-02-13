@extends('plantilla')
@section('titulo', 'Listado de cortos')
@section('contenido')
<div class="padre">
    @forelse ($cortos as $corto)
        <div class="hijo"> 
            <h2>{{ $corto["titulo"] }}</h2>
            <p>({{ $corto["director"] }})</p>
            <p>({{ $corto["sinapsis"] }})</p>
            <a href="{{ route('cortosid', $corto['id']) }}" class="btn btn-primary">Detalles</a>
        </div>
    @empty
        <li>No se encontraron cortos</li>
    @endforelse
</div>
@endsection
