@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <div class="jumbotron">
                        @if(($user->group_id)==0)
                            <h2> No Group Joined </h2>
                        @else
                            <h1> Joined Group </h1>
                            <br>
                            <h2>Group Name : </h2>
                            <h2>{{$user->group->name}}</h2>
                            <br>
                            <h2>Group Notes : </h2>
                            <h2>{!!$user->group->note!!}</h2>
                            <a href="/viewgroup/{{$user->group_id}}" class="float-right" >>View group</a>

                        @endif

                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
