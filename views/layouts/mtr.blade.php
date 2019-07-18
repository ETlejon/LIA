<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/mystyles.css')!!}">
    <link  href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Examen</title>
  </head>
  <header>
    <nav class="navbar navbar-expand-lg     navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Grados
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../grades/create">Crear</a>
          <a class="dropdown-item" href="../grades/index">Mostrar</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Docentes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="teachers/create">Crear</a>
          <a class="dropdown-item" href="{{url('/grades/')}}">Mostrar</a>

        </div>
      </li>
    </ul>
  </div>
</nav>

  </header>
  <body>

    <div class="row">
      <div class="col-6">

        @yield('sec1')

      </div>
      <div class="col-6">

        @yield('sec2')
      </div>
      <div class="col-6">

        @yield('sec3')
      </div>
      <div class="col-6">

        @yield('sec4')
      </div>
    </div>

    <script src="{!! asset('js/jquery-3.4.1.min.js')!!}"></script>
    <script src="{!! asset('js/bootstrap.js')!!}"></script>
  </body>
</html>
