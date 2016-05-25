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
									<p>Planta de Maestro Ingeniería en Computación</p>							
							</header>	
							<div class="info">
							<ul class="stats">
									<li><a href="https://www.facebook.com/groups/fiadens/?fref=ts" target="_blank"><img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=40 height=30  /></a></li>
									<li><a href="https://llave.uabc.edu.mx/auth/login" target="_blank"><img alt="Correo Uabc" src="imagenes/correo.png" width=40 height=30></a></li>
								    <li><a href="http://fiad.ens.uabc.mx" target="_blank"><img alt="FIAD" src="imagenes/fiad.png" width=40 height=30></a></li>
									<li><a href="http://148.231.9.12/wd120awp.exe/connect/siss2009r2"  target="_blank"><img alt="Servicio Social Uabc" src="imagenes/servicio social.png" width=40 height=30></a></li>
							</ul>
							</div>							
									
							<table>
								<tbody>
								<?php
									include("visualizacion.php");
									while($row=$resultado->fetch_array())
										{
									?>
									<tr>
										<td><h2><?php echo $row['maestro'];?></h2></td>
										<br></br>
										<td> <img height="70px" src="data=image/jpg;base64,<?php echo base64_encode($row['img']); ?>"/></td>
									</tr>
									<tr>
										<td><?php echo $row['correo'];?></td>
									</tr>
									<tr>
										<td><strong><?php echo $row['titulos'];?></strong></td>
									</tr>
									<tr>
										<td><strong>Maestro de :</strong> <?php echo $row['tipo'];?></td>
									</tr>
									<tr>
										<td><strong>Reseña Academica:</strong><?php echo $row['resena'];?></td>
									</tr>
									<tr>
										<td><strong>Historial Academico:</strong><?php echo $row['historial'];?></td>
									</tr>
									<?php
									}
									?>
									
									
								
								</tbody>
							
							</table>
									
									
						</article>

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
							<li><a href="Bio.php">Bioingeniería </a></li>
							<li><a href="ingCivil.php">Ingeniería Cilvil</a></li>
							<li><a href="ingComputacion.php">Ingeniería en Computación</a></li>
							<li><a href="ingElectronica.php">Ingeniería Electrónica</a></li>
							<li><a href="ingIndustrial.php">Ingeniería Industrial</a></li>
							<li><a href="Nano.php">Nanotecnología</a></li>
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