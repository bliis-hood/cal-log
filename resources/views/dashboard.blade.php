@extends('layouts.app')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<!-- 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#"> Blog Dashboard</a>
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
                        <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">Manage Posts</a>
                    </div>
                </div>
    </div>
</x-app-layout>
@endsection
