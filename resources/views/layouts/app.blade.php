<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Sklep z masłami orzechowymi" />
  <meta name="author" content="Adrian Szymczyk" />
  <title>Orzechowy świat - wszystkie masła orzechowe świata</title>
  <link rel="icon" type="image/x-icon" href="{{URL::asset('images/favicon.png')}}"/>
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">
</head>
<body>
  <header>
    <h1 class="site-heading text-center text-faded d-none d-lg-block">
      <span class="site-heading-lower">Akademix</span>
    </h1>
  </header>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
      <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Orzechowy Świat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="{{ route('home') }}">Strona główna</a></li>
          <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="{{ route('about') }}">O nas</a></li>
          <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="{{ route('products') }}" id="productsSite">Produkty</a></li>
          <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="{{ route('posts') }}">Posty</a></li>
          <li class="nav-item px-lg-3"><a class="nav-link text-uppercase" href="{{ route('findus') }}">Znajdź nas</a></li>
          @auth
            <li class="nav-item px-lg-2 "><a class="nav-link" href="{{ route('dashboard') }}"><i class="far fa-user"></i> {{ auth()->user()->username }}</a></li>
            <li class="nav-item px-lg-3">
              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary ml-lg-3">Logout</button>
              </form>
            </li>
          @endauth
          @guest
            <li class="nav-item px-lg-0"><a class="nav-link text-uppercase" href="{{ route('dashboard') }}"><i class="fas fa-align-left"></i> Profil</a></li>
            <li class="nav-item px-lg-2"><a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a></li>
            <li class="nav-item px-lg-3"><a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a></li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <!-- JQuery-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
