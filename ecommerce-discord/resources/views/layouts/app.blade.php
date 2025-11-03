

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'DC componentes')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- 
    ============================ DICCIONARIO RÁPIDO DE BLADE/LARAVEL ============================

    @yield('nombre') 
        - Marca un "hueco" en la plantilla que se completa desde la página específica.
        - Ej: @yield('content') es reemplazado por @section('content') de la página.

    @section('nombre')
        - Define el contenido que va a rellenar un @yield en la plantilla.
        - Siempre se cierra con @endsection.

    @extends('ruta.plantilla')
        - Indica que la página extiende (usa) una plantilla principal.
        - Permite reutilizar navbar, footer, scripts, etc.

    @guest
        - Bloque que se muestra **solo si NO hay usuario logueado**.
        - Se cierra con @endguest.

    @auth
        - Bloque que se muestra **solo si hay usuario logueado**.
        - Equivalente a @else de @guest.
    
    @else
        - Parte del condicional para mostrar contenido alternativo.

    {{ $variable }}
        - Imprime el valor de una variable de PHP en HTML.
        - Escapa automáticamente caracteres peligrosos para seguridad.

    csrf_token()
        - Genera un token CSRF para proteger formularios de ataques.

    Auth::user()
        - Devuelve el usuario logueado.
        - Permite acceder a sus propiedades, ej: Auth::user()->nombre.

    @vite(['ruta/css', 'ruta/js'])
        - Incluye archivos CSS y JS gestionados por Vite (compilador de assets).

    @can('permiso')
        - Muestra un bloque solo si el usuario tiene ese permiso.
        - Requiere Spatie Permissions o sistema de permisos.

    @role('rol')
        - Muestra un bloque solo si el usuario tiene ese rol.
        - Requiere Spatie Permissions.

    {{-- Comentarios de Blade 
        - Se escriben así: 
        - No se muestran en el HTML generado.

    Notas generales:
        - Blade es el motor de plantillas de Laravel: genera HTML dinámico en el servidor.
        - Las plantillas permiten reutilizar navbar, footer y scripts en todas las páginas.
        - @yield y @section son la forma principal de inyectar contenido específico.
        - @guest, @auth, @role, @can ayudan a mostrar u ocultar bloques según usuario/permisos.
        - {{ }} imprime variables de manera segura.
--}}
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-discord">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="bi bi-discord"></i> DC componentes
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/servicios') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/plantillas') }}">Plantillas</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
    @guest <!-- @guest es equivalente a @if(!Auth::check()) -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">Registrarse</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/carrito') }}">
                <i class="bi bi-cart3"></i> Carrito
                <span class="badge bg-danger">0</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle"></i> {{ Auth::user()->nombre }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end"> <!-- dropdown-menu es la clase por defecto apra desplegables de boostrap -->
                <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Mi Panel</a></li>
                <li><a class="dropdown-item" href="{{ url('/mis-licencias') }}">Mis Licencias</a></li>
                <li><a class="dropdown-item" href="{{ url('/mis-pedidos') }}">Mis Pedidos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </li>
    @endguest <!-- @endguest cierra el bloque iniciado con @guest , basicamente es como un condicional-->
</ul>
            </div>
        </div>
    </nav>

    <!--  Contenido Principal -->
    <main class="py-4">
        @yield('content') <!-- aca se inyecta el codigo que generico que proramamos en el archivo blade de la pagina especifica -->
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 DC componentes {VERSION DE DESARROLLO}.</p>
        </div>
    </footer>

    <!-- Toast Container -->
    <div id="toast-container" class="position-fixed bottom-0 end-0 p-3" style="z-index: 11"></div>
</body>
</html>