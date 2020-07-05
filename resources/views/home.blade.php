@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            @if (count($posts) > 0)
                <table class="table table-striped mt-4">
                    <tr>
                        <th>Title</th>
                        <th>Created at</th>
                        <th></th>
                    </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a></td>
                        </tr>
                    @endforeach
                </table>
            @else
                <div class="mt-4">
                    <p>You haven't made any posts</p>
                    <a href="/posts/create" class="btn btn-primary">Create posts</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
