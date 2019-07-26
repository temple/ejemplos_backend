<?php

include "visibilidad_protegida_y_privada_en_las_propiedades.php";

$CV_WEB_2019 = new CV_desarrollo_Web();

$CV_WEB_2019->datos_personales = new datos_personales();
$CV_WEB_2019->estudios = array();
$CV_WEB_2019->experiencia_laboral = array();
$CV_WEB_2019->otros = array();
$CV_WEB_2019->recommendations = array();


$CV_WEB_2019->developement_profiles = array(); // la propiedad está protegida!!! 
$CV_WEB_2019->programming_languages = array();
var_dump($CV_WEB_2019);


$CV_TECNICO_2019 = new CV_tecnico();
var_dump($CV_TECNICO_2019);