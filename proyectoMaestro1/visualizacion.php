<?php

		//conexion con la base de datos y el servidor
		$mysqli = new mysqli("localhost","root","","proyecto");
		$resultado = $mysqli->query("SELECT * FROM regperfil"); 

	         /*while($row=$resultado->fetch_array())
				{
			
				<td>echo"$row[maestro]";//nombre de los campos de mi base de datos
				echo base64_encode("$row[img]"); 
				echo"$row[correo]"; 
				echo"$row[titulos]";
				echo"$row[tipo]"; 
				echo"$row[resena]"; 
				echo"$row[historial]";
				echo"$row[ligas]"; 
				echo"$row[material]"; 
			<
			}
			*/
		
  
?>


