<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Courses') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">{{ config('app.name', 'Courses') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all-category')}}">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all-courses')}}">Courses</a>
      </li>
    </ul>
    @if (Auth::guest())
      <div class="form-inline my-2 my-lg-0">
      <a href="{{ route('login')}}" class="btn btn-outline-success my-2 my-sm-0">Login</a>
      <a href="{{ route('register')}}" class="btn btn-outline-success my-2 my-sm-0">Cadastro</a>
    </div>
    @else
      <div class="form-inline my-2 my-lg-0">
      <a href="#" class="my-2 my-sm-0"> {{ Auth::user()->name }}</a> 
      <a href="{{ route('logout')}}" class="btn btn-outline-success my-2 my-sm-0">Sair</a>
    </div>
    @endif
    
  </div>
</nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
