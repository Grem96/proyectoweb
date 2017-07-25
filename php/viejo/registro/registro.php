<?php
$nombre=$_POST['nombre']
$email=$_POST['correo'];
$password=$_POST['pass'];
$password2=$_POST['pass2'];

require_once 'conexion.php';

if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
  if ($password==$password2) {
    $validacion="SELECT correo FROM registro WHERE correo='$email'";

    $resultado=$db->query($validacion);

    if ($resultado->num_rows > 0) {
      echo "El email ya existe";

    }else {
      $hash=password_hash($password,PASSWORD_DEFAULT);

      $query="INSERT INTO registro (nombre,correo,contraseña,sexo)VALUES('$nombre','$email','$sexo','$hash')";

      if ($db->query($query)) {
        echo "El usuario se ha registrado";
      }else {
        echo "Error al registrar";
    }
    }
  }else {
    echo "Passwor no coincide";
  }
}else {
  echo "El email no hes valido";
}
 ?>
