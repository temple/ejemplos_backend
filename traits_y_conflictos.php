<?php

trait RequestInfo{
	protected $url = '/home';
	protected $message_body;

	public function getRequestInfo(){
		// lógica muy complicada que consigue valor para las propiedades $url y $message body del objeto
		$this->url = $_SERVER['REQUEST_URI'];
		$this->message_body = $_SERVER['message_body'];
		echo "\n".__FUNCTION__." WAS CALLED IN TRAIT RequestInfo\n";
	}
}

class FrontController{
	
	/*public*/ protected $url = '/home';
	/* la propiedad tiene que ser protected (como el trait)
	   y el valor tiene que ser el mismo que en el trait
	   o se produce un conflicto entre el trait y esta propiedad
	   PHP Fatal error:  FrontController and RequestInfo define the same property ($url) in the composition of FrontController. However, the definition differs and is considered incompatible.
	 */

    use RequestInfo
    {
    	getRequestInfo as traitGetRequestInfo;
    }
    // Para evitar que la función del trait se pierda (por coincidencia)
    // le pongo un alias

    /* En caso de que exista una función con el mismo nombre dentro de la clase
     esta función predomina sobre la función que viene en el trait */

    public function getRequestInfo(){
    	// LÓGICA POBRE
		echo "\n".__FUNCTION__." WAS CALLED IN ".__CLASS__."\n";
    	//$this->traitGetRequestInfo();
    }

}

class EmptyClass{
   use RequestInfo;
}

$objeto_front = new FrontController();
$empty_objeto = new EmptyClass();
var_dump($objeto_front, $empty_objeto);

$objeto_front->getRequestInfo();
$empty_objeto->getRequestInfo();
echo "\n VOY A INVOCAR LA FUNCIÓN DEL TRAIT USANDO SU ALIAS\n";
$objeto_front->traitGetRequestInfo();