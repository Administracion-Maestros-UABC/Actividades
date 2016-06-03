<?php

		//conexion con la base de datos y el servidor
		$mysqli = new mysqli("localhost","root","","proyecto");
		$resultado = $mysqli->query("SELECT * FROM nano"); 
?>


