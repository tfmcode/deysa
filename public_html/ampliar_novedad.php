<?php
$opamplia=$_GET['op'];
$noticias = simplexml_load_file("deysa.xml");
foreach($noticias as $noticia)
	{
		if ($noticia->id == $opamplia) {
			$var0 = $noticia->link;
			$var1 = $noticia->foto1;
			$var2 = $noticia->titulo;
			$var3 = $noticia->bajada;
	      $var4 = str_replace('¿','<br>',$noticia->desarrollo);
         $var4 = str_replace('#','<br><br>',$var4);
         $var4 = str_replace('(','<b>',$var4);
         $var4 = str_replace(')','</b>',$var4);
         $var8 = $noticia->dia;
         $var9 = $noticia->mes;
         $var10 = $noticia->año;
         $var11 = $noticia->video;
  	      $titulohtml = $noticia->titulo;
    		$description = $noticia->bajada;
    		$tags = $noticia->tags;
        }
	}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

	<?php
  	  echo "<title>" . $titulohtml . "</title>";
	  echo "<meta content='" . $description . "' name='description'>";
	  echo "<meta content='" . $tags . "' name='keywords'>";
	?>

    <meta name="viewport" content="width=device-width,height=device-height, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="inset/favicon.ico" rel="shortcut icon">

    <!--jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Font Icon -->
    <link href="css/dnngo-font-icon.css" rel="stylesheet" type="text/css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap&subset=latin-ext" rel="stylesheet">

    <!--Vendor css-->
    <link rel="stylesheet" type="text/css" href="vendor/OwlCarousel2/owl.carousel.css"> <!--para novedades-->
    <link href="vendor/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet" type="text/css"> <!--para equipamientos-->

    <!-- Template base -->
    <link href="css/theme.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <link href="css/page-title.css" rel="stylesheet" type="text/css"> <!-- para titulos de interna-->

    <!-- Template component -->
    <link href="css/component/css3-animation.css" rel="stylesheet" type="text/css">
    <link href="css/component/testimonial.css" rel="stylesheet" type="text/css">
    <link href="css/component/carousel.css" rel="stylesheet" type="text/css">
    <link href="css/component/chart.css" rel="stylesheet" type="text/css">
    <link href="css/component/number.css" rel="stylesheet" type="text/css">
    <link href="css/component/imagebox.css" rel="stylesheet" type="text/css">
    <link href="css/component/loaders.css" rel="stylesheet" type="text/css">
    <link href="css/component/flip-box.css" rel="stylesheet" type="text/css">
    <link href="css/blog.css" rel="stylesheet" type="text/css"> <!--para novedades-->

    <!-- Template elements -->
    <link href="css/elements/list.css" rel="stylesheet" type="text/css">
    <link href="css/elements/promo-boxes.css" rel="stylesheet" type="text/css">
    <link href="css/elements/list.css" rel="stylesheet" type="text/css">
    <link href="css/elements/pricing.css" rel="stylesheet" type="text/css">
    <link href="css/elements/icon-box.css" rel="stylesheet" type="text/css">
    <link href="css/elements/button.css" rel="stylesheet" type="text/css">
    <link href="css/elements/form-style.css" rel="stylesheet" type="text/css">
    <link href="css/elements/dropcap.css" rel="stylesheet" type="text/css"> <!--para novedad detallada-->
    <link href="css/elements/blockquotes.css" rel="stylesheet" type="text/css"> <!--para novedad detallada-->

    <!-- Template pages -->
    <link href="css/demos/homepage09.css" rel="stylesheet" type="text/css">

    <!-- Template color -->
    <link href="css/theme-color/orange.css" rel="stylesheet" type="text/css">
</head>

