<?php
// variables variables

$me_llamo_var = "Te llamas var";
$se_llama_var = "me_llamo_var"; // el valor es el nombre de la primera variable

$vaya_lio = $$se_llama_var; // hay dos símbolos $
var_dump($vaya_lio);
// qué valor hay en vaya_lio?