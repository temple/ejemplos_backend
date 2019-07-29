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
    public $recommendations;
}

class CV_desarrollo extends CV_general{
    public $developement_profiles; //github, bitbucket, ...
    public $programming_languages;
    //TODO: Hacer que la experiencia_laboral tenga especificaciones y funciones
    //      en aquellas posiciones que tengan que ver con desarrollo
}

class CV_desarrollo_Web extends CV_desarrollo{
	public $proyectos_web;
}

class CV_tecnico extends CV_general{
    public $proyectos;

}


$CV_DEV_2019 = new CV_desarrollo();
var_dump($CV_DEV_2019);

$CV_WEB_2019 = new CV_desarrollo_Web();
var_dump($CV_WEB_2019);

$CV_TECNICO_2019 = new CV_tecnico();
var_dump($CV_TECNICO_2019);