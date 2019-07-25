<?php
/* En las páginas 55 y 56 se habla del Forzado de tipos (capítulo 4.9)
 En este capítulo muestra este ejemplo que podemos provar 

*/
$foo = "0";  // $foo es una cadena (ASCII 48) 
$foo++;      // $foo es la cadena "1" (ASCII 49) convertido a entero (1) 
$foo += 1;   // $foo ahora es un entero (2) 
$foo = $foo + 1.3;  // $foo ahora es un doble (3.3) 
$foo = 5 + "10 Cerditos Pequeñitos"; // $foo es entero (15) 
$foo = 5 + "10 Cerditos";     // $foo es entero (15) 