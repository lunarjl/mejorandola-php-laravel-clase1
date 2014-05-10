<!--by José Luis Luna Rubio (Chiwiscor)-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="description"
	content=
		"aplicando lo aprendido en la clase 1 de php con laravel de mejorando.la -chiwiscor-soy un Webmaster freelance"
	/>
	<meta name="author" content="José Luis Luna Rubio"/>
	<link rel="shortcut icon" href="http://mejorandola.joseluislunarubio.net/php-laravel/c1/favi/favicon-chiwiscor.ico"/>
	<link rel="stylesheet" type="text/css" 
	href="http://mejorandola.joseluislunarubio.net/php-laravel/c1/css/normalize.css"/>
	<link rel="stylesheet" type="text/css" 
	href="http://mejorandola.joseluislunarubio.net/php-laravel/c1/css/style.css"/>
	<title>..:Mini-framework PHP-chiwiscor-:..</title>
</head>
<body>
<header>
	<div class="logo-chiwiscor"></div>
	<div class="logo-laravel"></div>
</header>
<div class="container-botones">
	<a href="laravel"><button class="btn"><?= $btn1 ?></button></a>
	<a href="temas"><button class="btn"><?= $btn2 ?></button></a>
	<a href="asdasd"><button class="btn"><?= $btn3 ?></button></a>
</div>
<div class="contenido">
	<div class="prof"></div>
	<div class="info">
		<p><strong>Profesor : </strong><span><?= $profe ?></span></p>		
		<p><strong>Curso : </strong><span><?= $curso ?></span></p>		
		<hr>
		<p class="des"><?= $desc ?></p>
	</div>
</div>
<a href="https://github.com/chiwiscor/mejorandola-php-laravel-clase1" target="_blank"><div class="git"></div></a>
<footer>by José Luis Luna Rubio</footer>
</body>
</html>