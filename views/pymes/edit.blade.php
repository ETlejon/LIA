@include('layouts0.master')

@section('sec1')
<form class="" action="{{ route('pymes.update',$pasivos->id)}}" method="post" role="form">
{{ csrf_field()}}
{{method_field('PATCH')}}
<div class="container">
<div class="form-group">
  <label for="exampleInputNombre">Nombre</label>
  <input type="text" name="nombre" class="form-control" id=exampleInputNombre value="{{$empresas->nombre}}">
</div>


<div class="form-group">
      <label for="exampleInputEmail1">Seleccione empresa</label>
      <select name="empresa_id" id="inputidgra" class="form-control">
        <option value="">-- Pasivo --</option>
        @foreach ($empresas as $empresa)
        <option value=" {{ $empresa['id'] }}"> {{ $empresa['nombre'] }}</option>
        @endforeach
      </select>
    </div>


<div class="form-group">
  <label for="exampleInputPrecio">Monto</label>
  <input type="number" name="monto" step="0.5" class="form-control" id=exampleInputmonto value="{{$empresas->monto}}">
</div>

<div class="form-group">
  <label for="exampleInputCantidad">Comentarios</label>
  <input type="text" name="comentarios" class="form-control" id=exampleInputCantidad value="{{$empresas->comentarios}}">
</div>
<button type="submit" class="btn btn-info">Introducir</button>
</form>


</div>
@endsection
