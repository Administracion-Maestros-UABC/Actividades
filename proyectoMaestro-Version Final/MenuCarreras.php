<?php
session_start();
echo"---------------------------------------------Ha iniciado sesiónn con ------->>> ".$_SESSION['usuario'];
echo"<a href='logout.php'>Cerrar sesión</a>";
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Directorio FIAD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="estilos/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Content -->
	<section>	
	<div id="content">
				<div class="inner">

					<!-- Post -->
						<article class="box post post-excerpt">
							<header>		
								<a href="index.html" class="image featured">
								<img src="imagenes/logo (2).png" alt="Logo alt" width=900 height=200>
							  </a>
								<p>Elige la carrera que eres docente</p>							  
							  
							</header>
							
							<ul>
							<li><a href="FBio.php">Bioingeniería </a></li>
							<li><a href="FCivil.php">Ingeniería Cilvil</a></li>
							<li><a href="FComputacion.php">Ingeniería en computación</a></li>
							<li><a href="FElectronica.php">Ingeniería Electrónica</a></li>
							<li><a href="FIndustrial.php">Ingeniería Industrial</a></li>
							<li><a href="FNano.php">Nanotecnología</a></li>
						</ul>
						
							
				<!-- Pagination -->
				</div>
			</div>
		</section>

		<!-- Sidebar -->
		<section>
			<div id="sidebar">

				<!-- Logo -->
					<h1 id="logo"><a href="index.html">Planta de Maestros</a></h1>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="Bio.php" target="_blank">Bioingeniería </a></li>
							<li><a href="Civil.php" target="_blank">Ingeniería Cilvil</a></li>
							<li><a href="Computacion.php" target="_blank">Ingeniería en Computación</a></li>
							<li><a href="Electronica.php" target="_blank">Ingeniería Electrónica</a></li>
							<li><a href="Industrial.php" target="_blank">Ingeniería Industrial</a></li>
							<li><a href="Nano.php" target="_blank">Nanotecnología</a></li>
						</ul>
					</nav>
			
		  
				    <ul id="copyright">
						<li>Derechos Reservados.</li><li>Space Web Design <a href="https://www.facebook.com/SpaceWeb-Design-1505450843038483/" target="_blank">Facebook</a></li>
					</ul>

			</div>
			</section>

		<!-- Scripts -->
			<script src="estilos/js/jquery.min.js"></script>
			<script src="estilos/js/skel.min.js"></script>
			<script src="estilos/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="estilos/js/main.js"></script>

	</body>
</html>