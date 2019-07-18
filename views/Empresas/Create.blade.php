@include('layouts0.master')

@section('sec1')
<form class="" action="{{ route('Empresas.store')}}" method="post">
{{ csrf_field()}}


<div class="form-group">
  <label for="exampleInputNombre">Nombre</label>
  <input type="text" name="nombre" class="form-control" id=exampleInputNombre placeholder="Ingresa el nombre">
</div>

<div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
  <label for="empresa_id" class="col-md-4 control-label">Seleccion la empresa</label>
  <select class="" name="empresa_id">
    @foreach($empresas as $empresa)
    <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="exampleInputPrecio">Monto</label>
  <input type="number" name="monto" step="0.5" class="form-control" id=exampleInputmonto placeholder="Ingresa el monto">
</div>

<div class="form-group">
  <label for="exampleInputCantidad">Comentarios</label>
  <input type="text" name="comentarios" class="form-control" id=exampleInputCantidad placeholder="Ingresa el comentario">
</div>
<button type="submit" class="btn btn-info">Introducir</button>
</form>
