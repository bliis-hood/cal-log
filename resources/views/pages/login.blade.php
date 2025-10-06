<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log IN</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
<div class="log-on" >
    <h2>Login</h2>

    <!-- Show session messages -->
    @if(session('success'))
        <div class="log-su">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="log-err">
            <ul>
                @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="log-email">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        <div class="log-pass">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">
            Login
        </button>
    </form>
</div>


