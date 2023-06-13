<?php
session_start();

// Actualizar el estado de la sesión del usuario a inactivo
$_SESSION['logged_in'] = false;

// Restablecer las variables de sesión si es necesario
// ...

// Redirigir al usuario a la página de inicio de sesión
header("location: Login.php");
exit;
?>
