<?php
if (isset($_GET['id'])) {
    require_once "../PHP/coneccion.php"; // se conecta a la base de datos
    $id = $_GET['id']; // ID

    // Verificar si se enviaron los datos del formulario
    if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['precio_unitario'], $_POST['precio_pallet'], $_POST['codigo'], $_POST['stock_Productos'], $_POST['id_categoria'])) {
        // Capturar los valores actualizados del formulario
        
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio_unitario = $_POST['precio_unitario'];
        $precio_pallet = $_POST['precio_pallet'];
        $codigo = $_POST['codigo'];
        $stock_Productos = $_POST['stock_Productos'];
        $id_categoria = $_POST['id_categoria'];

        // Realizar la consulta de actualización
        $query = mysqli_query($coneccion, "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio_unitario = '$precio_unitario', precio_pallet = '$precio_pallet', codigo = '$codigo', stock_Productos = '$stock_Productos', id_categoria = '$id_categoria' WHERE id = '$id'");
        if ($query) {
            header('Location: productos.php');
            exit(); // Importante: asegúrate de terminar la ejecución del script después de redirigir
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($coneccion);
        }
    } else {
        // Obtener los datos existentes del registro para mostrarlos en el formulario
        $query = mysqli_query($coneccion, "SELECT * FROM productos WHERE id = '$id'");
        $producto = mysqli_fetch_assoc($query);

        if ($producto) {
            // Mostrar el formulario de edición con los datos existentes del registro
            ?>
            <form method="POST" action="">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>"><br>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion"><?php echo $producto['descripcion']; ?></textarea><br>

                <label for="precio_unitario">Precio Unitario:</label>
                <input type="text" name="precio_unitario" value="<?php echo $producto['precio_unitario']; ?>"><br>

                <label for="precio_pallet">Precio Pallet:</label>
                <input type="text" name="precio_pallet" value="<?php echo $producto['precio_pallet']; ?>"><br>

                <label for="codigo">Código:</label>
                <input type="text" name="codigo" value="<?php echo $producto['codigo']; ?>"><br>

                <label for="stock_Productos">Stock:</label>
                <input type="text" name="stock_Productos" value="<?php echo $producto['stock_Productos']; ?>"><br>

                <label for="id_categoria">ID Categoría:</label>
                <input type="text" name="id_categoria" value="<?php echo $producto['id_categoria']; ?>"><br>

                <input type="submit" value="Actualizar">
            </form>
            <?php
        } else {
            echo "No se encontraron datos para el producto con ID: $id";
        }
    }
} else {
    echo "ID no proporcionado";
}
?>
