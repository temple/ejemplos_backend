<?php

/** 
 * Este ejemplo de clase nace de la idea planteada en la página 33
 * del libro Programación en PHP Nivel Avanzado
 */

// En el libro plantea una clase como algo parecido a esto
class nombre {
// ...definición de variables
// ....
// ...constructores (opcional)
// ....
// ...definición de funciones
//
//
}


// Vamos ahora a crear una clase de ejemplo:

class evaluador {
	public $requisitos_SOC;
	public $nombre;
	public $apellidos;

	// Aquí vendría la función constructora
	// que se utiliza para asignar valores a las propiedades
	// OBLIGATORIAS para cualquier evaluador
	
	// El método __construct, es la función que se utiliza cuando
	// se crea un objeto de esta clase 
	public function __construct($requisitos,$nombre,$apellidos){
		//Las propiedades necesarias se reciben mediante parámetros
		
	}

	// El método certificar es una función que puede usarse sobre cualquier objeto 
	// de esta clase.
	public function certificarAlumno($alumno,$asignaturas,$notas): float
	{
	   $suma_notas = 0;
	   foreach($notas as $nota)
	       $suma_notas += $nota;

	   $nota_final = $suma_notas / count($notas);

	   return $nota_final;
	}		

	// El método evaluarAlumno es una función que consigue la nota de un alumno
	// en una asignatura.
	// Esta nota solo la sabe calcular el evaluador, que es el ESPECIALISTA en evaluar 
	public function evaluarAlumno($alumno,$asignatura,$examen_final,$practicas) : float
	{
		$nota_asignatura = 5;
		// código que calcula la nota del alumno en la asignatura
		return $nota_asignatura;
	}

}

//$profe_daw = new evaluador();
// aparece un error que dice:
// PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function evaluador::__construct(), 0 passed in /var/www/ejemplos/metodo_constructor_en_clases.php on line 39 and exactly 3 expected

//$profe_daw = new evaluador("título de carrera");
// aparece un error que dice que se ha facilitado un parámetro ($requisitos)
// pero que se necesitan los 3
//PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function evaluador::__construct(), 1 passed in /var/www/ejemplos/metodo_constructor_en_clases.php on line 45 and exactly 3 expected

$profe_daw = new evaluador("título de carrera", "xavi", "subira");
