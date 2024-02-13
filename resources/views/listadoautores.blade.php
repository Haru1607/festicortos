@extends('plantilla')
@section('titulo', 'Listado de Autores')
@section('contenido')
    <div class="container mt-4">
        <h2>Listado de Autores</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($autores as $autor)
                    <tr>
                        <td>{{ $autor->nombre }}</td>
                        <td>{{ $autor->nacimiento }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('autores.edit', $autor['id']) }}">Modificar</a>

                            <form action="{{ route('autores.destroy', $autor) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger" type="submit">Borrar</button>
                            </form>


                            
                        </td>
                       
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No se encontraron autores</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
