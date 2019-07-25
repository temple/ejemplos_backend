<?php

/** 
  Cuando se realiza el typecasting a object de un valor de tipo de dato escalar (String, boolean, float o integer), excepto NULL, se crea un objeto con una propiedad llamada "scalar" que guarda ese valor.
  Algo parecido a lo que ocurría con las envolturas de Javascript
  cuando las usábamos así

  var objeto_envoltura = new Boolean('valor que será cierto');
  console.log(objeto_envoltura.valueOf()); 
*/
$var = 'ciao'; 
$obj = (object) $var; 
echo $obj->scalar."\n";  // produce la salida 'ciao' 

$var = true; 
$obj = (object) $var; 
echo $obj->scalar."\n";  // produce la salida '1' 


$var = -11.33; 
$obj = (object) $var; 
echo $obj->scalar."\n";  // produce la salida '-11.33'


$var = -2; 
$obj = (object) $var; 
echo $obj->scalar."\n";  // produce la salida '-2'



