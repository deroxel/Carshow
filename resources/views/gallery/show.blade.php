@extends('layouts.app')
@section('content')
    <a href = "/gallery" class = "btn btn-default" >Return</a>
    <h1>Photo</h1>

    <img style="max-height: 700px; max-width: 60%; margin-right: 50px" src="/storage/Images/UserImages/{{$post->image}}" class="rounded float-left" alt="Unable to load image">
    <h3>{!!$post->comment!!}</h3>
    <small>Uploaded by {{$post->user}} at {{$post->created_at}}</small><br>

    @if(!Auth::guest())
        @if(Auth::user()->username == $post->user)
            <a href="/gallery/{{$post->id}}/edit" class="btn btn-outline-success" style="margin: 10px 0px">Edit</a>
            {!!Form::open(['action' => ['GalleryController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection