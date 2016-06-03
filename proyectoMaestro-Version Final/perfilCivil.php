<?php
//Valores del formulario
$nombre=$_POST['NomMaestro'];
$img= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$email=$_POST['correo'];
$titulos=$_POST['titulos'];
$opcion=$_POST['tipo'];
$resena=$_POST['resena'];
$historial=$_POST['hMaterias'];
$ligas=$_POST['url'];
$material= addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

//conexion con la base de datos y el servidor
$mysqli = new mysqli("localhost","root","","proyecto");
$resultado = $mysqli->query("INSERT INTO perfilcivil  VALUES ('$nombre','$img','$email','$titulos','$opcion','$resena','$historial','$ligas','$material')"); 

if($resultado!=1)
	echo "No se ha insertado ningun dato";
else
    header('Location:FCivil.php');
?>


