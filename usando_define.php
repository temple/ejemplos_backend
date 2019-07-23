<?php

/**
 * Define es una función de php
 * admite un mínimo de 2 parámetros y un máximo de 3
 * @link https://www.php.net/manual/en/function.define.php
 */

define('CONSTANTE',[1,2,3],true);
// aquí usamos 3 parámetros:
// el string "CONSTANTE"
// el array [1,2,3]
// y el booleano true

define('OTRA_CONSTANTE',[1,2,3]);
// aquí usamos sólo 2 parámetros:
// el string "CONSTANTE"
// el array [1,2,3]

var_dump(CONSTANTE);
// una vez definida una constante la podemos usar

$variable = OTRA_CONSTANTE;
var_dump($variable);

$variable = CONSTANTE;
var_dump($variable);

define('OTRA_CONSTANTE',"valor string",true);

