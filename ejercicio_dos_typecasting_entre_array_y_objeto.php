<?php
/**
  Ejercicio, modifica los valores del array resultante del segundo typecast
  usando el objeto para ello.
  */

  $array = array(
  			'clave' =>  "valor",
  			'a' => false,
  			'b' => ???? ,
  			'ultima' => 0
  			 );

  $objeto = (object) $array;

  $array_resultante = (array) $objeto;

  // Haz que la posicion "a" del array valga la propiedad "b" del objeto
  $array_resultante["a"] = $objeto->b;

  // Haz que la posición "b" del array valga la propiedad "ultima" del objeto
  $array_resultante["b"] = $objeto->ultima;

  // Haz que la posición "ultima" del array valga la propiedad "clave" del objeto
  $array_resultante["ultima"] = $objeto->clave;

  // Haz que la posición "clave" del array valga la propiedad a del objeto
  $array_resultante["clave"] = $objeto->a;






