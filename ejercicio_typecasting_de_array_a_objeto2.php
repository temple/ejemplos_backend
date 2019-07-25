<?php
/**
  Ejercicio, modifica la propiedad de un objeto resultante de un typecast a objeto de un array
  */

  $array = array(
  			'clave' =>  "valor",
  			'a' => false,
  			'b' => true ,
  			'ultima' => 0
  			 );

  $objeto = (object) $array;


  // Haz que la propiedad del objeto a valga true y que la propiedad b valga false
  $objeto->a = $array["b"];
  $objeto->b = $array["a"];

  // Haz que la propiedad ultima valga valor y que la propiedad clave valga 0 
  
  $objeto->clave = $array["ultima"];
  $objeto->ultima = $array["clave"];
  