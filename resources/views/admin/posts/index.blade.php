@extends('layouts.admin')

@section('content')

    @if(Session::has('post_deleted'))
        <p class="alert alert-success"><strong>Success!</strong> {{ session('post_deleted') }}</p>
    @endif
    
    <h1>Posts</h1>
    
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>Owner</th>
        <th>Created</th>
        <th>Last Updated</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
        @if($posts)    
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img width="50px" src="{{ $post->photo ? $post->photo->file : "/images/place_holder.jpg" }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->category_id ? $post->category_id : "Post has no category" }}</td>
                    <td>{{ $post->user ? $post->user->name : "Post has no user" }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td><a href="{{ route('admin.posts.edit', $post->id) }}/">Edit</a></td>
                </tr>
            @endforeach
        @endif
    </tbody>
  </table>
@endsection