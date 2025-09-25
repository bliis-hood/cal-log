<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         {{-- <link rel="stylesheet" href="style.css"> --}}
        <link rel="stylesheet" href="{{ asset('style.css') }}">

        <title>{{ config('app.name', 'CAR-LOG') }}</title>
    </head>
    <body>
         @include('inc.navbar')
        <div class="topnav">
        @yield('content')
    </body>
</html>
