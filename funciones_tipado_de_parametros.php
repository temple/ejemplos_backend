<?php


function relajada($param1, $param2){
	echo "deberías probar estos parámetros con la función estricta\n";
}

function estricta(int $param1, string $param2){
	echo "Enhorabuena los parámetros cumplen con el tipo exigido\n";
};

relajada("a","b");
//estricta("a","b");
/* PHP Fatal error:  Uncaught TypeError: Argument 1 passed to estricta() must be of the type int, string given, called in /var/www/ejemplos/funciones_tipado_de_parametros.php on line 13 and defined in /var/www/ejemplos/funciones_tipado_de_parametros.php:8
*/
estricta(1,"b");