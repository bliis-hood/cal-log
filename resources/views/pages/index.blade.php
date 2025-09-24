@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
       @foreach ($posts as $post )
        @endforeach
    @else
         <p>No posts found</p>
    @endif
@endsection
