@extends('layouts.app')

@section('content')
       <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="form" id="login-form">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="submit-btn">Login</button>
        </form>
    </div>
@endsection
