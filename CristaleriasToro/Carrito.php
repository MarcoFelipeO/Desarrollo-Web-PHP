<?php require_once "PHP/coneccion.php";
require_once "PHP/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
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
   
   

    
    <!-- Navigation-->
    <div class="container">
        <div class="fondocarrito">
         
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">  <img class="foto1" src="img/foto1.png">    </a>
                </div>
                <div class="container-fluid">      
                <a class="navbar-brand" href="index.php"> <strong>Home</strong></a> 
                <a class="navbar-brand" href="Quienes_Somos.php"><strong>Quienes Somos</strong></a>
                <a class="navbar-brand" href=" codigoS.php"><strong>Productos</strong></a>
                <a class="navbar-brand" href="contacto.php "><strong>Contactanos</strong></a>
            </div>
            <a href="Login.php" class="btn btn-primary rounded-20 py-20 px-lg-20 d-none d-lg-block">Iniciar Sesion<i class="fa fa-arrow-right ms-2"></i></a>
                <div>
                    <div class="h-500 d-inline-flex align-items-center mx-n20">
                        <a class="btn btn-square btn-link rounded-20 border-20 border-end border-secondary" href="https://web.facebook.com/pages/Cristaler%C3%ADas-Toro/197906423586073/"><i class="fab fa-facebook-f"></i></a>
                        <a class="navbar-brand" href="">  <img class="carritofoto" src="img/carrito.jpg">    </a>
        
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- Header-->
    <header class="bg-primary py-5">
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
                                    <th><strong>#</strong></th>
                                    <th><strong>Producto</strong></th>
                                    <th><strong>Precio</strong></th>
                                    <th><strong>Cantidad</strong></th>
                                    <th><strong>Total</strong></th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <h4><strong>Total a Pagar:</strong> <span id="total_pagar">00</span></h4>
                    <div class="d-grid gap-2">
                        <input class="btn btn-primary" type="button" onclick="location='Mercado_P.php'" value="PAGAR"/></input>
                        <button class="btn btn-primary" type="button" id="btnVaciar">VACIAR CARRITO</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <header class="bg-primary py-5">
        <div class="container px-4 px-lg-5 my-4">
            <div class="text-center text-white">              
                <p class="m-3 text-center text-white">Copyright &copy;<strong> Cristalerias Toro 2022</strong></p>                
            </div>


    
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
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.id}</td>
                                <td>${element.nombre}</td>
                                <td>${element.precio}</td>
                                <td>1</td>
                                <td>${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
            }
        }
    </script>
    </div>
</body>

</html>