<?php
/**
 * Created by PhpStorm.
 * User: Bautista
 * Date: 21/06/2018
 * Time: 6:51 AM
 */


     function retorno (){
         return "hola :v";
     }
    function noRetorno ()
    {
        //...
    }
    function retornoNull (){
        return Null;
    }
var_dump(noRetorno(),retorno(), retornoNull());


     class ReturnPropiedad
     {
         private $nombre = "john";

         function nombres(){
             return $this->nombre;
         }

     }




     function returnNombres($personas){
         $nombres = "";
         foreach ($personas as $persona){
             $nombres.=$persona->nombre.", ";
         }
         return substr($nombres, 0, -2);



     }
     class  persona
     {
         public  $nombre;


         public function constructor($nombre){
             $this->nombre = $nombre;
         }
     }

     $persona=new ReturnPropiedad();
     echo $persona->nombres([

         new persona('paula'),
         new persona('juan'),
         new persona('yisus'),

     ]);
