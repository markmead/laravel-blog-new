@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-outline-secondary">Go back</a>
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->created_at }}</p>
  <div>{{ $post->body }}</div>
@endsection