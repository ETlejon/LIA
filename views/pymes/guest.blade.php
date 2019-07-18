@extends('layouts.mtr')
section('sec2')
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
        <th scope="col">Editar</th>
          <th scope="col">Mas info</th>
                <th scope="col">Elimiar</th>
      </tr>
    </thead>
    <tbody>
      <center>
        <a href="{{ route('dbo_alumnos.create') }}" class="btn btn-primary"  ><i class="material-icons md-18">add_box</i>Añadir Alumno</a>
      </center>
      @foreach($activos as $activo)
      <tr>
        <td class="text.center">{{$activo->id}}</td>
        <td class="text.center">{{$activo->nombre}}</td>
        <td class="text.center">{{$activo->empresa_id}}</td>
        <td class="text.center">{{$activo->monto}}</td>
        <td class="text.center">{{$activo->comentarios}}</td>
        <td><a class="btn btn-primary btn-xs" href="{{action('pymeController@edit', $activo->id)}}" >
          <i class="material-icons md-18">edit</i></a></td>

            <td><a class="btn btn-info btn-xs" href="{{url('/pyme', $activo->id)}}" >
              <i class="material-icons md-18">description</i></a></td>
              <td>
            <form  class="" action="{{ route('pyme.destroy',$activo->id) }}" method="post" onsubmit="return ConfirmDelete();">
              {{ csrf_field() }}

            <input name="_method" type="hidden" value="DELETE">
              <button type="submit" name="Eliminar" class="btn btn-danger btn-block" >
                <i class="material-icons md-18">delete</i>
              </button>
            </form>
          <td><button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#informacion">Mas info</button></td>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="informacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table>

        <tbody>

          <tr>

            <td class="text.center">{{$activo->id}}</td>
            <td class="text.center">{{$activo->nombre}}</td>
            <td class="text.center">{{$activo->empresa_id}}</td>
            <td class="text.center">{{$activo->monto}}</td>
            <td class="text.center">{{$activo->comentarios}}</td>

          </tr>

        </tbody>
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

endsection
