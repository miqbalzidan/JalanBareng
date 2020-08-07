@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>Group of {{$post->title}}</h1>
        <br>
    <h2><a href="/postgroup/{{$post->id}}/create" class="float-right btn btn-primary">>>Create new group<<</a></h2>
  
    <br>
    <br>
    @if(count($post->groups)>0)
        @foreach($post->groups as $group)
            <div class="jumbotron"> 
                <h3><a href="/viewgroup/{{$group->id}}">{{$group->name}}</a></h3>
                <a href="/viewgroup/{{$group->id}}" class="float-right" >>View group</a>
                <h4>{!!$group->note!!}</h4>
                <small> 
                    Grup Leader code : {{$group->creator_id}}
                    <br> 
                    Created Date : {{$post->created_at}} 
                </small>

            </div>
        @endforeach
    @else
        <h2>No group found</h2>
    @endif
@endsection