<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1>All Posts</h1>
    <div class="ate">
    <a href="{{ route('posts.create') }}">Create New Post</a>
    </div>
    {{-- Loop through all posts --}}
    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <small>Posted on {{ $post->created_at->format('d M Y') }}</small>
        </div>
    @endforeach

    {{-- If there are no posts, show a message --}}
    @if ($posts->isEmpty())
        <p>No posts available yet.</p>
    @endif
</body>
</html>

            
