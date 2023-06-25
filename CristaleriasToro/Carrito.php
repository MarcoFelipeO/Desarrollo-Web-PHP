<!DOCTYPE html>
<html lang="es">

<?php
session_start();
require_once "PHP/coneccion.php";
require_once "PHP/config.php";

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Viveros Luanne</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link href="css/estilo.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 
 
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
     <link href="css/stylecarrito.css" rel="stylesheet">
     <link href="css/estilito.css" rel="stylesheet">
    
</head>





<body>


   <!-- Topbar Start -->
   <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small class="izipizi">Luis Matte, Puente Alto, Santiago de Chile</small>
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

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 texto-éxito"> Viveros LUANNE</h2>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '&nbsp; Bienvenido,   ' . $_SESSION['usuario']; 
            } else {
                // El usuario no ha iniciado sesión, mostrar un mensaje de error o redireccionar al formulario de inicio de sesión
                echo '&nbsp;&nbsp;#Por favor debes iniciar sesión ';
            }
            ?>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Inicio</a>
                <a href="Quienes_Somos.php" class="nav-item nav-link">Quienes Somos</a>
                <a href="codigoS.php" class="nav-item nav-link">Productos</a>
                <a href="contacto.php" class="nav-item nav-link">Contactanos</a>
            </div>
            <a href="Login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Inicia Sesion Aqui<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


<a href="codigoS.php" class="btn-flotante" >Volver a Comprar <span class="badge bg-success" ></span></a>
   
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-black py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="carrito"><strong>Carrito de Compras</strong></h1>
                <p class="carrito2">Productos agregados recientemente</p>
            </div>
        </div>
    </header>









    
    <div class="fondocarrito">
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><strong>Nombre Producto</strong></th>
                                    <th><strong>Precios</strong></th>
                                    <th><strong>Unidades</strong></th>
                                    <th><strong>Cantidad a pagar</strong></th>
                                    <th><strong>Acciones</strong></th> <!-- Nueva columna para el botón de eliminar -->
                                    <!--<th><strong>Total</strong></th>-->
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <h4><strong>Total a Pagar:</strong> <span id="total_pagar">$0</span></h4>
                    <div class="d-grid gap-2">
                        <input id="botonpagar" class="btn btn-primary" type="button" onclick="location='Mercado_P.php'" value="PAGAR"/></input>
                        <button class="btn btn-primary" type="button" id="btnVaciar">VACIAR CARRITO</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    

    
    </footer>

    

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        mostrarCarrito();

        function mostrarCarrito() {
  if (localStorage.getItem("productos") != null) {
    let array = JSON.parse(localStorage.getItem('productos'));
    if (array.length > 0) {
      $.ajax({
        url: 'ajax.php',
        type: 'POST',
        async: true,
        data: {
          action: 'buscar',
          data: array
        },
        success: function(response) {
          console.log(response);
          const res = JSON.parse(response);
          let productos = {}; // Objeto para almacenar los productos y sus cantidades acumuladas
          let totalPagar = 0; // Variable para calcular el precio total a pagar

          res.datos.forEach(element => {
            const key = element.nombre + element.precio_unitario; // Clave única para identificar cada producto
            if (productos[key]) {
              productos[key].cantidad += 1;
            } else {
              productos[key] = {
                nombre: element.nombre,
                precio_unitario: parseFloat(element.precio_unitario),
                cantidad: 1
              };
            }
            totalPagar += parseFloat(element.precio_unitario); // Sumar el precio unitario al total a pagar
          });

          let html = '';
          for (const key in productos) {
            const producto = productos[key];
            let cantidad = producto.cantidad > 1 ? `x${producto.cantidad}` : '';
            html += `
              <tr>
                <td>${producto.nombre}</td>
                <td>$${producto.precio_unitario.toFixed(3)}</td>
                <td>${cantidad}</td>
                <td>$${(producto.precio_unitario * producto.cantidad).toFixed(3)}</td>
                <td><button class="btn btn-danger btn-sm" onclick="eliminarUnidad('${key}')">Eliminar</button></td>
              </tr>
            `;
          }

          $('#tblCarrito').html(html);
          $('#total_pagar').text(`$${totalPagar.toFixed(3)}`);
        },
        error: function(error) {
          console.log(error);
        }
      });
    }
  }
}


function eliminarUnidad(index) {
  if (localStorage.getItem("productos") != null) {
    let productos = JSON.parse(localStorage.getItem("productos"));
    
    productos.splice(index, 1);
    localStorage.setItem("productos", JSON.stringify(productos));
    
    mostrarCarrito();
  }
}





    </script>
    </div>


    <header class="bg-black py-5">
        <div class="container px-4 px-lg-5 my-4">
            <div class="text-center text-white">              
                <p class="m-2 text-center text-white">Copyright &copy;<strong> Viveros LUANNE 2023</strong></p>                
            </div>
    </header>

</body>

</html>