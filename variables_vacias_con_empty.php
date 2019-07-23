<?php
/**
 * ¿Cómo saber si una variable tiene valor o está vacía?
 * @internal empty no siempre dice la verdad
 * @see empty built-in function at php.net
 * @link https://www.php.net/manual/es/function.empty.php empty function page at php.net
 */
$variable_vacia;
$esta_vacia = empty($variable_vacia);
var_dump($esta_vacia); // empty dice TRUE porque la variable está vacía

$variable_falsa = false;
$esta_vacia = empty($variable_falsa);
var_dump($esta_vacia); // empty dice TRUE pero la variable sí tiene un valor booleano

$variable_con_texto = "texto";
$esta_vacia = empty($variable_con_texto);
var_dump($esta_vacia); // empty dice FALSE porque la variable tiene un valor string

$variable_con_texto_vacio = "";
$esta_vacia = empty($variable_con_texto_vacio);
var_dump($esta_vacia); // empty dice TRUE pero la variable tiene un valor string!!
