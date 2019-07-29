<?php

class ClaseConConstantes{
	const CONSTANTE = ['4',5];
	// La constante CONSTANTE SE HA DEFINIDO POR PRIMERA VEZ

}

class ClaseDescendiente extends ClaseConConstantes{
	const CONSTANTE = ['2',3];

    function imprimir_constante_ascendente(){
    	// print_r(ClaseConConstantes::CONSTANTE);
    	// esta sería la primera opción, utilizar el nombre de la clase ancestra
    	
    	print_r(parent::CONSTANTE);
    	// esta sería la segunda opción utilizar la palabra reservada "parent"
    	// que solo puede usarse dentro de métodos
    }

}

class ClaseDescendiente3aGeneracion extends ClaseDescendiente{
}

class ClaseDescendiente4aGeneracion extends ClaseDescendiente3aGeneracion{

    function imprimir_constante_ascendente(){
        parent::imprimir_constante_ascendente();
        // A pesar de que parent debería ser ClaseDescendiente3aGeneracion
        // cuando se ejecuta imprimir_constante_ascendente aparece la constante 
        // que se ha creado en la primera clase de todas
        // Es como si la ClaseDescendiente3aGeneracion fuera ignorada por completo
        // por el hecho de no tener declarada la función imprimir_constante_ascendente
        // 
        // Lo que sí sabemos es que esta clase ha heredado la función de su ancestra
        // ClaseDescendiente, y por lo tanto podemos ejecutarla usando
        // parent::imprimir_constante_ascendente.
        // 
        // Eso nos permite concluir que por mas generaciones intermedias que haya
        // la función permanecerá accesible en cualquiera de ellas (mientras sea protected o public)
        // Pero por otro lado vemos que el resultado esperado en este caso
        // debería ser [2,3] que es la constante de ClaseDescendiente, que es la parent
        // de ClaseDescendiente3aGeneracion
        // Este problema en PHP tiene mucha relevancia y se puede abordar usando
        // Late Static Bindings que es una técnica avanzada
        // https://www.php.net/manual/es/language.oop5.late-static-bindings.php    	
    }

}


$objeto4aGen = new ClaseDescendiente4aGeneracion();
$objeto4aGen->imprimir_constante_ascendente();
