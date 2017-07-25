<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      try {
        $base=new PDO("mysql:host=127.0.0.1; dbname=formulario", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM login WHERE correo= :mail AND pass= :contra";
        $resultado=$base->prepare($sql);
        $mail=htmlentities(addslashes($_POST["mail"]));
        $contra=htmlentities(addslashes($_POST["contra"]));
        $resultado->bindValue(":mail", $mail);
        $resultado->bindValue(":contra", $contra);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if ($numero_registro!=0) {
          session_start();
          $_SESSION["usuario"]=$_POST["mail"];
          header("location:usuarios_registrados1.php");
        } else {
          header("location:login.php?error=1");
        }

      } catch (Exception $e) {
        die("Error: ".$e->getMessage());
      }

     ?>
  </body>
</html>
