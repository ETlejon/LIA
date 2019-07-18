@extends('layouts0.master')
@section('sec1')
<script type="text/javascript">
  function ConfirmDelete(){
    var x = confirm("Esta seguro que desea eliminar?");
    if(x)
    {
      return true;
    }else
    {
      return false;
    }
  }
</script>
<div class="container">
  <h1 class="tex-primary">Pasivos</h1>
  <table class="table table-dark table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Empresa</th>
        <th scope="col">Monto</th>
        <th scope="col">Comentarios</th>

      </tr>
    </thead>
    <tbody>

      @foreach($activos as $activo)
      <tr>
        <td class="text.center">{{$activo->id}}</td>
          <td class="text.center">{{$activo->nombre}}</td>
        @foreach($empresas as $empresa)
        <td class="text.center">{{$empresa->nombre}}</td>
        @endforeach
        <td class="text.center">{{$activo->monto}}</td>
        <td class="text.center">{{$activo->comentarios}}</td>
          @endforeach

        </tbody>
      </table>
    </div>
