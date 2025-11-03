<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('password.js') }}"></script>
</head>
<body class="rest">

    <div class="pword">
        <h2>Reset Password</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <!-- Email -->
            <div class="ail">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', request('email')) }}" required autofocus>
                @error('email') <p>{{ $message }}</p> @enderror
            </div>

            <!-- New Password -->
            <div class="word">
                <label>New Password</label>
                <input type="password" id="password" name="password" class="input-field" required>
                @error('password') <p>{{ $message }}</p> @enderror
            </div>

            <!-- Confirm Password -->
            <div class="conf">
                <label>Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="input-field" required>
            </div>

            <div class="show-password-container">
                <input type="checkbox" id="showPassword">
                <label for="showPassword">Show Password</label>
            </div>

            <button type="submit">
                Reset Password
            </button>
        </form>
    </div>

</body>
</html>
