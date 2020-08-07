@extends('layouts.app')

@section('content')
    <h1>Daftar Gunung </h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="jumbotron">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <a href="/postgroup/{{$post->id}}" class="float-right">>>View Group</a>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
    @else
            <p>No posts found</p>
    @endif
@endsection