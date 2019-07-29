<?php

namespace modulo1;
//define('modulo1\CONSTANTE',[1,2,3],true);
//define('modulo1\CONSTANTE',[4,2,3],true);

const CONSTANTE  = [1,2,3];
const CONSTANTE  = [4,2,3];
/*
  La definición 2 veces de una constante da el aviso
  PHP Notice:  Constant constante already defined in /var/www/ejemplos/constantes_y_namespaces.php on line 5

 */

class Clase1{
}

/*
	class Clase1{

	}

	 No podemos declarar 2 veces la misma clase
	 da el error fatal
	 PHP Fatal error:  Cannot declare class modulo1\Clase1, because the name is already in use in /var/www/ejemplos/constantes_y_namespaces.php on line 11
*/
namespace modulo2;
//define('modulo2\CONSTANTE',[4,2,3],true);
const CONSTANTE  = [4,2,3];

class Clase1{
}

class StdClass{

}
// he creado una clase que ya existe en el namespace \


print_r(CONSTANTE);
print_r(\modulo1\CONSTANTE);

namespace modulo1;
print_r(CONSTANTE);

$objetoStd = new \StdClass();
$objetoStdModulo2 = new \modulo2\StdClass();

var_dump($objetoStd, $objetoStdModulo2);


namespace modulo3;

use modulo1\CONSTANTE;
use modulo1\Clase1;


print_r(CONSTANTE);
/* Use no funciona con constantes
   funciona con clases
*/

$objeto = new Clase1();
// se crea un objeto modulo1\Clase1;
print "\n"; 
print_r($objeto); 
