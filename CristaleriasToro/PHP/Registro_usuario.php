<?php

include 'coneccion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Validación del correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo '
        <script>
            alert("Por favor, ingrese un correo electrónico válido"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

// Validación de la contraseña
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $contrasena)) {
    echo '
        <script>
            alert("La contraseña debe tener al menos 8 caracteres y contener tanto mayúsculas como minúsculas"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
        VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";

// Resto del código para verificar el correo y el usuario, y ejecutar la consulta

// ...



//verificar que el correo no se repita dentro de la bd
$verificar_correo = mysqli_query($coneccion, "SELECT * FROM usuarios WHERE  correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya esta registrado"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

//verificar que el usuario no se repita dentro de la bd
$verificar_usuario = mysqli_query($coneccion, "SELECT * FROM usuarios WHERE  usuario = '$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya esta registrado"); 
            window.location = "../Login.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($coneccion, $query);


if ($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado con exito"); 
            window.location = "../Login.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Usuario no registrado"); 
            window.location = "../Login.php";
        </script>
    ';
}
mysqli_close($coneccion);
