<?php

// vamos a ver cómo funciona la función print_r
$variable_con_array = ["a" => 1, "b" => 2, 3 =>"c"];
$objeto = new \StdClass();
$objeto->a = 1;
$objeto->b = 2;
$objeto->c = 3;

// @see https://www.php.net/manual/en/function.print-r.php
print_r($variable_con_array);
print_r($objeto);

$resultado = print_r($variable_con_array,true);
var_dump($resultado);
// Qué aparece en pantalla/consola?

$resultado = print_r($objeto,true);
var_dump($resultado);
// Qué aparece en pantalla/consola?

