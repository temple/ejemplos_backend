<?php

abstract class Saluter{
	abstract function salute($name);
	// Una función abstract obliga a que la clase sea abstract
	// Las funciones abstract no tienen código
	// Las funciones abstractas exigen tener código en los descendientes no abstractos
	// sirven para planificar la existencia de una solución futura.
}

class CompleteSaluter extends Saluter{
	function salute($name){
		echo "Hi ".$name;
	}
	/* Si comentamos la función salute y su código aparece el error fatal
       PHP Fatal error:  Class CompleteSaluter contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Saluter::salute) in /var/www/ejemplos/abstract_functions.php on line 15
	*/
}