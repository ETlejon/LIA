<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
  <link rel="stylesheet" href="{!! asset('css/mystyles.css')!!}">
  <link  href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Base de datos</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Alumnos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Mas  <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Otro contenido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
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
  <script src="{!! asset('js/bootstrap.min.js')!!}"></script>
</body>
</html>
