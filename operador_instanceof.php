<?php

class ClaseA{
}

class ClaseB extends ClaseA{
}

$a = new ClaseA();

echo "El operador instanceof dice si el objeto \$a es una instancia de ClaseA\n".
var_dump(($a instanceof ClaseA));

$b = new ClaseB();

echo "El operador instanceof dice si el objeto \$b es una instancia de ClaseB\n".
var_dump(($b instanceof ClaseB));

echo "El operador instanceof también dice si el objeto \$b es una instancia de ClaseA\n".
var_dump(($b instanceof ClaseA));

echo "Finalmente dice si cualquier objeto es una instancia de \\StdClass\n";
var_dump(($a instanceof \StdClass));