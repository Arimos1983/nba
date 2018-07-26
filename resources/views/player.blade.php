@extends('layouts.master')

@section('content')

<div>
    <p>Player: {{$player->first_name ." ".  $player->last_name}}</p>
    <p>Email: {{$player->email}}</p>
    <p>Team: <a href="{{'/teams/'.$player->team->id}}">{{$player->team->name}}<a/></p>
</div>

@endsection
