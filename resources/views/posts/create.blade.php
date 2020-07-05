@extends('layouts.app')

@section('content')
<h1>Create</h1>

{!! Form::open(['action' => 'PostsController@store']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title', ['class' => 'form-label']) }}
        {{ Form::text('title', '', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('Body', 'Body', ['class' => 'form-label']) }}
        {{ Form::textArea('body', '', ['class' => 'form-control']) }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection