@extends('layouts.app')
@section('content')
<h1>Gallery</h1>

<div class="container">
    @if(count($posts))
        @foreach($posts as $post)
            <a href="/gallery/{{$post->id}}"><img style="width: 200px; height: 200px; object-fit: cover; margin: 5px" src="storage/Images/UserImages/{{$post->image}}" class="rounded float-left" alt="{{$post->comment}}"></a>
        @endforeach
    @else
        <p>No posts found!</p>
    @endif
</div>
@endsection