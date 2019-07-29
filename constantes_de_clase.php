<?php 

define('CONSTANTE',[1,2,3],true);
define('CONSTANTE',[5,2,3],true);

print_r(CONSTANTE);


class ClaseConConstantes{
	
	const CONSTANTE = ['4',5];
	// La constante es igual para todos los objetos
	// por lo tanto es de la clase
    public $propiedad;
    // Las propiedades son de los objetos
    // cada uno puede modificarlas a su antojo
}

$objeto = new ClaseConConstantes();
$objeto->propiedad = 0;

$objeto2 = new ClaseConConstantes();
$objeto2->propiedad = 3;


/*
  print_r($objeto->CONSTANTE);
  Este print_r no muestra nada.
  Dice
  Undefined property: ClaseConConstantes::$CONSTANTE in /var/www/ejemplos/constantes_de_clase.php on line 17
 */


// Para obtener una constante de una clase en realidad 
// partimos de la clase y accedemos a la constante

/*
  print_r(ClaseConConstantes->CONSTANTE);

  Esta línea daba error porque en PHP la flecha delgada ->
  se usa únicamente para acceder a propiedades y funciones de un objeto.
 */

print_r(ClaseConConstantes::CONSTANTE);
