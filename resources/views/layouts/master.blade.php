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
            margin: 20px;
        }

        .main-content {
            flex: 1;
            padding: 0 20px;
        }

        .ads-left,
        .ads-right {
            width: 200px;
            position: sticky;
            top: 20px;
        }

        .ad-card {
            background-color: #f8f9fa;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        @include('partials.navbar')
    </header>

    <!-- Contenido principal -->
    <main class="content-layout flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
        <!-- Anuncio izquierdo en pantallas grandes -->
        <div class="hidden md:block">
            @include('partials.ads-left')
        </div>

        <!-- Tarjeta de anuncio superior en pantallas pequeñas -->
        <div class="block md:hidden">
            @include('partials.ads-left')
        </div>

        <!-- Contenido principal -->
        <div class="main-content flex-1">
            @yield('content')
        </div>

        <!-- Anuncio derecho en pantallas grandes -->
        <div class="hidden md:block">
            @include('partials.ads-right')
        </div>

        <!-- Tarjeta de anuncio inferior en pantallas pequeñas -->
        <div class="block md:hidden">
            @include('partials.ads-right')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        @include('partials.footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
