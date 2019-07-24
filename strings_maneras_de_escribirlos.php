<?php

// Simple (usando ' o ")
$var = "cadena";
$var2 = 'de texto';

// Con concatenaciones
$var3 ="Las variables \"\$var\" y \"\$var2\" valen ".$var." y ".$var2;

// Con referencias
$var4 = "Las variables \"\$var\" y \"\$var2\" valen $var y $var2";

// Usando NOWDOC
$var6 = <<<'TEXTO'
    La sintaxis NOWDOC y HEREDOC son aparentemente iguales
    solo que en NOWDOC la palabra después de <<< se pone entre
    apóstrofes.
    Esto significa que no podremos usar referencias
    porque las referencias funcionan solo en strings con apóstrofes
TEXTO;

// Usando HEREDOC
$var7 = <<<TEXTO
    Las cadenas de texto en formato HEREDOC
    pueden contener saltos de línea sin tener que escribir
    "\\n".
    Esto es una ventaja ya que podemos crear textos que necesiten
    verse con los saltos de línea.
TEXTO;

// Usando HEREDOC y referencias
$var8 = <<<HEREDOC
    Si quiero usar una variable llamada var2 aquí,
    puedo hacerlo así: ${var2}
HEREDOC;