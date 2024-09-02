@extends('layout')
@section('contenido')
<h1>Lista de Módulos</h1>
<a href="{{ route('modulos.create') }}" class="btn btn-primary">Crear Nuevo Módulo</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($modulos as $modulo)
            <tr>
                <td>{{ $modulo->id_modulo }}</td>
                <td>{{ $modulo->nombre }}</td>
                <td>{{ $modulo->estado }}</td>
                <td>
                    <a href="{{ route('modulos.show', $modulo) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('modulos.edit', $modulo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('modulos.destroy', $modulo) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection