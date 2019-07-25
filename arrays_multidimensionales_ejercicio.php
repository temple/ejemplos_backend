
<?php
/**
Arrays multidimensionales:
son los arrays que dentro tienen arrays
Por lo tanto podemos acceder a las posiciones usando la notación
$array[clave en primer array][clave del array contenido en el primer array]

**/

$array_externo = [0,1,2,3];
$array_interno = [5,6,7,8];
$array_externo[] = $array_interno;


// Consigue que se imprima el número 6
print($array_externo[/*pon la clave*/][/*pon la clave*/]);