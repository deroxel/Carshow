@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{Form::label('comment', 'Comment')}}
            {{Form::textarea('comment', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Comment'])}}        
        </div>

        <div class="form-group">
            {{Form::file('image')}}
        </div>

        {{Form::submit('Upload!', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection