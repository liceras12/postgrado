@extends('layout')

@section('css')
@endsection

@section('contenido')
<div class="container">
    <h1>Bienvenido, {{ Session::get('data_session')['nombres'] }} {{ Session::get('data_session')['paterno'] }}</h1>
    
    <ul class="menu">
        {!! Session::get('data_session')['menu'] !!}
    </ul>
</div>
@endsection
