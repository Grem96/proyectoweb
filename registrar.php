<?php
require'connect_db.php';
echo $_POST['correo'];

$_SESSION['correo'] = $_POST['correo'];
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['pass'] = $_POST['pass'];



$sql= "INSERT INTO registro (nombre,correo,contraseña)"
. "VALUES ('$nombre','$correo','$pass')";

if (  $mysqli->query($sql)){
	echo "usuarios registrados";
}


 
?>