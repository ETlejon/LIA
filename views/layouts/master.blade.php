<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
      <link rel="stylesheet" href="{!! asset('css/mystyles.css')!!}">
    <title>operaciones</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg   text-primary ">
  <a class="navbar-brand" href="#">Angello</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Angello.blade.php">Informatica<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">condiciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">operaciones</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Lista desplegable
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Area</a>
          <a class="dropdown-item" href="#">Perimetro</a>
          <a class="dropdown-item" href="#">Volumen</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
  <h1 class="display-4">Bienvenido!</h1>
  <p class="lead">Las operaciones basicas son .</p>
  <hr class="my-4">
  <p>Podemos encontrar operaciones mas complicadas con algebra linial y diferencial..</p>
  <p class="lead">
    <a class="btn btn-primary btn-md" href="#" role="button">Leer mas</a>
  </p>
</div>
<div class="row">
  <div class="col-6">
    sec1
    @yield('sec1')
  </div>
  <div class="col-6">
    sec2
    @yield('sec2')
  </div>
  <div class="col-6">
    seccion
    sec3
    @yield('sec3')
  </div>
  <div class="col-6">
    sec4
    @yield('sec4')
  </div>
</div>
</div>
</div>
<script src="{!! asset('js/jquery-3.4.1.min.js')!!}"></script>
<script src="{!! asset('js/bootstrap.min.js')!!}"></script>




  </body>
</html>
