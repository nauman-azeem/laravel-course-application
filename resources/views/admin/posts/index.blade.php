@extends('layouts.admin')
@section('content')
  <h1>Posts</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>User</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($posts)
        @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td><img style="max-height: 50px" src="{{$post->photo?$post->photo->file: 'http://placehold.it/400x400'}}" alt="" /></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
            <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
            <td>{{str_limit($post->body, 40)}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
      @endif
    </tbody>
  </table>
@endsection
@section('footer')
@endsection