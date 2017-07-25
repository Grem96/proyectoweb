<?php
  if (isset($_GET['error'])) {
    if ($_GET['error']==1) {
      echo "ERROR: Debes llenar todos los campos";
    }else if($_GET['error']==2){
      echo "ERROR: Los datos ingresados no son los correctos";
  }
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Datos</h2>
    <form class="" action="comprobar.php" method="post">
      <label for="">Login <input type="text" name="mail" value=""></label><br>
      <label for="">Password <input type="password" name="contra" value=""></label><br>
      <input type="submit" name="enviar" value="Login">
    </form>
  </body>
</html>
