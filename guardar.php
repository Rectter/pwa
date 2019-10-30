<?php 
session_start();
	require('conection.php');
$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
// $conexion = mysqli_connect( "127.0.0.1"," $usuario"," $contrasena","$basededatos" ) or die("no se pudo conectar a la base de datos");


$Nombre_Usuario = $_POST['Usuario'];
$Password_Usuario = $_POST['Password'];

$Registrar_Usuario = mysqli_query($connect,"INSERT INTO $Tabla1 (Nombre_usuario, pass_usuario)VALUES('$Nombre_Usuario' , '$Password_Usuario')") or die("Error al registrar usuarios");


mysqli_close($conexion);
header("location: index.html");

 ?>