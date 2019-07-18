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
  <h1 class="tex-primary">Empresas</h1>
  <table class="table table-dark table-bordered">
    <thead>
      <tr>

        <th scope="col">Nombre</th>
        <th scope="col">RFC</th>
        <th scope="col">Direccion</th>
          <th scope="col">Mas info</th>
                <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>

      @foreach($activos as $activo)
      <tr>
        <td class="text.center">{{$activo->id}}</td>
        <td class="text.center">{{$activo->nombre}}</td>
        <td class="text.center">{{$activo->empresa_id}}</td>
        <td class="text.center">{{$activo->monto}}</td>
        <td class="text.center">{{$activo->comentarios}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('pymeController@edit', $activo->id)}}" >
          <i class="material-icons md-18">edit</i></a></td>

            <td>

              <a class="btn btn-info btn-xs" href="{{url('/pyme', $activo->id)}}" >
              <i class="material-icons md-18">description</i></a>
            </td>

              <td>
                @if (Auth::user()->level_id==1)
              <form  class="" action="{{ route('pyme.destroy',$activo->id) }}" method="post" onsubmit="return ConfirmDelete();">
              {{ csrf_field() }}
              {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger" name="button">
                <i class="material-icons md-18">delete</i>
                Eliminar
              </button>
            </form>
@endif
          <td><button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#informacion">Mas info</button></td>
          </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
