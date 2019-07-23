<?php
$GLOBALS["foo"] = "bar";
$LOCALS = []; // creo un array vacío, como en JS
$LOCALS["foo"] = "bar local";

function muestra_foo(){
   var_dump($GLOBALS["foo"]); // bar
   var_dump($LOCALS["foo"]); // NULL
   // $LOCALS es una variable local EXTERNA a esta función....

   $LOCALS_DE_FUNCION = []; 
   $LOCALS_DE_FUNCION["foo"] = "bar local de la función";
   $GLOBALS["foo"]="antiguo bar";
}

muestra_foo();
var_dump($GLOBALS["foo"]); // antiguo bar
var_dump($LOCALS["foo"]);  // bar local
var_dump($LOCALS_DE_FUNCION["foo"]);  // NULL