<body>

	<script async data-id="26990" src="https://cdn.widgetwhats.com/script.min.js"></script>

    <!-- Loading -->
    <div class="page-loaders">
            <div class="loaders">
                <div class="loader-inner ball-clip-rotate-pulse loader-accent">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Loading End -->
    <div class="theme-main">
        <div id="wrapper">

           <!-- <div class="contacto">
              <a target="_blank" href="https://wa.me/5491150018539?text=Hola, me%20gustaría%20obtener%20información%20sobre%20sus%20servicios" class="btn wa"><i class="fa fa-whatsapp"></i> <span>whatsapp</span></a>
            </div> -->

            <!-- Header -->
            <header class="header-bg roll-menu" data-top="250">
                <div class="hidden-xs hidden-sm headerBox ">
                    <div class="shade"></div>
                    <div class="container">
                        <div id="megamenuWidthBox"></div>
                        <div class="clearfix">
                            <div class="header-bottom">
                                <div class="header-left">
                                  <div class="logo-main">
                                    <div class="Logobox">
                                        <a title="Logo" href="index.php"><img src="inset/final-logo-web-white.png" srcset="inset/final-logo-web-white-2x.png 2x" alt="Logo" /></a>
                                    </div>
                                    <div class="FixedLogoPane">
                                        <a title="Logo" href="index.php"> <img src="inset/final-logo-web-white.png" srcset="inset/final-logo-web-white-2x.png 2x" alt="Logo" /></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="header-right text-right">
                                    <nav class="nav-box clearfix menu-hover-line menu-not-accent">
                                        <div class="menu-main">
                                            <div id="dng-megamenu">
                                                <ul class="primary-structure">
                                                  <li> <a href="index.php" title="Home"><span>Inicio</span></a></li>
                                                  <li><a href="servicios.html" title="Servicios"><span>Servicios</span></a></li>
                                                  <li><a href="preguntas-frecuentes.html" title="Preguntas Frecuentes"><span>Preguntas Frecuentes</span></a></li>
                                                  <li><a href="equipamientos.html" title="Equipamientos"><span>Equipamientos</span></a></li>
                                                  <li><a href="novedades.php" title="Blog"><span>Blog</span></a></li>
                                                  <li><a href="index.php#contacto" title="Consultanos"><span>Consultanos</span></a></li>
                                                    <li>
                                                      <div class="telefonos">
                                                        <span class="dg-ico size-xs tel-icono"><i class="fa fa-phone"></i></span>
                                                        <div class="telefono-texto">
                                                          <p>011 15 6125-4174</p>
                                                          <p>011 15 5001-8539</p>
                                                        </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
            </header>
            <!-- Header End -->
            <!-- Mobile Header -->
            <div class="visible-xs visible-sm mobile-header">
                <div class="mobile-nav">
                    <div class="container">
                        <div class="clearfix">
                            <div class="mobile-navbox">
                                <div class="mobile-logo-main">
                                    <div class="Logobox">
                                        <a title="Logo" href="index.php"><img src="inset/final-logo-web-2x.png" alt="Logo DEySA" /></a>
                                    </div>
                                </div>
                                <div class="mobile-right-icon"> <span class="fa fa-reorder" id="ico-menu-mobile"></span> </div>
                                <div id="dng-megamenu-mobile" class="mobile-menu "></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- Mobile End -->
            <!-- Page Title -->
            <div class="pagetitleBox pagetitle-layout-center pagetitle-xl pagetitle-images header-novedades">
                <div class="container ">
                    <div class="pagetitle-border">
                        <h1 class="title"><span>&nbsp;</span>NOVEDADES </h1>
                        <h6>SIGUE LAS ÚLTIMAS NOVEDADES EN DEYSA</h6>
                    </div>
                </div>
            </div>
            <!-- Page Title End-->
            <!--Content -->
            <section id="page-content" class="sidebar-right pt-40">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 main-content">
                            <div class="blog-detail">
                               <?php
                               if($var11==0){ 
                               	echo "<div class='detail-images'><img alt='' src='img/" . $var1 . "' class='img-responsive img-novedad-detallada'></div>";
                               }
                               elseif($var11==1){
                               	echo "<div class='list-image'><video src='img/" . $var1 . "' controls width='558' height='394'></video></div>";
                               }	 
                               ?>
                                <!--Detail Title-->
                                <div class="detail-title-info">
                                    <?php echo "<div class='detail-date'><span class='day'>" . $var8 . "</span><span class='month'>" . $var9 . "/" . $var10 . "</span></div>"; ?>
                                    <div class="ver-mid">
                                        <?php echo "<h2 class='detail-title'>" . $var2 . "</h2>"; ?>
                                    </div>
                                </div>
                                <!--Detail Title End-->
                                <!--Detail Description-->
                                <div class="detail-description">
                                    <?php echo "<p class='fs-18'>" . $var3 . "</p>"; ?>
                                    <blockquote class="dg-blockquote left-border ml-30 border-accent">
		                                <p class="mb-10">“Somos especialistas en la desobstrucción y el mantenimiento integral de cañerías y sistemas de desagües para empresas, comercios e industrias“</p>
		                                <footer><cite class="mr-5">DEYSA. Desobstrucción y Saneamiento</cite></footer>
		                            </blockquote>
                                    <!-- <h4 class="mt-20 mb-20 bold">How to make full use of your website?</h4> -->
                                    <?php echo "<p>" . $var4 . "</p>"; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!--Content End-->
          <!-- Footer -->
          <footer class="footer-box footer-04">
              <div class="footer-top text-center pt-60">
                  <div class="container clearfix">
                      <!-- Logo -->
                      <div class="logo">
                          <a title="Logo" href="#"><img src="inset/final-logo-web-white.png" srcset="inset/final-logo-web-white-2x.png 2x" alt="Logo" /></a>
                      </div>
                      <!-- Logo End -->
                      <!-- Menu -->
                      <ul class="footer-menu">
                          <li><a href="index.php" title="Home">Inicio</a></li>
                          <li><a href="servicios.html" title="Servicios">Servicios</a></li>
                          <li><a href="preguntas-frecuentes.html" title="Preguntas Frecuentes">Preguntas Frecuentes</a></li>
                          <li><a href="equipamientos.html" title="Equipamientos">Equipamientos</a></li>
                          <li><a href="novedades.php" title="Novedades">Novedades</a></li>
                      </ul>
                      <!-- Menu End -->
                  </div>
              </div>
              <div class="footer-bottom">
                  <!-- Copyright -->
                  <div class="container clearfix"><a href="#" title="Políticas de privacidad">Políticas de privacidad</a><span class="sep">|</span><a href="#" title="Términos y Condiciones">Términos y Condiciones</a>
                  </div>
                  <!-- Copyright End -->
              </div>
          </footer>
          <!-- Footer End -->
            <div id="to-top" class="backtop01"><span></span></div>
        </div>
    </div>

    <!-- Vendor script -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/OwlCarousel2/owl.carousel.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme-functions.js"></script>

    <!-- Custom js file -->
    <script src="js/custom.js"></script>

</body>

</html>