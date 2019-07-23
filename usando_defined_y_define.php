<?php

/**
 * Defined es una función de php
 * admite un único parámetro
 * @link https://www.php.net/manual/en/function.defined.php
 */

define('CONSTANTE',[1,2,3],true);


defined('CONSTANTE_QUE_NO_SE_SI_EXISTE') || define('CONSTANTE_QUE_NO_SE_SI_EXISTE','ESTA CONSTANTE DEBERÍA EXISTIR');
// Usamos la función defined para saber sí la constante se ha definido o no
// en esta instrucción de código anterior, si usamos algo tipo
// defined ("CONSTANTE") || define("CONSTANTE",$VALOR) 
// entonces creamos la constante si no se había definido


defined('CONSTANTE') || define('CONSTANTE','nuevo valor');

var_dump(CONSTANTE); //devolverá el array



