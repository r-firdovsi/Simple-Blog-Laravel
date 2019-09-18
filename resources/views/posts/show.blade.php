@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    <hr>
    <img style="width: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <h1>{{ $post->title }}</h1> <br>
    <div>
        {!! $post->body  !!}
    </div>
    
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
           <div class="d-flex justify-content-between mb-5">
               <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    
               {!! Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' =>
               'd-inline pull-right'])
                !!}
               {{ Form::hidden('_method', 'DELETE') }}
               {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
               {!! Form::close() !!}
           </div>
        @endif
    @endif
    
@endsection
