<?php
session_start();
//Valores del formulario
$usuario=$_POST['usuario'];
$pass=$_POST['passusuario'];

//conexion con la base de datos y el servidor
$mysqli = new mysqli("localhost","root","","proyecto");
$resultado = $mysqli->query("SELECT * FROM user WHERE email='$usuario' AND contrasena='$pass'"); 

if(mysqli_num_rows($resultado))
{	
$_SESSION['usuario']=$usuario;
header('Location:MenuCarreras.php');
}
else{
 echo "Error, intenta de  nuevo";
}
?>