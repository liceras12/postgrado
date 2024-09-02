@extends('layout')
@section('contenido')

<h1>Gestión de Áreas</h1>

<!-- Formulario para crear o editar -->
<form action="{{ isset($editArea) ? route('areas.update', $editArea->id_area) : route('areas.store') }}" method="POST">
    @csrf
    @if(isset($editArea))
        @method('PUT')
    @endif

    <label for="id_universidad">ID Universidad:</label>
    <input type="text" name="id_universidad" value="{{ isset($editArea) ? $editArea->id_universidad : '' }}" required><br>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ isset($editArea) ? $editArea->nombre : '' }}" required><br>

    <label for="nombre_abreviado">Nombre Abreviado:</label>
    <input type="text" name="nombre_abreviado" value="{{ isset($editArea) ? $editArea->nombre_abreviado : '' }}" required><br>

    <label for="estado">Estado:</label>
    <input type="text" name="estado" value="{{ isset($editArea) ? $editArea->estado : 'S' }}" required><br>

    <button type="submit">{{ isset($editArea) ? 'Actualizar' : 'Crear' }}</button>
</form>

<h2>Lista de Áreas</h2>
<ul>
    @foreach($areas as $area)
        <li>
            <strong>{{ $area->nombre }}</strong> ({{ $area->nombre_abreviado }})
            <form action="{{ route('areas.destroy', $area->id_area) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
            <a href="{{ route('areas.index', ['editArea' => $area->id_area]) }}">Editar</a>
        </li>
    @endforeach
</ul>
     

@endsection