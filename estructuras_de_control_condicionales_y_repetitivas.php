<?php
 
/**
 * Las estructuras de control pueden contener
 * condiciones y también pueden ser repetitivas.
 *
 * Cuando una estructura de control repetitiva
 * es además condicional, corre el riesgo
 * de convertirse en un bucle infinito.
 *
 * Los bucles infinitos hacen que una aplicación no
 * termine nunca de ejecutarse, y los servidores web
 * se cansan de esperar a la aplicación 
 * y terminan respondiendo "timeout".
 *
 * Para que un bucle sea infinito, basta con tener 
 * una estructura de control repetitiva, cuya
 * condición siempre se cumpla, como por ejemplo
 * true
 */


// Ejemplo: Usa cualquiera de estas tres estructuras en el archivo index.php que hay en la carpeta public
// dentro de /var/www/proyecto/
// verás que cuando cargas el dominio, se produce un 
// timeout y el navegador te informa de que no se ha 
// podido cargar la página

// Estructura do..while
do{
 // nothing	
}while(true);

// Estructura for
for($i=0;true;$i++){
  // nothing
}

// Estructura while
while(true){
  // nothing
}
