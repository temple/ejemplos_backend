<?php
error_reporting(E_ERROR); // E_ERROR ES EL NIVEL de REPORTING: "SÓLO MENSAJES DE ERROR"

var_dump($foo);
$foo = 1 + "10.5";                //$foo es doble (11.5) 
var_dump($foo);
$foo = 1 + "-1.3e3";              //$foo es doble (-1299) 
var_dump($foo);
$foo = 1 + "bob-1.3e3";           //$foo es entero (1) 
var_dump($foo);
$foo = 1 + "bob3";                //$foo es entero (1) 
var_dump($foo);
$foo = 1 + "10 Cerditos";         //$foo es entero (11) 
var_dump($foo);
$foo = 1 + "10.0 Cerditos";       //$foo es double (11) 
var_dump($foo);
$foo = "10.0 cerdos " + 1;        //$foo es double (11) 
var_dump($foo);
$foo = "10.0 cerdos " + 1.0;      //$foo es double (11)
var_dump($foo);