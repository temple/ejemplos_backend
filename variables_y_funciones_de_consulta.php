<?php
# variables_y_funciones_de_consulta.php

$var1 = ['a',0,true];
$es_un_array = is_array($var1);
var_dump($es_un_array); // tiene que decir TRUE
// crea estas variables y pruebalas con las funciones...
// $var1 = false;
// $var2 = 0;
// is_int
// is_boolean o is_bool

// $var1 = '6.434';
// $var2 = 6.434;
// is_numeric

// $var1 = 1
// $var2 = 1.1
// is_float

// $var1 = new \StdClass;
// $var2 = "some text";
// is_scalar
// is_string