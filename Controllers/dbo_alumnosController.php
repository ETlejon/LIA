<?php

namespace App\Http\Controllers;
use DB;
use Input;
use storage;
use Illuminate\Http\Request;
use App\dbo_alumnos;
use Exception;
class dbo_alumnosController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dbo_alumnos = dbo_alumnos::all();

      return view('dbo_alumnos.index',['dbo_alumnos'=> $dbo_alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    return view('dbo_alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dbo_alumnos = new dbo_alumnos();

      $dbo_alumnos->nombre_alumno = $request->nombre;
      $dbo_alumnos->apellido_materno_alumno = $request->apellidoM;
      $dbo_alumnos->Apellido_Paterno_alumno = $request->apellidoP;
        $dbo_alumnos->edad_alumno = $request->edad;
    //  $postres->imagen = $request->file('imagen')->store('postres');

      $dbo_alumnos->save();

      return redirect('dbo_alumnos')->with('message','Guardado Satisfactoriamente !');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    $dbo_alumnos = dbo_alumnos::find($id);
    return view('dbo_alumnos.show',['dbo_alumnos'=> $dbo_alumnos]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $dbo_alumnos = dbo_alumnos::find($id);
      return view('dbo_alumnos.edit',['dbo_alumnos'=> $dbo_alumnos]);

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
      $dbo_alumnos = dbo_alumnos::find($id);

    $dbo_alumnos->nombre_alumno = $request->nombre;
   $dbo_alumnos->Apellido_Paterno_alumno = $request->apellidoP;
      $dbo_alumnos->edad_alumno = $request->edad;
   //$dbo_alumnos->imagen = $request->file('imagen')->store('dbo_alumnos');

    $dbo_alumnos->save();;
    //$data =  $request->all();
    //$dbo_alumnos->update($data);

    return redirect('dbo_alumnos')->with('message','Guardado Satisfactoriamente !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dbo_alumno = dbo_alumnos::find($id);
        $dbo_alumno->destroy($id);
        return redirect('dbo_alumnos');
    }
}
