@extends('layout')

@section('css')
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Inicio de Sesión</h2>

                @if (Session::has('error_clave'))
                    <div class="alert alert-danger">
                        {{ Session::get('error_clave') }}
                    </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
@endsection
