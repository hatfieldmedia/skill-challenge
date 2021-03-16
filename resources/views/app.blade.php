<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">


        <title>Skill Challenge</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

        @if(parse_url(config('app.url'), PHP_URL_SCHEME) === 'https')
            <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
            <script src="{{ secure_asset('js/app.js') }}" defer></script>
        @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <script src="{{ asset('js/app.js') }}" defer></script>
        @endif

    </head>
    
    <body style="overflow-x: hidden;">
        @include('header')

        <main id="app" class="container-fluid">
            <div id="scroll-container">
                @yield('content')
            </div>
        </main>