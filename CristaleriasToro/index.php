<!DOCTYPE html>

<head>
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

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Dagoberto Godoy 182, Cerrillos, Santiago de Chile</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Atencion: Lunes a Jueves 8:30 a 16:00 hrs - Viernes de 8:30 a 15:00 hrs</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>Telefono: (56 - 9) 4296 9687</small>
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
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 texto-éxito">Cristalerias Toro</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="Quienes_Somos.php" class="nav-item nav-link">Quienes Somos</a>
                <a href="codigoS.php" class="nav-item nav-link">Productos</a>
                <a href="contacto.php" class="nav-item nav-link">contacto</a>
            </div>
            <a href="Login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Inicia Sesion Aqui<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Imagen1Home.jpg'>">
                <img class="img-fluid" src="img/Imagen1Home.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Catalogo de Productos</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Variedad de productos de vidrio de alta calidad</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/VinosTranquilos2.jpg'>">
                <img class="img-fluid" src="img/VinosTranquilos.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Vinos Tranquilos</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">El principal motivo del color verde es que la botella debe proteger el vino contra la luz. El color verde de las botellas, debido a su tono, puede llegar a filtrar hasta el 60% de la radiación y proteger así al vino.</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/VinosEspumantes2.jpg'>">
                <img class="img-fluid" src="img/VinosEspumantes.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Vinos Espumantes</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">La curva del fondo, además, hace la botella más resistente.

                                    Gracias a ella aguanta mejor la presión del interior, algo que resulta casi imprescindible en las botellas de vinos espumosos, donde el gas podría reventar una botella más frágil</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Alimentos2.jpg'>">
                <img class="img-fluid" src="img/Alimentos.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Alimentos</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Frascos de vidrio perfectos para conservar alimentos, El vidrio es puro y químicamente inerte, por lo que es uno de los contenedores más seguros para mantener los alimentos frescos y sabrosos </p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/Aguas_jugosV2.jpg'>">
                <img class="img-fluid" src="img/Aguas_jugos.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Aguas y Jugos</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">El vidrio no tiene rival para el envasado, la reutilización y el almacenamiento en el hogar de alimentos y bebidas. A diferencia del plástico, el vidrio también es apto para microondas y lavavajillas, ya que no se descompone a altas temperaturas. Así es como los envases de vidrio marcan todas las casillas para que usted y su familia estén sanos.</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/aceiteV2.jpg'>">
                <img class="img-fluid" src="img/aceite.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Aceites</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">La Luz es el principal enemigo de estos nutrientes del aceite de oliva. En ausencia de luz, los ácidos grasos monoinsaturados, los carotenos y polifenoles mantienen sus beneficios y capacidades antioxidantes. Sin embargo, en presencia de luz natural o artificial, se comportan como prooxidantes.</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/licoresV2.jpg'>">
                <img class="img-fluid" src="img/licores.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Licores</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Los tonos oscuros de las botellas protegen al líquido de la luz directa y posibilitan que se conserve mejor y durante más tiempo.</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/cervezasV2.jpg'>">
                <img class="img-fluid" src="img/cervezas.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Cervezas</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Cuando la luz intensa solar incide de forma directa y continuada en las botellas afecta a las sustancias amargantes de la cerveza provenientes del lúpulo que están disueltas en la misma, provocando un aroma fácilmente detectable y no agradable</p>
                                <a href="codigoS.php" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Direccion</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dagoberto Godoy 182, Cerrillos, Santiago de Chile</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(56 - 2) 2 437 4500</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>CristaleriasToro@gmail.com</p>
                        <div class="d-flex pt-2">
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Enlaces Rapidos</h5>
                    <a class="btn btn-link" href="index.php">Inicio</a>
                    <a class="btn btn-link" href="Quienes_Somos.php">Quienes Somos</a>
                    <a class="btn btn-link" href="codigoS.php">Productos</a>
                    <a class="btn btn-link" href="contacto.php">Contacto</a>
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
                            Hecho en Codigo HTML</a>
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