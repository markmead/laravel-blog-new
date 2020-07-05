@extends('layouts.app')

@section('content')
<h1>Edit {{ $post->title }}</h1>

{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title', ['class' => 'form-label']) }}
        {{ Form::text('title', $post->title, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('Body', 'Body', ['class' => 'form-label']) }}
        {{ Form::textArea('body', $post->body, ['class' => 'form-control']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection