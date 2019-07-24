<?php
/**
  * Las funciones serialize y unserialize
  * no convierten un valor a string,
  * crean un string que expresa ese valor
  * y permiten crear valores a partir de un string que expresa un valor
  * 
  * A los strings que expresan un valor les llamamos strings serializados
  * o valores serializados 
  * (serialized strings or serialized values)
  */ 
$var = new \StdClass();
$var_serialized =json_encode($var);
print ($var_serialized."\n");


var_dump($var);
$var = json_decode($var_serialized);
var_dump($var);

$var = [1,2];
$var_serialized =json_encode($var);
print ($var_serialized."\n");


var_dump($var);
$var = json_decode($var_serialized);
var_dump($var);
