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
$seccion1 = array("primero"=>"Datos Curiosos","segundo"=>"AREQUIPA","tercero"=>"Arequipa es una ciudad peruana, capital de la provincia y del departamento homónimos. Su área metropolitana la conforman veintiún distritos conurbados, incluyendo al distrito de Arequipa, lugar fundacional, histórico y sede del gobierno de la ciudad.");
//FOOTER
$copyright = array("Copyright","Your Website 2021");
$scripts = (object)["src1"=>"https://use.fontawesome.com/releases/v5.15.3/js/all.js", 
                    "src2"=>"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js", "src3"=>"js/scripts.js"]; 
$parrafos = array("p1"=>"<p>1. Cuenta con su propia moneda: El Characato de Oro</p>
                        <p>¡Así es! Los arequipeños cuentas con su propia moneda a la cual, durante una época, se se la llamó 'El Characato de Oro'. Asimismo, esto dio pie a la creación de su propio pasaporte durante el siglo pasado.</p>",
                "p2"=>"<p>2. La primera Miss Mundo de Perú fue arequipeña</p>
                <p>La primera Miss Mundo que tuvo nuestro bello país se llamó Madeleine Hartog Bell. Ella nació en Camana (Arequipa) y fue coronada el 12 de junio de 1946 y a los 21 años.</p>",
                "p3"=>"<p>3. El creador del libro 'Coquito'</p>
                <p>Everardo Zapata Santilla, un educador peruano autor de Coquito, nació en Arequipa. Este libro es sumamente famoso en el Perú y tuvo como objetivo la enseñanza de lectura y escritura durante la educación primaria.</p>",
                "p4"=>"<p>4. 'La Ciudad Blanca'</p>
                <p>Desde hace ya muchos años, Arequipa es conocida como la 'Ciudad Blanca'. Esto se debe a su gran cantidad de construcciones hechas con sillar, una piedra volcánica color blanco.</p>",
                "p5"=>"<p>5. Arequipa está rodeada de cuatro volcanes</p>
                <p>Una característica poco convencional y muy impactante de esta tierra es que se encuentra rodeada de 4 volcanes: Ampato (6,288 metros sobre el nivel del mar), Chachani (6, 075 metros sobre el nivel del mar), Misti (5,825 metros sobre el nivel del mar),  y Pichu Pichu (5,644  metros sobre el nivel del mar).</p>");
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
        <!-- Core thpe CSS (includes Bootstrap)-->
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
                        <li class="nav-itp px-lg-4"><a class="nav-link text-uppercase" href="index.php"><?php echo $navegador["btnInicio"];?></a></li>
                        <li class="nav-itp px-lg-4"><a class="nav-link text-uppercase" href="about.php"><?php echo $navegador["btnInformacion"];?></a></li>
                        <li class="nav-itp px-lg-4"><a class="nav-link text-uppercase" href="products.php"><?php echo $navegador["btnLugares"];?></a></li>
                        <li class="nav-itp px-lg-4"><a class="nav-link text-uppercase" href="store.php"><?php echo $navegador["btnTienda"];?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/AQP2.png" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper"><?php echo $seccion1["primero"];?></span>
                                    <span class="section-heading-lower"><?php echo $seccion1["segundo"];?></span>
                                </h2>
                                <?php echo $parrafos["p1"]?>
                                <?php echo $parrafos["p2"]?>
                                <?php echo $parrafos["p3"]?>
                                <?php echo $parrafos["p4"]?>
                                <?php echo $parrafos["p5"]?>
                            </div>
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
        <!-- Core thpe JS-->
        <script src=<?php echo $scripts->src3;?>></script>
    </body>
</php>
