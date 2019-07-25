<?php

// El operador que dice si...

$a == $b
// a y b son equivalentes (mismo valor)

// ejemplo:
$a = false;
$b = 0;
$c = ($a == $b); // $c vale true

$a === $b
// a es identico (estrictamente igual) a b (mismo tipo y mismo valor)
// ejemplo:
$a = false;
$b = 0;
$c = ($a === $b); // $c vale false

$a != $b
// a es diferente que b (distinto valor)
// ejemplo:
$a = false;
$b = 0;
$c = ($a != $b); // $c vale false

$a !== $b
// a es estrictamente diferente que b (distinto tipo)
// ejemplo:
$a = false;
$b = 0;
$c = ($a !== $b); // $c vale true



$a > $b
// a es mayor que b

$a < $b
// a es menor que b

$a >= $b
// a es igual o mayor que b

$a <= $b
// a es menor o igual que b




