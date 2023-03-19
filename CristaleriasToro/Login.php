<html>
    <!DOCTYPE html>
    <html lang="en">
    <?php require_once "PHP/coneccion.php"; ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>Cristalerias Toro</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
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
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/estilito.css" rel="stylesheet">
        
    
        <link rel="stylesheet" href="css/style.css">
    </head>




                                               <!-- Fin del head y comienzo de login superior-->

    <!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  -->

    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small class="izipizi">Luis Matte, Puente Alto, Santiago de Chile</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Atencion: Lunes a Viernes 8:30 a 20:00 hrs </small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>Telefono: (+56 9) 3290 9140</small>
                </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  -->
<!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  --><!-- Division de 1°era barra superior  -->



<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0 text-black">Viveros Luanne</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Inicio</a>
            <a href="quienes_somos.php" class="nav-item nav-link">Quienes Somos</a>
            <a href="codigoS.php" class="nav-item nav-link">Productos</a>
            <div class="nav-item dropdown">
            </div>
            <a href="contacto.php" class="nav-item nav-link">contacto</a>
        </div>
       
</nav>
<!-- Navbar End -->


    <body>
        <div class="fondo">
            <main>
                <div class="contenedor__todo">
                    <div class="caja__trasera">
                        <div class="caja__trasera-login">
                            <h3>¿Ya tienes una cuenta?</h3>
                            <p>Inicia sesión para entrar en la página</p>
                            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                            <a href="index.html" class="nav-item nav-link active"><button>Volver</button></a>
                            
                        </div>
                        <div class="caja__trasera-register">
                            <h3>¿Aún no tienes una cuenta?</h3>
                            <p>Regístrate para que puedas iniciar sesión</p>
                            <button id="btn__registrarse">Registrarse</button>
                            <a href="index.html" class="nav-item nav-link active"><button>Volver</button></a>
                        </div>
                    </div>
    
                    <!--Formulario de Login y registro-->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="PHP/Inicio_sesion.php"  method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="text" placeholder="Correo Electronico" name = "correo">
                            <input type="password" placeholder="Contraseña" name = "contrasena">
                            <button>Entrar</button>
                        </form>

                        <!--Registrar-->
                        <form action="PHP/Registro_usuario.php" method="POST" class="formulario__register">
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre completo" name = "nombre_completo"> 
                            <input type="text" placeholder="Correo Electronico" name = "correo">
                            <input type="text" placeholder="Usuario"name = "usuario"> 
            </main>
    




  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Direccion</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dagoberto Godoy 182, Cerrillos, Santiago de Chile</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(56 - 2) 2 437 4500</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>CristaleriasToro@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Enlaces Rapidos</h5>
                <a class="btn btn-link" href="">Sobre Nosotros</a>
                <a class="btn btn-link" href="index.html">Inicio</a>
                <a class="btn btn-link" href="">Nuestros Servicio</a>
                <a class="btn btn-link" href="">Terminos y condiciones</a>
                <a class="btn btn-link" href="">Soporte</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Galeria</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/VinosEspumantes.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/VinosTranquilos.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/Alimentos.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/Aguas_jugos.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/aceite.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/cervezas.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Si desea mas informaciones</h5>
                <p>Por favor comunicarse directamente con la oficina principal de Cristalerias Toro</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Cristalerias Toro</a>, Todo los derechos Reservados.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Hecho en <a href="">Codigo HTML</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>                    
           <script src="script.js"></script>
        </div>
      
    </body>
    </html>