<?php

trait OrdenacionAlfabetica{
	public function ordena()
	{
	 	 // lógica que ordena una lista
	 	 echo "has ejecutado ordena en el trait\n";
	}	
}

trait OrdenacionAlfabeticaMB{
	public function ordena()
	{
	    // lógica que ordena una lista usando MB strings
	    echo "has ejecutado ordena en el trait MB\n";
	}
}

class ListaDePalabras{
	
	protected $lista = array();

	/* use OrdenacionAlfabetica;
	use OrdenacionAlfabeticaMB;

	Si tratamos de usar 2 traits que tienen el mismo método da el error
	PHP Fatal error:  Trait method ordena has not been applied, because there are collisions with other trait methods on ListaDePalabras in /var/www/ejemplos/traits_y_conflictos_entre_traits.php on line 17
    */
   
    use OrdenacionAlfabetica, OrdenacionAlfabeticaMB{
    	OrdenacionAlfabetica::ordena insteadof OrdenacionAlfabeticaMB;
    	// Decimos que la funcion ordena del primer trait es mas importante que la del segundo
    	OrdenacionAlfabeticaMB::ordena as public ordenaMB;
    	// Opcionalmente usamos un alias para no perder la función ordena del segundo trait
    }
}

$lista = new ListaDePalabras;
$lista->ordena();
$lista->ordenaMB();