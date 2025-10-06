<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body style="font-family: Arial; background-color: #f4f4f4; padding: 40px;">

    <div style="max-width: 400px; margin: auto; background: white; padding: 20px; border-radius: 8px;">
        <h2>Reset Password</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <!-- Email -->
            <div style="margin-bottom: 15px;">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', request('email')) }}" required autofocus
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                @error('email') <p style="color:red;">{{ $message }}</p> @enderror
            </div>

            <!-- New Password -->
            <div style="margin-bottom: 15px;">
                <label>New Password</label>
                <input type="password" name="password" required
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                @error('password') <p style="color:red;">{{ $message }}</p> @enderror
            </div>

            <!-- Confirm Password -->
            <div style="margin-bottom: 15px;">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <button type="submit" 
                    style="background-color: black; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                Reset Password
            </button>
        </form>
    </div>

</body>
</html>
