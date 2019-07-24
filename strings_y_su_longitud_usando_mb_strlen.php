<?php

$longitud = mb_strlen($string = "esto es una cadena de texto con longitud desconocida");

var_dump($longitud);

$var_multi_char = "$string ֍\n$string ⾂";
print ( mb_strlen("$string ֍\n$string ⾂")."\n" );
print ( mb_strlen("$string \n$string ⾂")."\n" );
print ( mb_strlen("$string n$string ⾂")."\n" );
print ( mb_strlen("$string $string ⾂")."\n" );
print ( mb_strlen("$string $string ")."\n" );
print ("\n");
print ($var_multi_char[0]."\n");

$ultima = mb_strlen($var_multi_char) -1;
print ($var_multi_char[$ultima]."\n");
print ("⾂\n");

$last_byte 				= $var_multi_char[$ultima];
$previous_byte 			= $var_multi_char[$ultima-1];
$previous_previous_byte = $var_multi_char[$ultima-2];

$strange_char = $previous_previous_byte.$previous_byte.$last_byte;

print($strange_char."\n");