<?php

namespace App\Http\Controllers;
use App\pyme;
use Illuminate\Http\Request;
use App\User;
use App\empresa;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  if(Auth::user()->level_id==1 |Auth::user()->level_id==2 ){
      $activos = pyme::all();
      $empresas = empresa::all();
      return view('Empresas/index',['activos'=> $activos],['empresas'=> $empresas]);

  }
  //else
  //$activos = pyme::all();
  //{return view('Empresa/index3',['activos'=> $activos]);}




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $empresas = empresa::all();
      $activos = pyme::all();
  return view('pymes.Create',['activos'=> $activos],['empresas'=> $empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
