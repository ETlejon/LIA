<?php

namespace App\Http\Controllers;
use DB;
use App\pyme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\empresa;
class pymeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      if(Auth::user()->level_id==1 |Auth::user()->level_id==2 ){
      //$empresas = empresa::with('pymes')->get();
      //return view('pymes.index',compact('empresas'));
      $empresas = empresa::all();
      $pasivos = pyme::all();
      return view( 'pymes.index',['pasivos'=> $pasivos,'empresas'=> $empresas]);


  }
  else
  $empresas = empresa::all();
  $pasivos = pyme::all();
  return view('pymes.index3',['pasivos'=> $pasivos,'empresas'=> $empresas]);

}

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $empresas = empresa::all();
    $pasivos = pyme::all();
return view('pymes.Create',['pasivos'=> $pasivos],['empresas'=> $empresas]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $pasivos= new pyme();

          $pasivos->nombre = $request->nombre;
          $pasivos->empresa_id = $request->empresa_id;
          $pasivos->monto = $request->monto;
          $pasivos->comentarios = $request->comentarios;


          $pasivos->save();

          return redirect('pymes')->with('message','Guardado Satisfactoriamente !');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $empresas = empresa::find($id);
    $pasivos = pyme::find($id);
    return view('pymes.edit',['pasivos'=>$pasivos,'empresas'=> $empresas]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $empresas =  pyme::find($id);

  $empresas->nombre = $request->nombre;
$empresas->rfc = $request->rfc;
  $empresas->direccion = $request->direccion;

 // $postres->imagen = $request->file('imagen')->store('postres');

  $empresas->save();

 return redirect('pymes')->with('message','Guardado Satisfactoriamente !');
}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    if (Auth::user()->level_id==1)
      {
        $vpasivos= pyme::find($id);
        $vpasivos->destroy($id);
        return redirect('pymes');
      }
      else {
        redirect('/home');
      }
  }
}
