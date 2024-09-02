@extends('layout')
@section('contenido')
    <h1>lista de personas</h1>
    <table>
         <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
         </tr>
         @foreach ($personas as $persona)
            <tr>
               <td>{{$persona->ci}}</td>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->paterno}}</td>
                <td>{{$persona->materno}}</td>
            </tr>
        @endforeach
    </table>
@endsection