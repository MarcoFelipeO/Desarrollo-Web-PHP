<?php
session_start(); // SESSION START, NOS SIRVE PARA PODER INICIAR SESION CON NUESTRO USUARIO.


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
?>
            
<html lang="es">
<?php include("header.php"); ?>
<body>
    <div class="container">
        <h1>Editar Producto</h1>
        <form method="POST" action="editar.php?id=<?php echo $id; ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre']; ?>">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" name="descripcion"><?php echo $producto['descripcion']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="precio_unitario">Precio Unitario:</label>
                <input type="text" class="form-control" name="precio_unitario" value="<?php echo $producto['precio_unitario']; ?>">
            </div>
            <div class="form-group">
                <label for="precio_pallet">Precio Pallet:</label>
                <input type="text" class="form-control" name="precio_pallet" value="<?php echo $producto['precio_pallet']; ?>">
            </div>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" class="form-control" name="codigo" value="<?php echo $producto['codigo']; ?>">
            </div>
            <div class="form-group">
                <label for="stock_Productos">Stock:</label>
                <input type="text" class="form-control" name="stock_Productos" value="<?php echo $producto['stock_Productos']; ?>">
            </div>
            <div class="form-group">
                <label for="id_categoria">Categoría:</label>
                <select class="form-control" name="id_categoria">
                    <?php
                    // Obtener todas las categorías de la base de datos
                    $queryCategorias = mysqli_query($coneccion, "SELECT id, categoria FROM categorias");
                    while ($categoria = mysqli_fetch_assoc($queryCategorias)) {
                        $categoriaId = $categoria['id'];
                        $categoriaNombre = $categoria['categoria'];
                        ?>
                        <option value="<?php echo $categoriaId; ?>" <?php if ($categoriaId == $producto['id_categoria']) echo "selected"; ?>><?php echo $categoriaNombre; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Actualizar">
        </form>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
        } else {
            echo "No se encontraron datos para el producto con ID: $id";
        }
    }
} else {
    echo "ID no proporcionado";
}
?>

<?php include("footer.php"); ?>
