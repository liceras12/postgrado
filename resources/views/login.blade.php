@extends('layout')
@section('contenido')

    <h1>Iniciar Sesion</h1>
    <form action="login" method="POST">
        @csrf
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Iniciar Sesion</button>
    </form>

@endsection