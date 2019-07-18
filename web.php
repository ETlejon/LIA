<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Angello', function () {
    return view('Angello');
    });
    Route::get('/welcomeOperations',function(){
      return view('welcomeOperations');
    });
   Route::post('/EjercicioExamen',function(){
     return view('EjercicioExamen');
});
//Route::get('/Area',function (){
//  return view('Area');
//});
Route::get('/Perimetro',function(){
  return view('Perimetro');
});
Route::get('/Volumen',function(){
  return view('Volumen');
});
Route::get('/seccion1',function(){
  return view('seccion1');
});
Route::get('/seccion2',function(){
  return view('seccion2');
});
Route::get('/miseccion',function(){
  return view('miseccion');
});
Route::get('/recta',function(){
  return view('recta');
});
Route::get('/tipodecambio',function(){
  return view('tipodecambio');
});
Route::get('/ecuacion',function(){
  return view('ecuacion');
});








Route::get('/operaciones','OperationController@welcome');
Route::get('/operaciones/{a}/{b}','OperationController@operacionesBasicas');
Route::get('/nombre/{r}/edad/{t}','OperationController@mayores');
Route::get('/nombre/{r}/edad/{t}','OperationController@welcomeOperations');
Route::get('/practica1','OperationController@practica1');
Route::post('/practica1','OperationController@practica1post');
Route::get('/Area','OperationController@Area');
Route::post('/Area','OperationController@Areapost');
Route::get('/Volumen','OperationController@Volumen');
Route::post('/Volumen','OperationController@Volumenpost');
Route::get('/EjercicioExamen','OperationController@EjercicioExamen');
Route::post('/EjercicioExamen','OperationController@EjercicioExamenpost');
Route::resource('product', 'productController');
Route::resource('dbo_alumnos', 'dbo_alumnosController');
Route::resource('grades','GradeController');
Route::resource('teachers','TeachersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pymes','pymeController');
Route::resource('Empresas','EmpresaController');




?>
