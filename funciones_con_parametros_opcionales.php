<?php

function funcion_con_parametros_opcionales(int $param1, int $param2 = 5){
	return $param1 + $param2;
}
echo "\n";
echo funcion_con_parametros_opcionales(1,2)."\n";
echo funcion_con_parametros_opcionales(1)."\n";

function funcion_con_parametros_opcionales_intercalados(int $param1 = 1, int $param2, $param3 = 4, $param4){
	echo "Param1 vale $param1\n";
	echo "Param2 vale $param2\n";
	echo "Param3 vale $param3\n";
	echo "Param4 vale $param4\n";
}

funcion_con_parametros_opcionales_intercalados(1,2,4,8);
/*

Cuando la ejecutamos con solo 2 argumentos dice
PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function funcion_con_parametros_opcionales_intercalados(), 2 passed in /var/www/ejemplos/funciones_con_parametros_opcionales.php on line 17 and exactly 4 expected in /var/www/ejemplos/funciones_con_parametros_opcionales.php:10

Cuando la ejecutamos con solo 3 argumentos dice
PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function funcion_con_parametros_opcionales_intercalados(), 3 passed in /var/www/ejemplos/funciones_con_parametros_opcionales.php on line 17 and exactly 4 expected in /var/www/ejemplos/funciones_con_parametros_opcionales.php:10
*/