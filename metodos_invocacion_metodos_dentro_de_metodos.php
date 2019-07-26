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
		// código que calcula la nota del alumno en la asignatura
		$nota_examen_final = calcularNota($examen_final);
		// para evaluar a un alumno necesitamos calcular la nota de su examen final
		$nota_practicas = calcularNota($practicas);
		// también necesitamos poder calcular la nota de sus practicas
		$nota_asignatura = 0.7*$nota_examen_final + 0.3*$nota_practicas;
		return $nota_asignatura;
	}

	// Este método es protected, porque no necesitamos que se utilice fuera de la clase evaluador.
	// Esta función se necesita utilizar sólo cuando se nos pide evaluar un alumno
	// por lo tanto, la función EvaluarAlumno es public, porque se nos puede pedir
	// pero no permitiremos que se nos pida calcular una nota, si no es para otra cosa
	// distinta a evaluar un alumno.
	// Por eso esta función es protected (no se puede usar fuera de esta clase)
	protected function calcularNota($evidencia_evaluable){
		$entrega_de_alumno = $evidencia_evaluable->entrega_de_correccion;
		$pautas_de_correccion = $evidencia_evaluable->pautas;
		
		$nota_evidencia = 0;

		foreach($pautas_de_correccion->items as $item){
			$nota_item = calcularNotaItem($item,$entrega_de_alumno) * $item->peso;
			$nota_evidencia += $nota_item; 
		}
		return $nota_evidencia; 
	}
}

$profe = new Evaluador(["titulo carrera","certificacion docente"], "xavi", "subira" );

// calcularNota($examen_final);
// PHP Fatal error:  Uncaught Error: Call to undefined function calcularNota()
// Esta ejecución falla porque la función calcularNota es un MÉTODO de una CLASE
// no podemos llamarla en esta línea como si fuera una función independiente

// $profe->calcularNota($examen_final);
// PHP Fatal error:  Uncaught Error: Call to protected method evaluador::calcularNota()


$nota_alumno = $profe->evaluarAlumno("Musa","Backend Development",$examen_final,$practicas);

// PHP Fatal error:  Uncaught Error: Call to undefined function calcularNota() in /var/www/ejemplos/metodos_protected_en_oop.php:57

