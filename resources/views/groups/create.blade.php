@extends('layouts.app')

@section('content')
    <h1>Create Group</h1>
    <h2>Untuk gunung : {{$post->title}}</h2>
    <h2>Kode Gunung : {{$post->id}}</h2>
    <br>
    {!! Form::open(['action' => 'GroupsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('post_id', 'Kode Gunung')}}
                {{Form::text('post_id', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Kode gunung'])}}
        </div>
        <div class="form-group">
                {{Form::label('note', 'Note')}}
                {{Form::textarea('note', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
    
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}  

        {!! Form::close() !!}

@endsection