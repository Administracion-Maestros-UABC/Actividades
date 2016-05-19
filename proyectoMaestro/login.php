<?php

//Valores del formulario
$usuario=$_POST['usuario'];
$pass=$_POST['passusuario'];


//conexion con la base de datos y el servidor
$mysqli = new mysqli("localhost","root","","proyecto");
$resultado = $mysqli->query("SELECT * FROM user WHERE email ='$usuario' AND contraseña ='$pass'"); 

if($resultado!=1)
	//echo "Vuelve ha intentarlo";
header('Location:MenuCarreras.html');
else
	//echo"MenuCarreras.html";
 // header('Location:MenuCarreras.html');
 // echo "sesion";

?>