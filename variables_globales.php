<?php
$GLOBALS["foo"] = "bar";
// $GLOBALS ES UN ARRAY SIEMPRE DISPONIBLE EN CUALQUIER LUGAR DE LA APLICACIÓN
// "foo" es una posición dentro del array
// en PHP los arrays usan enteros y strings como índices

function muestra_foo(){

   var_dump($GLOBALS["foo"]);
	
}

muestra_foo();
// SALE "bar" POR LA CONSOLA