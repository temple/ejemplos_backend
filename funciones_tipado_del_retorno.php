<?php

function relajada()
{
	return null;
}

function estricta() : array
{
	return 345.3453;
}

function estricta2(): string
{
	echo "hello";
}

relajada();
//estricta();
/*
PHP Fatal error:  Uncaught TypeError: Return value of estricta() must be of the type array, float returned in /var/www/ejemplos/funciones_tipado_del_retorno.php:10
 */
//estricta2();
/*
PHP Fatal error:  Uncaught TypeError: Return value of estricta2() must be of the type string, none returned in /var/www/ejemplos/funciones_tipado_del_retorno.php:16
 */

function estricta3(int $param1):int
{
	return $param1;
}

//estricta3();
//PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function estricta3(), 0 passed in /var/www/ejemplos/funciones_tipado_del_retorno.php on line 33 and exactly 1 expected in /var/www/ejemplos/funciones_tipado_del_retorno.php:28


//estricta3('no soy un int');
/*
PHP Fatal error:  Uncaught TypeError: Argument 1 passed to estricta3() must be of the type int, string given, called in /var/www/ejemplos/funciones_tipado_del_retorno.php on line 37 and defined in /var/www/ejemplos/funciones_tipado_del_retorno.php:28
 */

function estricta4( $param1):int
{
	return $param1;
}

estricta4('no soy un int');