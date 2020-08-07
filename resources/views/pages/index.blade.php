@extends('layouts.app')



@section('content')


<div class="text-center">
   <h1>Selamat datang di JalanBareng</h1>
    

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    @if(Auth::guest())
    <p>Login or Register</p>
    <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
   
    @endif

    </div>
@endsection

