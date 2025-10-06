<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
     <ul class="nav navbar-nav">
        <li><a href="/posts">Blogs</a></li>
     </ul>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
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

            
