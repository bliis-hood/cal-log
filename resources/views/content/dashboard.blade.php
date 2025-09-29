<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#">📝 Blog Dashboard</a>
        <span class="text-white">Welcome, {{ Auth::user()->name ?? 'Guest' }}</span>
    </nav>

    <div class="container mt-4">
        <div class="row g-4">

            <!-- Posts -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Posts</h5>
                        <p class="fs-3">{{ $postsCount ?? 0 }}</p>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary btn-sm">Manage Posts</a>
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="fs-3">{{ $categoriesCount ?? 0 }}</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-success btn-sm">Manage Categories</a>
                    </div>
                </div>
            </div>

          
        </div>
    </div>
</body>
</html>
