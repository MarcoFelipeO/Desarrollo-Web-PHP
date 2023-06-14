<?php
// Verificar si la sesión está iniciada
if (isset($_SESSION['logged_in'])) {
    // Restablecer las variables de sesión relevantes
    $_SESSION['logged_in'] = false;
    $_SESSION['rol'] = '';

    // Actualizar el campo 'sesion_activa' en la base de datos
    include '../coneccion.php'; // Asegúrate de tener la ruta correcta al archivo 'coneccion.php'

    // Obtener el correo del usuario actual
    $correo = $_SESSION['correo'];

    // Actualizar el campo 'sesion_activa' a 0
    mysqli_query($coneccion, "UPDATE usuarios SET sesion_activa = 0 WHERE correo = '$correo'");

    // Destruir la sesión actual
    session_destroy();

    // Redireccionar a la página de inicio de sesión u otra página si es necesario
    header("Location: ../Login.php");
    exit;
}
?>
