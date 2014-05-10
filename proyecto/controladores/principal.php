<?php 
	$profesor="Duilio Palacios";
	$curso="Curso Profesional De PHP Con Laravel";
	$descripcion=
		"Pequeña aplicacion donde se implementa lo aprendido en la clase Numero 1, aplicando vistas,
		controladores,frontend controller,las url amigables,el .htaccess acepta como url valida vacio manda al home principal
		,'laravel','temas' y por supuesto en caso de que no encuentre ninguna de las anteriores lanzara el error 404";
	$boton1="Laravel";
	$boton2="Temas";
	$boton3="404";

	vista('home',
		[
			'profe' => $profesor,
			'curso' => $curso,
			'desc' 	=> $descripcion,
			'btn1'	=> $boton1,
			'btn2'	=> $boton2,
			'btn3'	=> $boton3
		]
		);