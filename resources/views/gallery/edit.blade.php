@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['GalleryController@update', $post->id], 'method' => 'POST']) !!}
        <div class = "form-group">
            {{Form::label('comment', 'Comment')}}
            {{Form::textarea('comment', $post->comment, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Comment'])}}        
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Update!', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection