<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('dropdown.js') }}"></script>
</head>
<body>
    <nav class="custom-navbar">
        <a class="navbar-brand" href="#"> Blog Dashboard</a>
         <div class="dropdown">
        <span class="welcome-text" onclick="toggleDropdown()">
            Welcome, {{ Auth::user()->name ?? 'Guest' }}
        </span>
        <div id="userDropdown" class="dropdown-menu">
            <p class="profile-text">{{ Auth::user()->email ?? 'No email' }}</p>

            <!-- Logout form -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>
    </nav>
            <!-- Posts -->
                    <div class="card-body">
                        <h5 class="card-title">Posts</h5>
                        <p class="fs-3">{{ $postsCount ?? 0 }}</p>
                        <a href="{{ route('posts.index') }}" class="btn custom-btn">Manage Posts</a>
                    </div>
</body>
</html>
