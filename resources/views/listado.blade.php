@extends('plantilla')
@section('titulo', 'Listado de libros')
@section('contenido')
    <div class="container mt-4">
        <h2>Listado de Libros</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Editorial</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->editorial }}</td>
                        <td>{{ $libro->precio }}</td>
                        <td>
                            <a href="{{ route('listado.edit', $libro['id']) }}">Modificar</a>
                            <a href="{{ route('listado.destroy', $libro) }}">Borrar</a>
                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No se encontraron libros</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
