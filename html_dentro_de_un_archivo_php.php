ARCHIVO HTML_DENTRO_DE_PHP.PHP
<?php
// USA UNA DE ESTAS DOS LÍNEAS PARA PROBAR ESTE ARCHIVO
$expression = TRUE;
$expression = FALSE;

if ($expression) {
	if (TRUE){
       echo "Las sentencias son instrucciones que usan llaves { }";	
   
?>
<strong>This is true.</strong>
<?php
//aquí falta una llave de cierre }
// qué error da PHP?
} else {
?>
<strong>This is false.</strong>
<?php
}
?>