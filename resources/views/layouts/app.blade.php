<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Documentos Tano</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/master.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    

</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" id="tituloNav">
                    {{ config('DocumentosTano', 'DocumentosTano') }}
                </a>
                <!-- <button type="button" class="btn btn-dark" id="modoNoche"></button> -->
            </div>
        </nav>
        <main class="py-4">
            <h4 class="text-center font-italic"> Documentos Tano </h4>
            <hr>
            @yield('content')
        </main>
    </div>
</body>
<script>
    
</script>
</html>
