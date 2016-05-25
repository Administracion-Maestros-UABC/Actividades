<?php

//Valores del formulario
$usuario=$_POST['usuario'];
$pass=$_POST['passusuario'];

//conexion con la base de datos y el servidor
$mysqli = new mysqli("localhost","root","","proyecto");
$resultado = $mysqli->query("SELECT * FROM user WHERE email='$usuario' AND contrasena='$pass'"); 

if(mysqli_num_rows($resultado))
{	
//$_usuario['usuario']=$_POST["usuario"];
header('Location:MenuCarreras.html');
}
else{
 echo "Error, intenta de  nuevo";
}
?>