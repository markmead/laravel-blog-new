@extends('layouts.app')

@section('content')
<h1>Posts</h1>

@if(count($posts) > 0)
<div class="container-fluid">
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-sm">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{  $post->title  }}</h5>
            <p class="card-text">{{  $post->created_at  }}</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endif
@endsection