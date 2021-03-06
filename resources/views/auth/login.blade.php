@extends('layouts.master')

@section('content')

<div class="container">
    <h3>Login</h3>
    <form method="POST" action="/login" >

            {{ csrf_field() }}


            <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" >
            @include("partials.error-message", ["fieldName" => "email"])
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="Password" >
            @include("partials.error-message", ["fieldName" => "password"])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            @include("partials.error-message", ["fieldName" => "message"])
    </form>
</div>

@endsection
