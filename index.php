<?php 
//HEAD
$referencias = array("https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i", 
                    "https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i",
                    "css/styles.css");
//INICIO
$titulo = "Página Turística-Arequipa";
$ciudadBlanca = "LA CIUDAD BLANCA";
$arequipa = "Arequipa";
$navegador = array("btnInicio"=>"INICIO","btnInformacion"=>"INFORMACION","btnLugares"=>"LUGARES","btnTienda"=>"TIENDA");
//SECCIONES
$seccion1 = array("primero"=>"Una excelente opción","segundo"=>"AREQUIPA","tercero"=>"Arequipa es una ciudad peruana, capital de la provincia y del departamento homónimos. Su área metropolitana la conforman veintiún distritos conurbados, incluyendo al distrito de Arequipa, lugar fundacional, histórico y sede del gobierno de la ciudad.");
$seccion2 = array("primero"=>"Información","segundo"=>"Para Tí","tercero"=>"Arequipa lo tiene todo. Sí, absolutamente todo lo que puedas imaginar
                 , lo encuentras en el territorio de la 'Ciudad Blanca'. Historia, aventura, paisajes fabulosos, vida silvestre, gastronomía, arte y mucho más se esconde en la Villa de Nuestra Señora de la Asunta de Arequipa -nombre con el cual fue fundado, en 1540-, que está custodiada firmemente por su atractivo natural más imponente: el volcán Misti.
                 ¿Aún no te convences? No te preocupes, aquí te expondremos razones de sobra para que la próxima vez que organices tus vacaciones, tengas a Arequipa como principal destino turístico.");
//FOOTER
$copyright = array("Copyright","Your Website 2021");
$scripts = (object)["src1"=>"https://use.fontawesome.com/releases/v5.15.3/js/all.js", 
                    "src2"=>"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js", "src3"=>"js/scripts.js"];
$fecha = date('d/m/y');
?>
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $titulo?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src=<?php echo $scripts->src1;?> crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href=<?php echo $referencias[0]?> rel="stylesheet" />
        <link href=<?php echo $referencias[1]?> rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=<?php echo $referencias[2]?> rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">"<?php echo $ciudadBlanca?>"</span>
                <span class="site-heading-lower"><?php echo $arequipa?></span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php"><?php echo $navegador["btnInicio"];?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php"><?php echo $navegador["btnInformacion"];?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php"><?php echo $navegador["btnLugares"];?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php"><?php echo $navegador["btnTienda"];?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/AQP1.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"><?php echo $seccion1["primero"];?></span>
                            <span class="section-heading-lower"><?php echo $seccion1["segundo"];?></span>
                        </h2>
                        <p class="mb-3"><?php echo $seccion1["tercero"];?></p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visitanos hoy!</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"><?php echo $seccion2["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion2["segundo"];?></span>
                            </h2>
                            <p class="mb-0" align ="justi"><?php echo $seccion2["tercero"];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"><?php echo $copyright[0]?> &copy; <?php echo $copyright[1]?></p>
            <br><p class="m-0 small">Fecha <?php echo ": $fecha";?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src=<?php echo $scripts->src2;?>></script>
        <!-- Core theme JS-->
        <script src=<?php echo $scripts->src3;?>></script>
    </body>
</php>
