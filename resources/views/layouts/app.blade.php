<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/DataTables-1.10.19/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            @include('layouts.navbar')
        </div>
    </nav>

    <main class="py-4">
        @if(Session::get('message'))
            {!! Session::get('message') !!}
        @endif
        @yield('content')
    </main>
</div>
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/bootstrap-4.0.0-dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/DataTables-1.10.19/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/vendor/DataTables-1.10.19/js/jquery.dataTables.min.js') }}"></script>
@yield('js')
</body>
</html>
