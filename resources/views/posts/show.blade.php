@extends('layouts.app');

@section( 'content')
<a href="/lsapp/public/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<img style="width: 100%" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}">
<br><br>
<div class='card-body'>
    {!!$post->body!!}
</div><br>
<hr>
<small>written on {{$post->created_at}} by {{$post->user->n}}</small>

<hr>
<!--displaying edit and delete only if the person is login-->
@if(!Auth::guest())
   @if(Auth::user() ->id == $post->user_id)
<a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-info
    ">Edit</a>
        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 
        'method'=>'POST','class'=>'float-right'])!!}
            {{ Form::hidden('_method', 'DELETE')}}
            {{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}}
        {!!Form::close()!!}
        @endif
@endif
@endsection