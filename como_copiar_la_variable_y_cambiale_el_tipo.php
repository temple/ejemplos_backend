<?php

// VAmos a probar a obtener una copia del valor de una variable
// pero cambiándole el tipo de datos al valor copiado
// Usaremos intval, floatval y strval
// https://www.php.net/manual/es/ref.var.php
$variable_con_entero = 9999;

$variable_con_decimales= 3.23454234;

$variable_texto = "223vdaf.4343";


$var = strval($variable_con_decimales);
var_dump($var)
$var = strval($variable_con_entero);
var_dump($var)
$var = strval($variable_texto);
var_dump($var)

// CONTINUA TU, USANDO intval y floatval