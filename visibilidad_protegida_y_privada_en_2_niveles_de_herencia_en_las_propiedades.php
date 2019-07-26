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
	protected $otros;
    private $recommendations = "No hay recomendaciones";
}

class CV_desarrollo extends CV_general{
    protected $developement_profiles; //github, bitbucket, ...
 //   protected $otros = "Gran conocimiento de OOP";
    private $programming_languages = array();

    //TODO: Hacer que la experiencia_laboral tenga especificaciones y funciones
    //      en aquellas posiciones que tengan que ver con desarrollo
}

class CV_desarrollo_Web extends CV_desarrollo{
	protected $developement_profiles = array();
	protected $otros = "Gran conocimiento de OOP en PHP";
	public $proyectos_web;
}

class CV_tecnico extends CV_general{
    public $proyectos;
}


$CV_WEB_2019 = new CV_desarrollo_Web();
var_dump($CV_WEB_2019);


$CV_DEV_2019 = new CV_desarrollo();
var_dump($CV_DEV_2019);