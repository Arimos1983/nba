@extends('layouts.master')

@section('content')

<div>

    <p>Name: {{$team->name}}</p>
    <p>Email: {{$team->email}}</p>
    <p>Address: {{$team->address}}</p>
    <p>City: {{$team->city}}</p>
    <p>Players: </p>

    <ul>
    @foreach($team->players as $player)
        <li>
            <a href="{{'/players/'.$player->id}}">

                {{$player->first_name ." ". $player->last_name}}

            </a>
        </li>
    @endforeach
    </ul>

</div>
<div class="container">
    <h3>Post comment:</h3>
    <form method="POST" action="{{'/teams/'.$team->id.'/comment'}}" >

            {{ csrf_field() }}
            <div class="form-group">
            <label for="content">Comment</label>
            <textarea name="content" type="text" class="form-control" id="content" ></textarea>
            @include("partials.error-message", ["fieldName" => "content"])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div>
    <h3>Comments:</h3>
    <ul>
        @foreach($team->comments as $comment)
            <li>{{$comment->content}}</li>

        @endforeach
    </ul>
</div>

@endsection
