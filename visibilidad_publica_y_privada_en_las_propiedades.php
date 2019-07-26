<?php

class datos_personales{
	public $name;
	public $mail;
	public $tel;
	public $address;
}

class CV_general{
	public $datos_personales;
	public $estudios;
	public $experiencia_laboral;
	public $otros;
    private $recommendations = "No hay recomendaciones";
}

class CV_desarrollo extends CV_general{
    public $developement_profiles; //github, bitbucket, ...
    private $programming_languages = array();

    //TODO: Hacer que la experiencia_laboral tenga especificaciones y funciones
    //      en aquellas posiciones que tengan que ver con desarrollo
}

class CV_desarrollo_Web extends CV_desarrollo{
	public $proyectos_web;
}

class CV_tecnico extends CV_general{
    public $proyectos;

}


$CV_WEB_2019 = new CV_desarrollo_Web();

$CV_WEB_2019->datos_personales = new datos_personales();
$CV_WEB_2019->estudios = array();
$CV_WEB_2019->experiencia_laboral = array();
$CV_WEB_2019->otros = array();
$CV_WEB_2019->recommendations = array();


$CV_WEB_2019->developement_profiles = array();
$CV_WEB_2019->programming_languages = array();
var_dump($CV_WEB_2019);


$CV_TECNICO_2019 = new CV_tecnico();
var_dump($CV_TECNICO_2019);