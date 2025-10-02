<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="create">
    <h1>Create a New Post</h1>
    </div>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" class="create-form">
        @csrf
        <label>Title:</label>
        <input type="text" name="title"><br><br>

        <label>Content:</label><br>
        <textarea name="body"></textarea><br><br>

        <button type="submit">Save Post</button>
    </form>
</body>
</html>