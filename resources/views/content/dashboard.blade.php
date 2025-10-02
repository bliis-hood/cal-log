<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>
<body>
    <nav class="custom-navbar">
        <a class="navbar-brand" href="#"> Blog Dashboard</a>
        <span class="welcome-text">
            Welcome, {{ Auth::user()->name ?? 'Guest' }}
        </span>
    </nav>
            <!-- Posts -->
                    <div class="card-body">
                        <h5 class="card-title">Posts</h5>
                        <p class="fs-3">{{ $postsCount ?? 0 }}</p>
                        <a href="{{ route('posts.index') }}" class="btn custom-btn">Manage Posts</a>
                    </div>
</body>
</html>
