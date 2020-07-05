@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary">Go back</a>
    <h1 class="mt-4">{{ $post->title }}</h1>
    <small>{{ $post->created_at }}</small>
    <hr>
    <div>{{ $post->body }}</div>
    <hr>
    @if (!Auth::guest() && (auth()->user()->id == $post->user_id ))
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>

        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE']) !!}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    @endif
@endsection