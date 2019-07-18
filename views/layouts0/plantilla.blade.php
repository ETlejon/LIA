<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/js/bootsrap.min.js">
  <link rel="stylesheet" href="/css/estilos.css">
  <meta charset="utf-8">
  <title></title>
</head>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/imagenes/spartan.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Emperador
  </a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Fierro</button>
  </form>
</nav>
<body>
  <div class="container">
    @yield('cuerpo')
  </div>
  <br><br>
  <footer>
    <div class="row">
      <div class="col-8">
      </div>
      <div class="col-3">
        <div class="card">
          <div class="card-header">
            <div class="text-center">
              Informacion de contacto
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-10">
                <div class="text-muted">
                  Correo: emperador@galletas.com
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="text-muted">
                  Telefono: 664-1236547
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
