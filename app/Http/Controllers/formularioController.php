<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    //
    public function index(Request $request){
     
     $Apellido= $request->Apellido;
     $edad= $request->edad;
     $numero= $request->numero;
     $identidad= $request->documento;


     $matriz = array(      

       'Apellido'=>'Sarmiento',
       'edad'=> 18,
       'numero'=>3105593124,
       'documento'=>1070988170,);


         //foreach ($matriz as $clave) {

            //echo $clave."<br>";
         //}
     $datos = array(


        array("Sarmiento",23,234443,343255),
        array("Ramirez",13,24314,3556),
        array("Lopez",32,24546,244657),
        array("Bogota",40,245,243536),

        );

           if ($Apellido == 'Sarmiento') {

               
               foreach ($datos as $Apellido) {
               foreach ($Apellido as $Apellido) {
                echo $Apellido."<br>";
                //echo "_________________________";
                //echo "<br>";
 
               }
         }
           } else {
            echo "el apellido no esta en el sistema";
            }


    }
}