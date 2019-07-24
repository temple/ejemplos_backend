<?php

// Simple (usando ' o ")
$var = "cadena";
$var2 = 'de texto';

// Con concatenaciones
$var3 ="Las variables \"\$var\" y \"\$var2\" valen ".$var." y ".$var2;

// Con referencias
$var4 = "Las variables \"\$var\" y \"\$var2\" valen $var y $var2";

// Usando NOWDOC


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