<?php
require_once "../PHP/coneccion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $descripcion = $_POST['descripcion'];
        $p_pallet = $_POST['p_pallet'];
        $codigo = $_POST['codigo'];
        $categoria = $_POST['categoria'];
        $img = $_FILES['foto'];
        $name = $img['name'];
        $tmpname = $img['tmp_name'];
        $fecha = date("YmdHis");
        $foto = $fecha . ".jpg";
        $destino = "../img/" . $foto;
        $query = mysqli_query($coneccion, "INSERT INTO productos(nombre, descripcion, precio_pallet, codigo, cantidad, imagen, id_categoria) VALUES ('$nombre', '$descripcion', '$p_pallet', '$codigo', $cantidad, '$foto', $categoria)");
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
                        <th>Precio Pallet</th>
                        <th>Codigo</th>
                        <th>Cantidad</th>
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
                            <td><img class="img-thumbnail" src="../img/<?php echo $data['imagen']; ?>" width="50"></td>
                            <td><?php echo $data['nombre']; ?></td>
                            <td><?php echo $data['descripcion']; ?></td>
                            <td><?php echo $data['precio_pallet']; ?></td>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['cantidad']; ?></td>
                            <td><?php echo $data['categoria']; ?></td>
                            <td>
                                <form method="post" action="eliminar.php?accion=pro&id=<?php echo $data['id']; ?>" class="d-inline eliminar">
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
                                <label for="p_pallet">Precio Pallet</label>
                                <input id="p_pallet" class="form-control" type="text" name="p_pallet" placeholder="Precio Pallet" required>
                            </div>
                        </div>

                        <!--
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input id="codigo" class="form-control" type="text" name="codigo" placeholder="Codigo" required>
                            </div>
                        </div>
                        -->

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