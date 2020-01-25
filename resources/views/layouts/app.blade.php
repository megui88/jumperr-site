
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <meta property="og:locale" content="it_IT" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Jumperr titulo" />
    <meta property="og:description" content="Jumperr descripcion" />
    <meta property="og:url" content="https://www.jumperr.com/" />
    <meta property="og:site_name" content="Jumperr" />
    <meta name="description" content="Lider nella costruzione di business e successi digitali.">
    <meta name="keywords" content="Paginas web, Desarrollo Web, Diseño Web">
    <meta name="author" content="Jumperr">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jumperr') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{secure_asset('/images/iconos/favicon.png')}}"/>

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    @stack('css')

</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/jquery-transit.js') }}"></script>    
    @stack('scripts')
<script src="https://snapwidget.com/js/snapwidget.js"></script>
</body>
</html>
