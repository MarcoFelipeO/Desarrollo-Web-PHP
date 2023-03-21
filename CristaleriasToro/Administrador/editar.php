
<?php
if (isset($_GET)) { //mientras se inicia la sesion
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "../PHP/coneccion.php"; // se conecta la bdd
        $id = $_GET['id']; //ID

        if ($_GET['accion'] == 'pro') {
            $query = mysqli_query($coneccion, "UPDATE productos SET nombre_completo = nombre_completo WHERE id = $id");
          /*  $query = mysqli_query($coneccion, "UPDATE productos SET nombre = nombre, descripcion = descripcion WHERE id = $id;"); */
            if ($query) {
                header('Location: productos.php');
            }
        }
        if ($_GET['accion'] == 'cli') {
            $query = mysqli_query($coneccion, "DELETE FROM categorias WHERE id = $id");
            if ($query) {
                header('Location: categorias.php');
            }
        }
    }
}
?>
