<?php
session_start();

include 'coneccion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_inicio_sesion = mysqli_query($coneccion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_inicio_sesion) > 0) {
    $usuario = mysqli_fetch_assoc($validar_inicio_sesion);

    // Verificar si la sesión del usuario ya está activa
    if ($usuario['sesion_activa'] == 1) {
        echo 'Ya has iniciado sesión anteriormente.';
        exit;
    }

    // Actualizar el estado de la sesión del usuario a activo
    mysqli_query($coneccion, "UPDATE usuarios SET sesion_activa = 1 WHERE correo = '$correo'");

    // Establecer las variables de sesión
    $_SESSION['logged_in'] = true;
    $_SESSION['rol'] = $usuario['rol'];

    if ($usuario['rol'] == 'admin') {
        // Redireccionar al área de administrador
        header("location: ../Administrador/productos.php");
    } else {
        // Redireccionar a la página correspondiente para otros roles de usuario
        header("location: ../codigoS.php");
    }
    
    exit;
} else {
    echo '
    <script>
        alert("Nombre de usuario o contraseña incorrecto");
        window.location = "../Login.php";
    </script>
    ';
    exit;
}
?>
