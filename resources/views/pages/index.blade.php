@extends('layouts.app')

@section('content')
     @include('inc.navbar')
        <div class="topnav"></div>
    <div class="jumbotron text-center">
        <h1>Discover The Future With Us</h1>
        <p>It is where you discover new things and put new things</p>
        <div class="link-container">
        <a href="{{ route('register.form') }}" class="link register-link">Register</a>
        <a href="{{ route('login.form') }}" class="link login-link">Login</a>
        </div>
@endsection
