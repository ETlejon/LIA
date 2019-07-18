<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
      <link rel="stylesheet" href="{!! asset('css/mystyles.css')!!}">
    <header>
      <nav class="navbar navbar-expand-lg   text-primary ">
    <a class="navbar-brand" href="/miseccion">Angello</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/recta">Recta<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tipodecambio">Tipo de cambio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ecuacion">Ecuacion</a>
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
    </header>
  </head>
  <body>
    seccion1
      @yield('sec1')
      <div class="container">
        seccion2
          @yield('sec2')
      </div>
      seccion3
        @yield('sec3')
        <div class="container">
          seccion4
            @yield('sec4')
        </div>
        <!-- Footer -->
    <footer class="page-footer font-small blue">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="ourteams-f.com"> ourteams-f.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <script src="{!! asset('js/jquery-3.4.1.min.js')!!}"></script>
    <script src="{!! asset('js/bootstrap.min.js')!!}"></script>

  </body>
</html>
