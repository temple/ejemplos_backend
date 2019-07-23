<?php
$variable_con_una_lista = ['0',1,false];
$variable_copia = $variable_con_una_lista;
var_dump($variable_con_una_lista);
var_dump($variable_copia);
// Las dos variables tienen una COPIA de una lista
// a las listas les llamamos "array"
array_shift($variable_con_una_lista);
// Modificamos la lista como el variable_array.shift() de JS
var_dump($variable_con_una_lista);
var_dump($variable_copia);
// La lista se ha modificado solo para la primera variable

$variable_con_objeto = new \StdClass();
// new \StdClass() significa new Object() en JS
$variable_referencia = $variable_con_objeto;
// Las dos variables tienen una referencia a un OBJETO (el mismo objeto)
$variable_con_objeto->propiedad = 0;
var_dump($variable_referencia);




