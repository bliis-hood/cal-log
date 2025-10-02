<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CAR-LOG</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
     @include('inc.navbar')
        <div class="topnav">
        <h1>Discover The Future With Us</h1>
        <p>It is where you discover new things and put new things</p>
        </div>
    <body>
        <div class="relative">
            @if (Route::has('login'))
                <div class="sm">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dash">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="on">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="reg">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>   
    </body>        
