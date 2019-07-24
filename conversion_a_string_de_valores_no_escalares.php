<?php 
$var = new \StdClass();
//print (strval($var)); // el libro dice que saldrá "Object" pero en realidad da error

$var = [1,2];
$resultado = strval($var);
print ($resultado); // el libro dice que saldrá "Array"


//$res = fopen(__DIR__."/".__FILE__, "r");
//print(strval($res)); // ¿Se puede convertir un recurso a string?

$res = fopen(__DIR__."/constante_DIR_.php", "r");
print(strval($res)); // ¿Se puede convertir un recurso a string?
// R: Sí, pero el resultado es "Resource id #" seguido del número del recurso

print (strval(NULL));