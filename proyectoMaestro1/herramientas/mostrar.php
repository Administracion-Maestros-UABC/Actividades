<?php


		$mysqli = new mysqli("localhost","root","","proyecto");
		$resultado =$mysqli->query("SELECT * FROM regperfil"); 

		if($resultado!=1)
			echo "No se ha insertado ningun dato";
		else
		// echo "Los datos fueron insertados";
	 
	$fila=$resultado->fetch_assoc();
		/*while($fila=mysql_fetch_array())
			{
				echo "$fila[maestro]"; //nombre de los campos de mi base de datos
				echo "$fila[img]"; 
				echo "$fila[correo]"; 
				echo "$fila[titulos]"; 
				echo "$fila[tipo]"; 
				echo "$fila[resena]"; 
				echo "$fila[historial]"; 
				echo "$fila[ligas]"; 
				echo "$fila[material]"; 
			}*/
?>