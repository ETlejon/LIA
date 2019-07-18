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
        <th scope="col">Editar</th>
          <th scope="col">Mas info</th>
            @if (Auth::user()->level_id==1)
                <th scope="col">Eliminar</th>
                @else

                @endif
      </tr>
    </thead>
    <tbody>

      <center>
                <a href= "{{ route('Empresas.create')}}"
                class="btn btn-primary">
                <i class="material-icons md-18"> check_circle</i>
                 Crear entrada
                </a>
      </center>




      @foreach($empresas as $empresa)
        <tr>
          <td class="text.center">{{$empresa->nombre}}</td>
          <td class="text.center">{{$empresa->rfc}}</td>
          <td class="text.center">{{$empresa->direccion}}</td>

          @if(Auth::user()->level_id==1)
          <td><a class="btn btn-primary btn-xs" href="{{action('pymeController@edit', $empresa->id)}}" >
            <i class="material-icons md-18">edit</i></a></td>

            <th><a href="{{url('/empresas/'.$empresa->id)}}" class="btn btn-primary"  data-toggle="modal" data-id='{{$empresa->id}}' data-target="#informacion{{$empresa->id}}"><i class="material-icons md-18">description</i></a></th>

          <td>

            <form  class="" action="{{ route('pymes.destroy',$empresa->id) }}" method="post" onsubmit="return ConfirmDelete();">
              {{ csrf_field() }}

              <input name="_method" type="hidden" value="DELETE">
              <button type="submit" name="Eliminar" class="btn btn-danger btn-block" >
                <i class="material-icons md-18">delete</i>
              </button>
            </form>
            @endif
          </td>



        </tr>
        @endforeach

      </tbody>




      <th>

      @foreach($empresas as $empresa)

      <div class="modal fade" id="informacion{{$empresa->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Empresas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table>

                <tbody>

                  <tr>
                    <td class="text.center">{{$empresa->nombre}}</td>
                    <td>
                    </td>
                    <td class="text.center">{{$empresa->monto}}</td>
                    <td class="text.center">{{$empresa->comentarios}}</td>
                            </tbody>

                          </table>

                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>


    </th>
    </table>
  </div>
  @endforeach
@endsection
