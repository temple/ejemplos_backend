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

    function imprimir_constante_ascendente(){
    	
    	/*
    	
    	 print_r(parent::parent::CONSTANTE);

    	 No podemos acceder a parent::parent::
    	 la palabra parent solo puede usarse dentro de funciones de un objeto
    	 pero parent significa "clase ancestra" y una clase ancestra no es una función
    	 con lo cual esa clase ancestra ya no posee "parent"
    	 */
    	
    	// En este punto deberíamos tratar de imprimir usando la función 
    	// imprimir_constante_ascendente()
    	// de la clase parent... ¿pero necesitamos crear un objeto?
    	// ¿no hay otra manera?
    	// 
        parent::imprimir_constante_ascendente();
    	print_r(parent::CONSTANTE);
    	
    }

}

$objeto = new ClaseDescendiente();
$objeto->imprimir_constante_ascendente();


$objeto3aGen = new ClaseDescendiente3aGeneracion();
$objeto3aGen->imprimir_constante_ascendente();
