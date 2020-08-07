@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Group Detail</h1>
                    <h2>Destination : {{$group->post->title}}</h2>
                    <h2>Group Name : {{$group->name}}</h2>
                    <h2>Group Leader code : {{$group->creator_id}}</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                            <table class="jumbotron">
                                 <tr></tr>
                                    <th>Group Member : </th>
                                @foreach($group->users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                </tr>
                                @endforeach
                                <tr><br></th>
                                <tr>
                                    <th>Group Notes :</th>
                                </tr>
                                 <td>{!!$group->note!!}</td>
                                 <tr>  
                            </table>
                            @if((auth()->user()->group_id) == 0)
                                <a href="/home/join/{{$group->id}}" class="float-right btn btn-primary" >JOIN GROUP</a>
                            @else
                                 <a href="/home/exit" class="float-right btn btn-danger" >EXIT GROUP</a>
                            @endif
                            
                    </div>
            
            </div>
        </div>
    </div>
</div>
@endsection
