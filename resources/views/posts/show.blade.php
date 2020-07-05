@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary">Go back</a>
    <h1 class="mt-4">{{ $post->title }}</h1>
    <small>{{ $post->created_at }}</small>
    <hr>
    <div>{{ $post->body }}</div>
    <hr>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>
@endsection