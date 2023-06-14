<?php
session_start(); // SESSION START NOS SIRVE PARA PODER INICIAR SESION CON NUESTRO USUARIO.

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // El usuario no ha iniciado sesión, redireccionar a la página de inicio de sesión
    header("location: ../Login.php");
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
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $descripcion = $_POST['descripcion'];
        $p_unitario = $_POST['p_unitario'];
        $p_pallet = $_POST['p_pallet'];
        $codigo = $_POST['codigo'];
        $categoria = $_POST['categoria'];
        $img = $_FILES['foto'];
        $name = $img['name'];
        $tmpname = $img['tmp_name'];
        $fecha = date("YmdHis");
        $foto = $fecha . ".jpg";
        $destino = "../img/" . $foto;
        $query = mysqli_query($coneccion, "INSERT INTO productos(nombre, descripcion, precio_unitario, precio_pallet, codigo, cantidad, imagen, id_categoria) VALUES ('$nombre', '$descripcion','$p_unitario', '$p_pallet', '$codigo', $cantidad, '$foto', $categoria)");
        if ($query) {
            if (move_uploaded_file($tmpname, $destino)) {
                header('Location: productos.php');
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
                            <td><img class="img-thumbnail" src="../img/<?php echo $data['imagen']; ?>" width="350"></td>
                            <td><?php echo $data['nombre']; ?></td>
                            <td><?php echo $data['descripcion'];  ?></td>
                            <td>$<?php echo number_format($data['precio_unitario'], 0, ',', '.'); ?></td>
                            <td>$<?php echo number_format($data['precio_pallet'], 0, ',', '.'); ?></td>
                            <td><?php echo $data['codigo']; ?></td>
                            <td><?php echo $data['stock_Productos']; ?></td>
                            <td><?php echo $data['categoria']; ?></td>
                            
                            <td>
                                <form method="post" action="editar.php?accion=pro&id=<?php echo $data['id']; ?>" class="editar">
                                    <button class="btn btn-danger" type="submit">Editar</button>
                                </form>
                            </td>


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
<!------------------------------------------------------------------------------------><!------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------><!------------------------------------------------------------------------------------>

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
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="text" name="cantidad" placeholder="Cantidad" required>
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
                                <label for="p_unitario">Precio Unitario</label>
                                <input id="p_unitario" class="form-control" type="text" name="p_unitario" placeholder="Precio Unitario" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p_pallet">Precio Pallet</label>
                                <input id="p_pallet" class="form-control" type="text" name="p_pallet" placeholder="Precio Pallet" required>
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
<!------------------------------------------------------------------------------------><!------------------------------------------------------------------------------------>
<!----------------------------------------------------EDITAR COSAS --------------------------------><!------------------------------------------------------------------------------------>
<!----------------------------------------------------EDITAR COSAS --------------------------------><!------------------------------------------------------------------------------------>
<!----------------------------------------------------EDITAR COSAS --------------------------------><!------------------------------------------------------------------------------------>




<div id="editarcosas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="title">Edite Aqui sus Productos</h5>
                <?php
                // Verificar si se proporcionó un ID válido
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];

                    // Consultar la base de datos para obtener los datos del producto
                    $query = mysqli_query($coneccion, "SELECT * FROM productos WHERE id = $id");
                    $data = mysqli_fetch_assoc($query);

                    // Continuar con el proceso de edición
                } else {
                    // Redireccionar al usuario o mostrar un mensaje de error
                   // exit("ID de producto inválido");
                }
                ?>
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
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre " value="<?php echo $data['nombre']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input id="stock_Productos" class="form-control" type="text" name="stock_Productos" placeholder="stock Productos" value="<?php echo $data['stock_Productos']; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" placeholder="Descripción" rows="3" required><?php echo $data['descripcion']; ?></textarea>
                            </div>
                        </div>

                        <!-- Repite el mismo proceso para los demás campos del formulario -->

                    </div>
                    <button class="btn btn-primary" type="submit">Actualizar datos</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>