<?php


namespace App\Http\Controllers;
use DB;
use Input;
use storage;

use App\Teacher;
use App\Grade;
use Exception;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $each = Teacher::all();
       $grades = Grade::all();
       return view('grades.index',['grados'=>$grades]);
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
       return view('grades.create',['maestro'=>$grades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $grades = new Grade();

      $grades->grados = $request->descripcion;



      //  $postres->imagen = $request->file('imagen')->store('postres');

      $grades->save();

      return redirect('grades')->with('message','Guardado Satisfactoriamente !');
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
      $grade = Grade::find($id);
      return view('grades.edit',['grade'=> $grade]);
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
      $grade = Grade::find($id);
      $grade->grados = $request->grado;

        $grade->save();;


        return redirect('grades')->with('message','Guardado Satisfactoriamente !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $grade = Grade::find($id);
      $grade->destroy($id);
      return redirect('grades');
    }
}
