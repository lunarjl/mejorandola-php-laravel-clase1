<?php 
	$profesor="Duilio Palacios";
	$curso="Curso Profesional De PHP Con Laravel";
	$boton1="Laravel";
	$boton2="Temas";
	$boton3="404";

	vista('404',
		[
			'profe' 		=> $profesor,
			'curso' 		=> $curso,
			'btn1'	=> $boton1,
			'btn2'	=> $boton2,
			'btn3'	=> $boton3
		]
		);