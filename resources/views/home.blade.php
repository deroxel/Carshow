@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="panel-body">
{{--                     @if(count($posts))
                        <div class="container"> 
                            @foreach($posts as $post)
                                <a href="/gallery/{{$post->id}}"><img style="width: 200px; height: 200px; object-fit: cover; margin: 5px" src="storage/Images/UserImages/{{$post->image}}" class="rounded float-left" alt="{{$post->comment}}"></a>
                            @endforeach
                        </div> 
                    @endif  --}}  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
