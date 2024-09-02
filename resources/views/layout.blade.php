<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>

    <!-- Estilos CSS personalizados -->
    @section('css')
        <!-- Puedes agregar estilos CSS adicionales aquí -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @show
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <!-- Navegación sencilla -->
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/about">Acerca de</a></li>
                <li><a href="/contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main>
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts JS -->

</body>
</html>