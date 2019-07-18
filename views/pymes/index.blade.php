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

    <center>
              <a href= "{{ route('pymes.create')}}"
              class="btn btn-primary">
              <i class="material-icons md-18"> check_circle</i>
               Crear entrada
              </a>
    </center>

    <table class="table table-dark table-bordered">
      <thead>

        <tr>


          <th scope="col">Nombre</th>
       <th scope="col">Nombre de la empresa</th>
          <th scope="col">Monto</th>
          <th>Comentarios</th>
          <th scope="col">Editar</th>
            <th scope="col">Mas info</th>
              @if (Auth::user()->level_id==1)
                  <th scope="col">Eliminar</th>

                  @endif
                </tr>

      </thead>

      <tbody>
<tr>

</tr>
@foreach($empresas as $empresa)
          @foreach($pasivos as $pasivo)
          <tr>

            <th class="text.center">{{$pasivo->nombre}}</th>
            <th class="text.center">{{$empresa->nombre}}</th>
            <th class="text.center">{{$pasivo->monto}}</th>
            <th class="text.center">{{$pasivo->comentarios}}</th>



          <th> <a href= "{{ url('/pymes/'.$pasivo->id.'/edit')}}"
          class="btn btn-warning">
          <i class="material-icons md-18"> edit</i>
          Editar
          </a></th>

          <th><a href="{{url('/pasivos/'.$pasivo->id)}}" class="btn btn-primary"  data-toggle="modal" data-id='{{$pasivo->id}}' data-target="#informacion{{$pasivo->id}}"><i class="material-icons md-18">description</i></a></th>

          <th>

                @if (Auth::user()->level_id==1)
              <form  class="" action="{{ route('pymes.destroy',$pasivo->id) }}" method="post" onsubmit="return ConfirmDelete();">
              {{ csrf_field() }}
              {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger" name="button">
                <i class="material-icons md-18">delete</i>
                Eliminar
              </button>
            </form>

            @endif


</th>









@endforeach
@endforeach
      </table>
    </div>


</tbody>






    <th>

    @foreach($pasivos as $pasivo)
@foreach($empresas as $empresa)
    <div class="modal fade" id="informacion{{$pasivo  ->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td class="text.center">{{$pasivo->nombre}}</td>
                  <td>
                    <td class="text.center">{{$empresa->nombre}}</td>
                  </td>
                  <td class="text.center">{{$pasivo->monto}}</td>
                  <td class="text.center">{{$pasivo->comentarios}}</td>
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







          </tbody>
        </table>
      </div>
@endforeach
@endforeach
                      @endsection
