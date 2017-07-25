<?php
$email=$_POST['email'];
$password=$_POST['password'];
$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

require_once 'conexion.php';

$query="SELECT email,password FROM usuario WHERE email='$email'";

if ($resultado=$db->query($query)) {

  if ($resultado->num_rows > 0) {
    $row=$resultado->fetch_assoc();

    if (password_verify($password,$hash)) {
      echo "Login Exitoso";
    }else {
      echo "Datos incorrectos";
    }
  }
}
 ?>
