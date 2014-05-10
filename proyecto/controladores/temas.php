<?php 
	$profesor="Duilio Palacios";
	$curso="Curso Profesional De PHP Con Laravel";
	$titulo ="Temas";
	$descripcion=
		"
			<h2>PHP desde cero</h2>
			<ul>
				<li>Introducción a PHP</li>
				<li>Hola Mundo con PHP</li>
				<li>Sintaxis y uso básico de PHP</li>
				<li>Desventajas de PHP</li>
				<li>Concepto y creación de un Front Controller</li>
				<li>Programación Orientada a Objetos con PHP</li>
				<li>Creación e invocación de controladores</li>
				<li>Encapsulamiento de variables globales</li>
				<li>Autoload de clases en PHP</li>
			</ul>
		";
	$boton1="Laravel";
	$boton2="Temas";
	$boton3="404";

	vista('temas',
		[
			'profe' 		=> $profesor,
			'curso' 		=> $curso,
			'titulo' 		=> $titulo,
			'explicacion'	=> $descripcion,
			'btn1'	=> $boton1,
			'btn2'	=> $boton2,
			'btn3'	=> $boton3
		]
		);