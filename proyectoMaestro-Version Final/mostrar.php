<?php


$mysqli = new mysqli("localhost","root","","proyecto");
		$resultado = $mysqli->query("SELECT * FROM regperfil"); 

		if($resultado!=1)
			echo "No se ha insertado ningun dato";
		else
		 echo "Los datos fueron insertados";
	 
		$fila=$resultado->fetch_assoc();
		while($fila=mysql_fetch_array($resultado))
			{
				echo "$fila [maestro]"; <br>//nombre de los campos de mi base de datos
				echo "$fila [img]"; <br>
				echo "$fila [correo]"; <br>
				echo "$fila [titulos]"; <br>
				echo "$fila [tipo]"; <br>
				echo "$fila [resena]"; <br>
				echo "$fila [historial]"; <br>
				echo "$fila [ligas]"; <br>
				echo "$fila [material]"; <br>
			}
?>