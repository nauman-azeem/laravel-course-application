@extends('layouts.admin')
@section('content')
  <h1>Media</h1>
  @if($photos)
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created</th>
      </tr>
    </thead>
    <tbody>
      @foreach($photos as $photo)
        <tr>
          <td>{{$photo->id}}</td>
          <td><img style="max-height: 50px" src="{{$photo->file}}" alt=""></td>
          <td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
          <td>
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
              <div class="form-group">
                {!! Form::submit('DELETE', ['class'=>'btn btn-danger btn-xs']) !!}
              </div>
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @endif
@endsection
@section('footer')
@endsection