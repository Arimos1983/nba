@extends('layouts.master')

@section('content')

<div>

    <p>Name: {{$team->name}}</p>
    <p>Email: {{$team->email}}</p>
    <p>Address: {{$team->address}}</p>
    <p>City: {{$team->city}}</p>
    <p>Players: </p>

    @foreach($team->players as $player)

        <a href="{{'/players/'.$player->id}}">

            {{$player->first_name ." ". $player->last_name}}

        </a>

    @endforeach

</div>

@endsection
