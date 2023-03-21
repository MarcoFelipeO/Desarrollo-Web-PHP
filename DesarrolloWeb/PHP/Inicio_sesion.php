<?php

include 'coneccion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_inicio_sesion = mysqli_query($coneccion, "SELECT * FROM usuarios WHERE  correo = '$correo'
and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_inicio_sesion) > 0) {
header("location: ../Administrador/productos.php");
exit;
}else{
    echo '
    <script>
        alert("Nombre de usuario o contraseña incorrecto, "); 
        window.location = "../Login.php";
    </script>
';
exit;
}
?>