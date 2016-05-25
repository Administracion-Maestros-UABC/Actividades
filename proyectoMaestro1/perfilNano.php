<?php
//Valores del formulario
$nombre=$_POST['NomMaestro'];
$img=$_POST['imagen'];
$email=$_POST['correo'];
$titulos=$_POST['titulos'];
$opcion=$_POST['tipo'];
$resena=$_POST['resena'];
$historial=$_POST['hMaterias'];
$ligas=$_POST['url'];
$material=$_POST['archivo'];

//conexion con la base de datos y el servidor
$mysqli = new mysqli("localhost","root","","proyecto");
$resultado = $mysqli->query("INSERT INTO nano  VALUES ('$nombre','$img','$email','$titulos','$opcion','$resena','$historial','$ligas','$material')"); 

if($resultado!=1)
	echo "No se ha insertado ningun dato";
else
   echo "Los datos fueron insertados";


//$fila=$resultado->fetch_assoc();
?>


