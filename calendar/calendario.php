<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<title>Club Deportivo Metropolitano</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style.css"/>
		<link type="text/css" rel="stylesheet" href="../css/estilo.css"/>
		<script src="jquery.min.js"></script>
	</head>
<body>
	<nav>
		<h2>Club Deportivo Metropolitano</h2>
		<ul>
			<li><a href="../index.html">Inicio</a></li>
			<li><a href="../login.html">Ingrese</a></li>
			<li><a href="../acerca.html">Sobre Nosotros</a></li>
		</ul>
		</nav>
		<article>
			<div>
				<div id="calendar_div">
					<?php echo getCalender(); ?>
				</div>
			</div>
		</article>
</body>
</html>
