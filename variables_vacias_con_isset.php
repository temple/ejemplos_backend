<?php
/**
 * ¿Cómo saber si una variable tiene valor o está vacía?
 * @internal isset SIEMPRE dice la verdad
 * @see isset built-in function at php.net
 * @link https://www.php.net/manual/es/function.isset.php isset function page at php.net
 */
$variable_vacia;
$esta_vacia = isset($variable_vacia);
var_dump($esta_vacia); // isset dice FALSE porque la variable está vacía

$variable_falsa = false;
$esta_vacia = isset($variable_falsa);
var_dump($esta_vacia); // isset dice TRUE porque la variable sí tiene un valor booleano

$variable_con_texto = "texto";
$esta_vacia = isset($variable_con_texto);
var_dump($esta_vacia); // isset dice TRUE porque la variable tiene un valor string

$variable_con_texto_vacio = "";
$esta_vacia = isset($variable_con_texto_vacio);
var_dump($esta_vacia); // isset dice TRUE porque la variable tiene un valor string
