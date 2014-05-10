<?php 
	function vista($nombreVista,$datos=array())
	{
		extract($datos);
		require "vistas/$nombreVista.tpl.php";
	}

function controlador($nombre)
{
	if (empty($_GET["direccion"])) 
	{
		$nombre="principal";
	}
	$archivo ="controladores/$nombre.php";
	if (file_exists($archivo)) 
	{
		require $archivo;	
	}
	    else
    {
        header("HTTP/1.0 404 Not Found");
        require "controladores/404.php";
        //exit("Pagina no encontrada");
    }
}
