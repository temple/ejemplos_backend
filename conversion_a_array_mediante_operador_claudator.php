<?php
/** PHP permite convertir a array vacío de manera implícita aquellas variables
que contenían false y null 
*/

// Cuando usamos un string vacío se añade el carácter 0 al final del string
$a = "";
$a[1]=0;
var_dump($a);

// Cuando usamos números (entero o float) 0, php lo preserva y no hace la conversión a array
$a = 0;
$a[1]=0;
var_dump($a);

$a = 0.0;
$a[1]=0;
var_dump($a);

// Cuando usamos false o null entonces PHP asume que se puede convertir a un array vacío
$a = false;
$a[1]=0;
var_dump($a);

$a = null;
$a[1]=0;
var_dump($a);
