<?php require_once "PHP/coneccion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link href="css/estilo.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />


    <!--  NUEVAS COSAS Y APARTADO--->

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Estilo  MF-->
    <link href="css/estilito.css" rel="stylesheet"> 

            <!--  NUEVAS COSAS Y APARTADO--->


</head>

<body>

    <a href="#" class="btn-flotante" id="btnCarrito">Carrito de Compras <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->


 <!-- Topbar Start -->
 <div class="container-fluid bg-black p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Luis Matte, Puente Alto, Santiago de Chile</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small class="izipizi">Atencion: Lunes a Viernes 8:30 a 20:00 hrs </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small><a href="tel:+56932909140">Si quieres llamarnos +569 3290 91XX</a> </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 texto-éxito">Viveros Luanne</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Inicio</a>
                <a href="Quienes_Somos.php" class="nav-item nav-link">Quienes Somos</a>
                <a href="codigoS.php" class="nav-item nav-link active">Productos</a>
                <a href="contacto.php" class="nav-item nav-link">Contacto</a>
            </div>
            <a href="Login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Iniciar Sesion<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>


        
        <header class="bg-black py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <p class="display-2 fw-bolder">Catalogo de Productos</p>
                    <p class="lead fw-normal text-white  mb-0"> <strong> Elige tus plantas favoritas </strong> </p>
                </div>
            </div>
        </header>



<!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="col-md-12">
        <div class="table-responsive">
          <table style="width: 100%;">
            <thead class="thead-dark">
              <tr>
                <td>
                  <strong><a href="#" class="nav-link text-war text-black" category="all">Todos</a></strong>
                </td>
                <td>
                  <table>
                    <tr>
                      <?php
                      $query = mysqli_query($coneccion, "SELECT * FROM categorias");
                      while ($data = mysqli_fetch_assoc($query)) { ?>
                        <td><a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><strong><?php echo $data['categoria']; ?></strong></a></td>
                      <?php } ?>
                    </tr>
                  </table>
                </td>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </nav>
</div>
<!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD --><!--- AQUI TRAEMOS LA CATEGORIA DESDE LA BDD -->



    
<!--- TRAE EL CUADRO/card CON LA INFORMACION DESDE LA BDD--->
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($coneccion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="img/<?php echo $data['imagen']; ?>" height="300" width="300" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product price-->
                                        <span class="">$<?php echo number_format($data['precio_unitario'], 0, ',', '.'); ?></span><br><br>
                                        <p>Stock Disponible: <br><?php echo $data['stock_Productos']; ?></p>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div> 
                <?php  }
                } ?>

            </div>
        </div>
    </section>
<!--- TRAE EL CUADRO/card CON LA INFORMACION DESDE LA BDD--->



    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Viveros Luanne 2023</p>
        </div>
    </footer>
    <!-- Footer-->




<!--- SCRIPT COLOCAR EL SCRIPT ---><!--- SCRIPT COLOCAR EL SCRIPT --->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
<!--- SCRIPT COLOCAR EL SCRIPT ---><!--- SCRIPT COLOCAR EL SCRIPT --->


</body>

</html>