<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>

    <!-- Carga de estilos -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: grid;
            grid-template-rows: auto 1fr auto;
        }

        .content-layout {
            display: flex;
            justify-content: space-between;
            /* Establece un espacio entre los tres elementos */
            margin: 20px;
        }

        .main-content {
            flex: 1;
            padding: 0 20px;
            /* Espacio entre el contenido principal y los anuncios */
        }

        .ads-left, .ads-right {
            width: 200px; /* Ajusta el tamaño de los anuncios */
            background-color: #f8f9fa;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
            position: sticky;
            top: 20px;
        }

        /* Asegura que el contenido principal y los anuncios tengan suficiente espacio */
        .ads-left {
            margin-right: 20px;
        }

        .ads-right {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        @include('partials.navbar') <!-- Incluye la barra de navegación -->
    </header>

    <!-- Contenido principal -->
    <main class="content-layout">
        @include('partials.ads-left') <!-- Anuncio izquierdo -->

        <div class="main-content">
            @yield('content') <!-- Contenido principal -->
        </div>

        @include('partials.ads-right') <!-- Anuncio derecho -->
    </main>

    <!-- Footer -->
    <footer>
        @include('partials.footer') <!-- Incluye el pie de página -->
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
