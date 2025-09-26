@extends('layouts.app')

@section('content')

    <!-- Show success message -->
    @if(session('success'))
        <div class="reg-su">
            {{ session('success') }}
        </div>
    @endif

    <!-- Show validation errors -->
    @if($errors->any())
        <div class="reg-err">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Register Form -->
    <form method="POST" action="{{ route('register.form') }}" class="form" id="register-form">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit" class="submit-btn">Register</button>
    </form>
@endsection
