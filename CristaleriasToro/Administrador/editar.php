
<?php
if (isset($_GET)) { //mientras se inicia la sesion
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "../PHP/coneccion.php"; // se conecta la bdd
        $id = $_GET['id']; //ID

        if ($_GET['accion'] == 'pro') {
            $query = mysqli_query($coneccion, "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio_unitario = '$precio_unitario', precio_pallet = '$precio_pallet', codigo = '$codigo', cantidad = '$cantidad', id_categoria = '$id_categoria' WHERE id = '$id'");
            if ($query) {
                header('Location: productos.php');
            }
        }
        if ($_GET['accion'] == 'cli') {
            $query = mysqli_query($coneccion, "UPDATE FROM categorias WHERE id = $id");
            if ($query) {
                header('Location: categorias.php');
            }
        }
    }
}
?>
