<?php 
	$profesor="Duilio Palacios";
	$curso="Curso Profesional De PHP Con Laravel";
	$titulo ="Laravel";
	$descripcion=
		"El 2012 sirvió para ver como la oveja negra a PHP. Todos se deslumbraban con nuevos lenguajes/paradigmas como Node.js, Ruby On Rails y demás. Si mencionabas PHP te comenzaban a ver como aquel hombre de 45 años, divorciado, con un trozo de pizza en su escritorio y programando en COBOL.
		</br>
		Es cierto que se resaltaron muchas de las carencias del tan popular PHP, pero eso lejos de matarlo, lo fortaleció. Se empezó a trabajar en versiones mejoradas, se aprendió de los nuevos lenguajes y empezaron a llegar Frameworks de alto nivel, prácticos, fáciles de usar y con un futuro muy prometedor. 
		Laravel se basa en la elegancia y simpleza. Programar ya no tiene que ser tan doloroso y de hecho puede ser agradable con las herramientas necesarias. Laravel es una de esas herramientas.
		</br>
		Está pensado para todos los programadores, inclusive los nuevos programadores que están iniciando con PHP, y ofrece grandes experiencias de desarrollo a los programadores avanzados.
		Gracias a la arquitectura única de Laravel, posibilita a los desarrolladores a crear y diseñar su propia infraestructura para sus aplicaciones de la manera más flexible.";
	$boton1="Laravel";
	$boton2="Temas";
	$boton3="404";

	vista('laravel',
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