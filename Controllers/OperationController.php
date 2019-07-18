<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function welcome()
    {
      $x=10;
      $y=2;

    $suma = $x+$y;
    $resta = $x-$y;
    $multiplicacion = $x*$y;
    $divicion = $x/$y;

      return view('welcomeOperations',['sum' => $suma, 'res' => $resta, 'div'=> $divicion, 'mul'=> $multiplicacion]);

    }
    public function operacionesBasicas($x,$y)
    {
      $suma = $x+$y;
      $resta = $x-$y;
      $multiplicacion = $x*$y;
      $divicion = $x/$y;
    return view('welcomeOperations',['sum' => $suma, 'res' => $resta, 'div'=> $divicion, 'mul'=> $multiplicacion]);
    }
    public function mayores($nombre,$edad)
    {
      if ($edad>= 18)
      {
        $r = "puedes ingerir pisto ";
      }
      else {
        $r ="Niño y tu mamà?";
      }return view('mayores',['nom' => $nombre, 'res'=>$edad]);
    }
  public function practica1post(Request $res)
  {
    $x = $res ->n1;
    $y= $res ->n2;
    $suma = $x + $y;
    $resta = $x - $y;
    $multiplicacion = $x * $y;
    $division  = $x / $y;
    return view('practica1',['sum' => $suma, 'res' => $resta, 'div'=> $division, 'mul'=> $multiplicacion]);
  }
    public function practica1()
    {
      return view('practica1');
    }
    public function Area()
    {
      return view('Area');
    }//Area del cuadrado
    public function Areapost(Request $var)
    {
      $a = $var->n1;
      $b = $var ->n2;
      $area = pow($a,2);
      $area2 = $a*$b /2;
      $area3 = $a*$b;

      return view('Area',['area1'=>$area,'area2'=>$area2,'area3'=>$area3]);
    }


    public function Volumen()
    {
      return view('Volumen');
    }//Area del cuadrado
    public function Volumenpost(Request $var)
    {
      $a = $var->n1;
      $b = $var ->n2;
      $area = pow($a,3);
      $area2 = $a*$b /2;
      $area3 = $a*$b;


      return view('Volumen',['area'=>$area,'area2'=>$area2,'area3'=>$area3]);
    }
    public function EjercicioExamen()
    {
      return view('EjercicioExamen');
    }
    public function EjercicioExamenpost(Request $var2)
    {
      $a = $var2->n1;
      $b = $var2 ->n2;
    $c = $var2 ->n3;
    $d = $var2 ->m1;
    $e = $var2 ->m2;
    $f = $var2 ->p1;
    $ecuasion = $a*$b+$c;
    $Conversion = $e*$d;
    $ecuasion2 = pow($f,3)+(2*pow($f,2)-$f/3);
    $x1 = $var2 ->a1;
    $y1 = $var2 ->a2;
    $x2 = $var2 ->a3;
    $y2 = $var2 ->a4;
    $dist = pow($x2-$x1,2)+pow($y2-$y1,2);
    $distancia = sqrt($dist);
    $g = $var2 ->b1;
    $h = $var2 ->b2;
    $rann = rand($g,15);
    $ranm = rand($h,15);
    $ranmd = rand(($rann-$ranm),15);
    $combinaciones = rand($ranmd,15);





      return view('EjercicioExamen',['Ecuasion'=>$ecuasion,'conversion'=>$Conversion,'ecuasion2'=>$ecuasion2,'distancia'=>$distancia,'combinaciones'=>$combinaciones]);

    }



}
