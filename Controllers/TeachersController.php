<?php
namespace App\Http\Controllers;
use DB;
use Input;
use storage;
use Illuminate\Http\Request;
use App\Teacher;
use App\Grade;
use Exception;
use Illuminate\Support\Facades\Auth;
class TeachersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
  //  if(Auth::user()->level_id==1 |Auth::user()->level_id==2 )
    $docentes = Teacher::all();
    $grades = Grade::all();
    return view('teachers.index',['maestros'=>$docentes,'grado'=>$grades]);
//  }else{return redirect('/welcome');
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

   $each = Teacher::all();
    $grades = Grade::all();
    return view('teachers.create',['maestro'=>$grades]);
      //return view('teachers.create',compact('grados'));
  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function mostrar()
  {
    $each = Teacher::all();
    return view('teachers.mostrar',['maestro'=>$each]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $docentes = new Teacher();
    $docentes->numero_empleado = $request->numero_empleado;
    $docentes->nombres = $request->nombres;
    $docentes->apellido_paterno = $request->apellidoP;
    $docentes->apellido_materno = $request->apellidoM;
    $docentes->telefono = $request->telefono;
    $docentes->direccion = $request->direccion;
    $docentes->id_grado = $request->grade_id;


    //  $postres->imagen = $request->file('imagen')->store('postres');

    $docentes->save();

    return redirect('teachers')->with('message','Guardado Satisfactoriamente !');

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    $each = Teacher::find($id);
    return view('teachers.index',['maestro'=> $each]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $teacher = Teacher::find($id);
      $grades = Grade::all();
    return view('teachers.edit',['teacher'=> $teacher,'maestro'=>$grades]);
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
    $teacher = Teacher::find($id);

  $teacher->numero_empleado = $request->numero_empleado;
  $teacher->nombres = $request->nombres;
  $teacher->apellido_paterno = $request->apellidoP;
  $teacher->apellido_materno = $request->apellidoM;
  $teacher->telefono = $request->telefono;
  $teacher->direccion = $request->direccion;
  $teacher->id_grado = $request->grade_id;

    $teacher->save();;


    return redirect('teachers')->with('message','Guardado Satisfactoriamente !');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $teacher = Teacher::find($id);
    $teacher->destroy($id);
    return redirect('teachers');
  }
}
