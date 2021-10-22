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
$seccion1 = array("primero"=>"Maravilloso",
                "segundo"=>"Volcán Misti",
                "tercero"=>"Arequipa tiene uno de los destinos más impresionantes para los viajeros más atrevidos: el Misti, un volcán de 5.822 metros, con más de 800 mil años de antigüedad y que se encuentra entre los 16 volcanes activos y potencialmente activos del Perú. Si buscas un plan de máxima aventura, te recomendamos realizar el ascenso al Volcán Misti, una travesía de dos días rodeada de increíbles paisajes, acampando a más de 4.000 metros sobre el nivel del mar y con una llegada a la meta totalmente única: la vista del cráter del Misti.");
$seccion2 = array("primero"=>"Monasterio de",
                "segundo"=>"Santa Catalina",
                "tercero"=>"En pleno centro de la ciudad de Arequipa se encuentra una de las grandes obras arquitectectónicas del Perú colonial. Se trata del Monasterio de Santa Catalina, un convento de clausura construido en el siglo XVI y que cuenta con más de 20 mil metros cuadrados que podrás explorar de punta a punta. Sus coloridas calles, su interesante historia y su asombrosa arquitectura han convertido al Monasterio de Santa Catalina en uno de los principales lugares turísticos de Arequipa.");
$seccion3 = array("primero"=>"Reserva Nacional de",
                "segundo"=>"Salinas y Aguada Blanca",
                "tercero"=>"Entre los grandes lugares naturales para visitar en los alrededores de Arequipa se encuentra la Reserva Nacional de Salinas y Aguada Blanca. Se trata del hogar de los majestuosos volcanes arequipeños que mencionamos anteriormente, de animales típicos del altiplano andino como la llama, la alpaca, la vicuña y el guanaco y de grandes lagunas en las que habitan aves como los flamencos.
                Además, en este lugar se encuentran las Cuevas de Sumbay, donde se conservan más de 500 pinturas de arte rupestre con una antigüedad de entre 6,000 y 8,000 años. Entre los dibujos que aquí podrás observar, se encuentran los típicos camélidos de esta región andina en situación de reposo.");
$seccion4 = array("primero"=>"Mirador de",
                "segundo"=>"Yanahura",
                "tercero"=>"Si eres de esos a los que les gusta tener una vista 360 de la ciudad que visita, tienes que conocer el Mirador de Yanahura. Situado en el pintoresco distrito del mismo nombre, este mirador ofrece una de las vistas más espectaculares de Arequipa, con la ciudad a los pies de sus tres volcanes más representativos: el Misti, el Chachani y el Pichu Pichu. Además, otro de los atractivos de este lugar son sus característicos arcos de sillar blanco, en los que podrás leer frases de personajes ilustres de Perú.");
$seccion5 = array("primero"=>"Bosque de",
                "segundo"=>"Piedras Choqolaqa",
                "tercero"=>"La foto de portada de este artículo y uno de los 10 lugares del Perú que no sabes que existen. El Bosque de Piedras Choqolaqa parece un paisaje de otro planeta, el escenario de una ficción marciana hollywoodense o incluso un cuadro surrealista de Dalí. Se le conoce también como Nueva Arequipa, y es que la leyenda dice que un día sus pobladores dejaron de guardar respeto a sus Apus y como castigo todo se volvió de piedra.");
$seccion6 = array("primero"=>"Ruta del",
                "segundo"=>"Sillar",
                "tercero"=>"Una de las principales características de Arequipa es el blanco de los muros de sus construcciones más importantes. Este color proviene del material con el que están construidos: el sillar, una famosa piedra originaria de los volcanes de la ciudad que ha servido como elemento de construcción durante cientos de años. Si quieres conocer cómo es el proceso de extracción de esta piedra, te recomendamos hacer la Ruta del Sillar, un recorrido por una cantera de las afueras de la ciudad en el que, además, podrás observar el trabajo de labrado, tallado y megatallado.");
$seccion7 = array("primero"=>"Cañón del",
                "segundo"=>"Colca",
                "tercero"=>"Es inevitable: cuando pensamos en lugares turísticos de Arequipa lo primero que se nos viene a la cabeza es el Cañón del Colca. Esta impresionante joya de la naturaleza peruana es el principal atractivo turístico de la región arequipeña, ¡y no es para menos! Con 3.600 metros sobre el nivel del mar, el Colca es uno de los cañones más profundos (además de estrecho) del mundo. En él podrás hacer prácticamente de todo: desde disfrutar del vuelo del cóndor hasta relajarte en sus aguas termales, descubrir el origen de las terrazas preincas o dormir bajo un auténtico manto de estrellas rodeado totalmente por naturaleza.");
$seccion8 = array("primero"=>"Bosque de",
                "segundo"=>"Piedras de Imata y Catarata de Pillones",
                "tercero"=>"El Bosque de Piedras de Imata es un lugar en el que la acción del viento y las lluvias convirtieron a las rocas que aquí se encontraban en esculturas naturales de gran tamaño. Dar un paseo por este lugar es una experiencia totalmente apasionante. Muy cerca se encuentra uno de los lugares turísticos de Arequipa más novedosos y espectaculares: las Cataratas de Pillones, otra gran maravilla de la naturaleza en la que querrás pasarte todo el día tomando fotos y disfrutando de su aire puro y fresco.");
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
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion1["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion1["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/VOLMIS.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion1["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion2["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion2["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/MONASTERIO.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion2["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion3["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion3["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/RESER.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion3["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion4["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion4["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/MIRAR.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion4["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion5["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion5["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/BOSQUE.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion5["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion6["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion6["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/RUTAS.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion6["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion7["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion7["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/CAÑON.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion7["tercero"];?></p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $seccion8["primero"];?></span>
                                <span class="section-heading-lower"><?php echo $seccion8["segundo"];?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/IMATA.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $seccion8["tercero"];?></p></div>
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
