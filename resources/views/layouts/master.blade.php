<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Top navbar example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    @if((auth()->check()))
    <a class="nav-link" href="{{'/'}}">Home</a>
    @else
    <a class="nav-link" href="{{'/login'}}">Home</a>
    @endif
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        @if((auth()->check()))
            <li class="nav-item active">
                <a class="nav-link" href="#">User: {{auth()->user()->name}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{'/logout'}}">Logout<span class="sr-only">(current)</span></a>
            </li>
        @else
            <li class="nav-item active">
                <a class="nav-link" href="{{'/register'}}">Register<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{'/login'}}">Login<span class="sr-only">(current)</span></a>
            </li>
        @endif
      </ul>

    </div>
  </nav>

  @yield('content')

</body>
