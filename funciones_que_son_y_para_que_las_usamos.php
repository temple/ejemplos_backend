<?php

// Una función es un bloque de código que se ejecuta cuando se llama (a la función)

// Esto sería un bloque de código
// un bloque de código se compone de una o mas instrucciones
// las instrucciones pueden ser sentencias (if, while, switch...)
$objeto = new \StdClass();
$objeto->propiedad1 = "valor 1";

// Una función es una parte del código que se utiliza para realizar diferentes tipos de procesos y nos devuelve un resultado.

// Le llamamos proceso a cualquier cosas que puede ser ejecutada y terminará en un futuro
$ch = curl_init("url");
$resultado = curl_exec(ch);

// el anterior código inicia un proceso de descarga (CURL)
// el proceso se inicia ejecutando la función curl_exec


// A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.

function certificar($asignaturas,$notas,$alumno)
{
// bloques de código como los vistos antes
// pero que utilizan asignaturas, notas y alumno

}

//los parámetros $asignaturas, $notas y $alumno recibirán la información necesaria para que la función realice este "processing"

// Función es un método en programación que nos permite realizar una tarea específica o una acción , cual puede ser llamado en cualquier momento.

// Cuando se crea una función, se puede utilizar tantas veces como sea necesario

certificar(['MODULO1','MODULO2'],[4,5.5], 'Antonio');
certificar(['MODULO1','MODULO2'],[7.6,6.5], 'Maribel');

// es una subrutina que tiene definida un conjunto de instrucciones. Puede requerir datos de entrada de diferente tipo para ejecutarse y puede devolver como resultado un dato.

// La función puede devoler un resultado, y podemos indicar el tipo de dato de este resultado si siempre devolverá un resultado,
// caso que no siempre, mejor no digamos el tipo.
function certificar($asignaturas,$notas,$alumno): float
{
   $suma_notas = 0;
   foreach($notas as $nota)
       $suma_notas += $nota;

   $nota_final = $suma_notas / count($notas);

   return $nota_final;
}

// las funciones solo pueden devolver los tipos de datos conocidos
// tanto escalares (null, boolean, string, integer, float) como no escalares (array, object, resource)


// se utiliza para poder encapsular una función específica en una solo lugar y poder reutilizarlo
 
//Las funciones se llaman de tal manera que se sepa cual es su función específica, es decir, para qué podemos usarlas

count() // función que cuenta longitudes
array_merge() //función que mezcla arrays
strtoupper() // función que convierte un string a mayúsculas


