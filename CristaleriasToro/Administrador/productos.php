<?php
session_start(); // SESSION START, NOS SIRVE PARA PODER INICIAR SESION CON NUESTRO USUARIO.

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // El usuario no ha iniciado sesión, redireccionar a la página de inicio de sesión
    header("location: ../login.php");
    exit;
}

// Verificar si el usuario tiene el rol de administrador
if ($_SESSION['rol'] !== 'admin') {
    // El usuario no tiene permisos de administrador, redireccionar a una página de acceso denegado o mostrar un mensaje de error
    echo "Acceso denegado. No tienes los permisos necesarios para acceder a esta página.";
    echo 'Te estamos redireccionando';
    // Redireccionar a index.php después de 5 segundos
    header("refresh:5;url=../index.php");
    exit;
}

// Resto del código de la página "productos.php" para el acceso de administrador
require_once "../PHP/coneccion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $stock_Productos = isset($_POST['stock_Productos']) ? $_POST['stock_Productos'] : '';
        $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
        $precio_unitario = isset($_POST['precio_unitario']) ? $_POST['precio_unitario'] : '';
        $precio_pallet = isset($_POST['precio_pallet']) ? $_POST['precio_pallet'] : '';
        $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : '';
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';

        if (!empty($nombre) && !empty($stock_Productos) && !empty($descripcion) && !empty($precio_unitario) && !empty($precio_pallet) && !empty($codigo) && !empty($categoria)) {
            $img = isset($_FILES['foto']) ? $_FILES['foto'] : '';
            $name = isset($img['name']) ? $img['name'] : '';
            $tmpname = isset($img['tmp_name']) ? $img['tmp_name'] : '';
            $fecha = date("YmdHis");
            $foto = $fecha . ".jpg";
            $destino = "../img/" . $foto;

            $query = mysqli_query($coneccion, "INSERT INTO productos(nombre, descripcion, precio_unitario, precio_pallet, codigo, stock_Productos, imagen, id_categoria) VALUES ('$nombre', '$descripcion','$precio_unitario', '$precio_pallet', '$codigo', $stock_Productos, '$foto', $categoria)");
            
            if ($query) {
                if (isset($img) && move_uploaded_file($tmpname, $destino)) {
                    header('Location: productos.php');
                    exit; // Importante agregar esta línea para evitar que el código siga ejecutándose después de la redirección
                }
            }
        }
    }
}



include("header.php"); ?>



<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio Unitario</th>
                        <th>Precio Pallet</th>
                        <th>Codigo</th>
                        <th>Stock Productos</th>
                        <th>Categoria</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <body>
                    <?php
                    $query = mysqli_query($coneccion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria ORDER BY p.id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><img  id="imagenproducto" class="img-thumbnail" src="../img/<?php echo $data['imagen']; ?>"></td>
                            <td><?php echo $data['nombre']; ?></td>
                            <td><?php echo $data['descripcion'];  ?></td>
                            <td>$<?php echo number_format($data['precio_unitario'], 0, ',', '.'); ?></td>
                            <td>$<?php echo number_format($data['precio_pallet'], 0, ',', '.'); ?></td>
                            <td><?php echo $data['codigo']; ?></td>
                            <td><?php echo $data['stock_Productos']; ?></td>
                            <td><?php echo $data['categoria']; ?></td>
                            

                            <!--      B O T O N      E D I T A R   --->
                            <td>
                            <form action="editar.php?id=<?php echo $data['id']; ?>&accion=pro" method="POST" enctype="multipart/form-data" autocomplete="off">
                                <button class="btn btn-success" type="submit">Editar</button>
                            </form>

                            </td>

                            <!--      B O T O N      E L I M I N A R   --->
                            <td>
                                <form method="post" action="eliminar.php?accion=pro&id=<?php echo $data['id']; ?>" class="d-inline eliminar">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Coloca este código donde deseas mostrar el enlace de deslogueo -->
<a class="btn btn-warning" href="../cerrar_sesion.php">Cerrar sesión</a>


<!------------------------------------------------------------------------------------><!------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------><!------------------------------------------------------------------------------------>
<!-- I N G R E S A     U N     N U E V O       P R O D U C T O -->

<div id="productos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="title">Nuevo Producto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            

            </div>

            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock_Productos">Cantidad</label>
                                <input id="stock_Productos" class="form-control" type="text" name="stock_Productos" placeholder="stock Productos" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" placeholder="Descripción" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input id="codigo" class="form-control" type="text" name="codigo" placeholder="Codigo" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio_unitario">Precio Unitario</label>
                                <input id="precio_unitario" class="form-control" type="text" name="precio_unitario" placeholder="Precio Unitario" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio_pallet">Precio Pallet</label>
                                <input id="precio_pallet" class="form-control" type="text" name="precio_pallet" placeholder="Precio Pallet" required>
                            </div>
                        </div>
                        

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria" required>
                                    <?php
                                    $categorias = mysqli_query($coneccion, "SELECT * FROM categorias");
                                    foreach ($categorias as $cat) { ?>
                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categoria']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
