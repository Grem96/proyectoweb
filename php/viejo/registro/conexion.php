<?php
$db = new mysqli('localhost', 'root', '', 'login');

if ($db->connect_errno) {
  printf("Error al conectar con la base de datos %s",$msql->connect_errno);
}
 ?>
