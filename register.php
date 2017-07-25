<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
date_default_timezone_set('Etc/UTC');
require 'db.php';

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['nombre'];
$_SESSION['first_name'] = $_POST['correo'];
$_SESSION['last_name'] = $_POST['pass'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $mysqli->escape_string($_POST['nombre']);
$last_name = $mysqli->escape_string($_POST['correo']);
$email = $mysqli->escape_string($_POST['pass']);
$password = $mysqli->escape_string(password_hash($_POST['pass2'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      


    $sql = "INSERT INTO registro (nombre, correo,contrasena) " 
            . "VALUES ('$first_name','$last_name','$email')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

		$_SESSION['active'] = 0;
        $_SESSION['logged_in'] = true;
        $_SESSION['message'] =
                
                "Se ha registrado correctamente";

	}