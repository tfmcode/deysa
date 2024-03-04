<?php require_once "recaptchalib.php"; 
$secret = "6LeFEXMUAAAAAPhoTbJkf1guhLIR7gjAvq4cC8nv";
$response = null;
$reCaptcha = new ReCaptcha($secret);
echo "<script src='https://www.google.com/recaptcha/api.js' async defer ></script>";
// $_opcion=$_GET['op'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="inset/favicon.ico" rel="shortcut icon">
    <title>DEYSA - Soluciones para empresas</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">  

    <!-- Font Icon -->
    <link href="css/dnngo-font-icon.css" rel="stylesheet" type="text/css">  

    <!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap&subset=latin-ext" rel="stylesheet">

    <!-- Template base -->
    <link href="css/theme.css" rel="stylesheet" type="text/css"> 
    <link href="css/header.css" rel="stylesheet" type="text/css">  
    <link href="css/footer.css" rel="stylesheet" type="text/css"> 

    <!-- Template component -->
    <link href="css/component/css3-animation.css" rel="stylesheet" type="text/css">
    <link href="css/component/testimonial.css" rel="stylesheet" type="text/css">
    <link href="css/component/carousel.css" rel="stylesheet" type="text/css">
    <link href="css/component/chart.css" rel="stylesheet" type="text/css">
    <link href="css/component/number.css" rel="stylesheet" type="text/css">
    <link href="css/component/imagebox.css" rel="stylesheet" type="text/css">
    <link href="css/component/loaders.css" rel="stylesheet" type="text/css">
    <link href="css/component/flip-box.css" rel="stylesheet" type="text/css">

    <!-- Template elements -->
    <link href="css/elements/list.css" rel="stylesheet" type="text/css">
    <link href="css/elements/promo-boxes.css" rel="stylesheet" type="text/css">
    <link href="css/elements/list.css" rel="stylesheet" type="text/css">
    <link href="css/elements/icon-box.css" rel="stylesheet" type="text/css">
    <link href="css/elements/button.css" rel="stylesheet" type="text/css">
    <link href="css/elements/form-style.css" rel="stylesheet" type="text/css">

    <!-- Template pages -->
    <link href="css/demos/homepage09.css" rel="stylesheet" type="text/css">

    <!-- Template color -->
    <link href="css/theme-color/orange.css" rel="stylesheet" type="text/css">
    


<style>
      select {
         width: 100%;
         padding: 10px 15px;
         border: 1px solid white;
         border-radius: 4px;
         background-color: #798b95;
      }
      </style>
    
<style>
.btn-whatsapp {
        display:block;
        width:150px;
        height:85px;
        position: fixed;
        right:45px;
        bottom:35px;
        z-index:999;
}
.btn-emergencias {
        display:block;
        width:150px;
        height:72px;
        position: fixed;
        right:215px;
        bottom:35px;
        z-index:999;
}
.btn-emergencias a:link, .btn-emergencias a:visited{
        display:block;
        color:#fff;
		padding: 5px 15px;
		background-image: linear-gradient(to bottom, #ff0000 , #c10000);
	border: 1px solid #c10000;
        border-radius:5px;
        line-height:17px;
        text-align:center;
	text-transform: uppercase;
	font-weight: bold;
	box-shadow: 2px 2px 5px rgb(0,0,0,0.75);
	text-shadow: 2px 2px 5px rgb(0,0,0,0.75);
}
.btn-emergencias a:hover {
		background-image: linear-gradient(to top, #ff0000 , #c10000);
	text-decoration: none;
	margin-top:3px;
}

</style>    
    

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123982280-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123982280-3');
</script>


<!-- Hotjar Tracking Code for https://www.deysa.com.ar -->
<!-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1726367,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> -->

    <!--jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>  


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2GNXKT');</script>
<!-- End Google Tag Manager -->


</head>

<?php 

if(isset($_POST['g-recaptcha-response']) )
  {
        $secret = "6LeFEXMUAAAAAPhoTbJkf1guhLIR7gjAvq4cC8nv";
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
      if($responseData->success)
        {
		    
	   	$_nombre=$_POST['nombre'];
   	 	$_email=$_POST['email'];
    		$_telefono=$_POST['telefono'];
    		$_empresa=$_POST['empresa'];
    		$_asunto="NUEVA CONSULTA desde Deysa.com.ar";
    		$_consulta=$_POST['consulta'];
			$_aplicacion=$_POST['aplicacion'];      
      
		   $from = "info@deysa.com.ar";
    		$to = "cjgorgoretti@gmail.com";
    		$tocliente = "info@deysa.com.ar";
    		$subject = $_asunto;
    		$message = 'Tipo de Consulta: ' . $_aplicacion . '<br>================================================<br><b>CONSULTA</b><br>================================================<br><b>Nombre: </b>'.$_nombre.'<br><br><b>Email: </b>'.$_email.'<br><br><b>Teléfono: </b>'.$_telefono. '<br><br><b>Consulta: </b>'.$_consulta.'<br><br><b>Empresa: </b>'.$_empresa.'<br>================================================<br>Enviado desde www.deysa.com.ar<br><br><br><br>';
    		$headers = "MIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\nFrom: $from\r\nReply-to: $_email";
         
	  
	  
      if (mail($to,$subject,$message, $headers)) {
        echo'<script type="text/javascript">
        alert("Tu Consulta será respondida a la brevedad. Gracias!");
             window.location.href="index.php";
           </script>';  
      }
      
      mail($tocliente,$subject,$message, $headers);
      
    
		} else
        {
            echo'<script type="text/javascript">
            alert("Algo Falló! No sos un Robot verdad? Completá los campos del Formulario nuevamente [TODOS]. Gracias!!");
            window.location.href="index.php";
           </script>';
        }
}
   
?>    





<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2GNXKT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    
<div class="btn-whatsapp">
<a href="https://wa.me/5491161254174?text=Hola, me%20gustaría%20obtener%20información%20sobre%20sus%20servicios" target="_blank">
<img src="img/btn_whatsapp.png" alt="">
</a>
</div>

<!-- boton emergencias -->
<div class="btn-emergencias">
	<a href="https://wa.me/5491150018539?text=Hola, tengo una emergencia y requiero de sus servicios." target="_blank">
		Destapaciones de Urgencia
	</a>
</div>
    

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
                                                    <li class="current"> <a href="index.php" title="Home"><span>Inicio</span></a></li>
                                                    <li><a href="servicios.html" title="Servicios"><span>Servicios</span></a></li>
                                                    <!-- <li><a href="productos.html" title="Productos"><span>Productos</span></a></li> -->
                                                    <li><a href="preguntas-frecuentes.html" title="Preguntas Frecuentes"><span>Preguntas Frecuentes</span></a></li>
                                                    <li><a href="equipamientos.html" title="Equipamientos"><span>Equipamientos</span></a></li>
                                                    <li><a href="novedades.php" title="Blog"><span>Blog</span></a></li>
                                                    <li><a href="index.php#contacto" title="Consultanos"><span>Consultanos</span></a></li>
                                                    <li><a href="index.php" title="Consultanos"><span>11-6125-4174 / 11-5001-8539</span></a></li>
                                                    <!-- <li>
                                                      <div class="telefonos">
                                                        <span class="dg-ico size-xs tel-icono"><i class="fa fa-phone"></i></span>
                                                        <div class="telefono-texto">
                                                          <p>011 15 6125-4174</p>
                                                          <p>011 15 5001-8539</p>
                                                        </div>
                                                      </div>
                                                    </li> -->
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
        <!--SLIDER PARA DESKTOP/NOTEBOOK -->    
        <div id="carousel-1" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
           </ol>

           <div class="carousel-inner">
                <div class="item active">
                  <div class="home09-bg02 pb-40">
                      <div class="container pt-10 pb-10">
                          <div class="row">
                            <div class="col-sm-12 animation delay1 bounceInLeft">
                              <div class="pt-60 pl-30">
                                <h3>Bienvenidos a DEYSA</h3>
                                <p class="pb-10">Somos especialistas en la desobstrucción y el mantenimiento<br /> integral de cañerías y sistemas de desagües para<br /> empresas, comercios e industrias</p>
                                <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                              </div>
                              <img id="mr-destapador-1" src="img/home-principal-invertido-slider.png" alt="Bienvenidos a DEYSA" />
                             </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="home09-bg02 pb-40">
                      <div class="container pt-10 pb-10">
                          <div class="row">
                            <div class="col-sm-12 animation delay1 bounceInLeft">
                              <div class="pt-60 pl-30">
                                <h3>Respuesta inmediata</h3>
                                <p class="pb-10">Ofrecemos resultados a medida,<br /> de forma rápida, segura y efectiva.</p>
                                <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                              </div>
                              <img id="mr-destapador-1" src="img/home-mantenimiento-saneamiento-slider.png" alt="Somos Deysa" />
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="home09-bg02 pb-40">
                      <div class="container pt-10 pb-10">
                          <div class="row">
                            <div class="col-sm-12 animation delay1 bounceInLeft">
                              <div class="pt-60 pl-30">
                                <h3>Garantía de confianza</h3>
                                <p class="pb-10">Nos avalan más de 30 años de experiencia<br /> junto a los mejores profesionales del mercado.</p>
                                <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                              </div>
                              <img id="mr-destapador-1" src="img/home-cambio-reparacion-slider.png" alt="Somos Deysa" />
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="item">
                  <div class="home09-bg02 pb-40">
                      <div class="container pt-10 pb-10">
                          <div class="row">
                            <div class="col-sm-12 animation delay1 bounceInLeft">
                              <div class="pt-60 pl-30">
                                <h3>Compromiso ecológico</h3>
                                <p class="pb-10">Apoyamos el desarrollo sustentable de las empresas<br /> con la gestión ambiental de sus residuos</p>
                                <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                              </div>
                              <img id="mr-destapador-1" src="img/home-transporte-disposicion-slider.png" alt="Somos Deysa" />
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
           </div>
           <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
           </a>
           <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
           </a>
        </div>

        <!--SLIDER PARA TABLETS Y MOVILES -->
        <div id="carousel-2" class="carousel slide hidden-md hidden-lg hidden-xl" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
           </ol>

           <div class="carousel-inner">
                <div class="item active">
                  <div class="home09-bg-mobile pb-40">
                    <div class="container pt-10 pb-40">
                      <div class="row animation delay1 bounceInLeft">
                        <div class="col-sm-12 text-center">
                            <img id="mr-destapador-mobile" src="img/home-principal-invertido-slider.png" alt="Bienvenidos a DEYSA" />
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="pt-40">
                              <h3>Bienvenidos a DEYSA</h3>
                              <p class="pb-10">Somos especialistas en la desobstrucción y el mantenimiento integral de cañerías y sistemas de desagües para empresas, comercios e industrias</p>
                              <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="home09-bg-mobile pb-40">
                    <div class="container pt-10 pb-40">
                      <div class="row animation delay1 bounceInLeft">
                        <div class="col-sm-12 text-center">
                            <img id="mr-destapador-mobile" src="img/home-mantenimiento-saneamiento-slider.png" alt="Bienvenidos a DEYSA" />
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="pt-40">
                              <h3>Respuesta Inmediata</h3>
                              <p class="pb-10">Ofrecemos resultados a medida, de forma rápida, segura y efectiva.</p>
                              <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="home09-bg-mobile pb-40">
                    <div class="container pt-10 pb-40">
                      <div class="row animation delay1 bounceInLeft">
                        <div class="col-sm-12 text-center">
                            <img id="mr-destapador-mobile" src="img/home-cambio-reparacion-slider.png" alt="Bienvenidos a DEYSA" />
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="pt-40">
                              <h3>Garantía de confianza</h3>
                              <p class="pb-10">Nos avalan más de 30 años de experiencia junto a los mejores profesionales del mercado.</p>
                              <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="home09-bg-mobile pb-40">
                    <div class="container pt-10 pb-40">
                      <div class="row animation delay1 bounceInLeft">
                        <div class="col-sm-12 text-center">
                            <img id="mr-destapador-mobile" src="img/home-transporte-disposicion-slider.png" alt="Bienvenidos a DEYSA" />
                        </div>
                        <div class="col-sm-12 text-center">
                            <div class="pt-40">
                              <h3>Compromiso ecológico</h3>
                              <p class="pb-10">Apoyamos el desarrollo sustentable de las empresas con la gestión ambiental de sus residuos</p>
                              <p class="mt-10"><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent bg-orange color-black">conocenos</a></p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           </div>
           <a class="left carousel-control" href="#carousel-2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
           </a>
           <a class="right carousel-control" href="#carousel-2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
           </a>
        </div>

            <!--Content -->
            <section id="page-content">
              <!-- Upgrade On A Regular Basis -->
              <div class="home09-01 fluid-container pt-20">
                  <div class="row col-vertical-center animation delay3 zoomIn">
                      <div class="col-md-4 col-sm-4 col-lg-4 pr-20" id="celu"><img alt="Photo" src="img/iphone2.png" class="img-responsive"></div>
                      <div class="col-md-8 col-lg-8 col-sm-8 pt-20 pl-40">
                          <div class="col-md-12 col-lg-12 pb-20 text-center">
                            <h1 class="dg-title37">Pedí tu diagnóstico online o presencial, <br /> sin costo y en menos de 24hs</h1>
                            <h3 class="pb-20">Completá tus datos y uno de nuestros representantes<br /> se pondrá en contacto para una mejor atención</h3>
                            <p><a href="index.php#contacto" class="dg-btn-1 radius-3px btn-accent">COTIZAR AHORA</a></p>
                          </div>
                      </div>
                  </div>
              </div>
                
              <div class="home09-01 container mt-40 mb-60">
                  <div class="row col-vertical-bottom">
                      <div class="col-sm-2 animation delay1 fadeInLeftBig"><img style="padding-left:120px" alt="Canal en Youtube" src="img/youtube.png" class="img-responsive"></div>
                      <div class="col-sm-10">
                          <h3 style="padding-left:30px" class="dg-title animation delay1 fadeInLeft">Visitá nuestro Canal en Youtube | <big style="padding-left:5px" class="animation delay1 fadeInRight"><a href="https://www.youtube.com/channel/UCgVOmjTin5MVOvWJQycv-AA?view_as=subscriber" target="_blank">Click acá para Suscribirse al Canal</a></big></h3>
                          
                      </div>
                  </div>
              </div>
                
                
              <!-- Upgrade On A Regular Basis End -->
              <!-- Full Area -->
              <ul class="home09-list color-white animation delay3 fadeIn">
                  <li>
                    <div class="flip-box flip-box06">
                      <div class="rotate">
                          <div class="front">
                              <div class="pic"><img src="img/home-mantenimiento-saneamiento-master.png" Alt="Mantenimiento integral y Saneamiento de Cañerías" /></div>
                          </div>
                          <div class="back">
                              <div class="center">
                                  <div class="pic"><img src="img/home-mantenimiento-saneamiento-hover.png" Alt="Desobstrucción y Limpieza en Cañerías de Desagües" /></div>
                                  <div class="datos text-left">
                                    <h4 class="dg-title18">Desobstrucción y Limpieza en Cañerías de Desagües</h4>
                                    <p class="mt-20"><a href="servicios.html#desobstruccion-limpieza" title="" class="dg-btn-1 radius-3px btn-accent">Conozca más</a></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
                  
                  <li>
                    <div class="flip-box flip-box06">
                      <div class="rotate">
                          <div class="front">
                              <div class="pic"><img src="img/home-construccion-refaccion-master.png" Alt="Servicios de Mantenimiento y Construcción" /></div>
                          </div>
                          <div class="back">
                            <div class="center">
                                <div class="pic"><img src="img/home-construccion-refaccion-hover.png" Alt="Servicios de Mantenimiento y Construcción" /></div>
                                <div class="datos text-left">
                                  <h4 class="dg-title18">Servicios de Mantenimiento y Construcción</h4>
                                  <p class="mt-20"><a href="servicios.html#mantenimiento-construccion" title="" class="dg-btn-1 radius-3px btn-accent">Conozca más</a></p>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="flip-box flip-box06">
                      <div class="rotate">
                          <div class="front">
                              <div class="pic"><img src="img/home-transporte-disposicion-master.png" Alt="Transporte y Disposición Final de Residuos" /></div>
                          </div>
                          <div class="back">
                            <div class="center">
                                <div class="pic"><img src="img/home-transporte-disposicion-hover.png" Alt="Transporte y Disposición Final de Residuos" /></div>
                                <div class="datos text-left">
                                  <h4 class="dg-title18">Transporte y Disposición Final de Residuos</h4>
                                  <p class="mt-20"><a href="servicios.html#transporte-disposicion" title="Contáctenos" class="dg-btn-1 radius-3px btn-accent">Conozca más</a></p>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="flip-box flip-box06">
                      <div class="rotate">
                          <div class="front">
                              <div class="pic"><img src="img/home-mantenimiento-tanques-master.png" Alt="Limpieza y Mantenimiento Integral de Tanques de Agua" /></div>
                          </div>
                          <div class="back">
                            <div class="center">
                                <div class="pic"><img src="img/home-mantenimiento-tanques-hover.png" Alt="Limpieza y Mantenimiento Integral de Tanques de Agua" /></div>
                                <div class="datos text-left">
                                  <h4 class="dg-title18">Limpieza y Mantenimiento Integral de Tanques de Agua</h4>
                                  <p class="mt-20"><a href="servicios.html#mantenimiento-tanques" title="" class="dg-btn-1 radius-3px btn-accent">Conozca más</a></p>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </li>
                  
                  <li>
                    <div class="flip-box flip-box06">
                      <div class="rotate">
                          <div class="front">
                              <div class="pic"><img src="img/home-cambio-reparacion-master.png" Alt="Instalación y Saneamiento de Cañerías" /></div>
                          </div>
                          <div class="back">
                            <div class="center">
                                <div class="pic"><img src="img/home-cambio-reparacion-hover.png" Alt="Instalación y Saneamiento de Cañerías" /></div>
                                <div class="datos text-left">
                                  <h4 class="dg-title18">Instalación y Saneamiento de Cañerías</h4>
                                  <p class="mt-20"><a href="servicios.html#instalacion-saneamiento" title="" class="dg-btn-1 radius-3px btn-accent">Conozca más</a></p>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="flip-box flip-box06">
                      <div class="rotate">
                          <div class="front">
                              <div class="pic"><img src="img/home-principal-master.png" Alt="Todos los Servicios" /></div>
                          </div>
                          <div class="back">
                            <div class="center">
                                <div class="pic"><img src="img/home-principal-hover.png" Alt="Todos los Servicios" /></div>
                                <div class="datos text-left">
                                  <h4 class="dg-title18">Todos los Servicios</h4>
                                  <p class="mt-20"><a href="servicios.html" title="Conozca más" class="dg-btn-1 radius-3px btn-accent">Conozca más</a></p>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </li>
              </ul>
              <!-- Full Area End -->
                

                
    <!-- ======= COMIENZO Galeria de Fotos ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
            <iframe src="https://www.adway.com.ar/galeria-deysa" width="100%" height="500" style='border:0px;' frameborder="0" scrolling='no'></iframe>
        </div>
      </div>
    </section>
    <!-- Galeria de Fotos FIN -->
                
                
                
                
                
              <!-- COMIENZO Clientes -->                
              <div class="home09-01 fluid-container pt-20">
                  <div class="row">
                    <div class="col-12 pt-20">
                        <h3 class="dg-title37 text-center">Clientes que nos eligen</h3>
                        <ul class="clients pt-40 pb-40">
                            <li class="animation flip">
                                <a title="Kansas Grill&Bar" href="#"><img alt="Kansas Grill&Bar" class="img-responsive pb-10 pl-5 pr-5" src="img/1.png"></a>
                            </li>
                            <li class="animation flip">
                                <a title="Sancor" href="#"><img alt="Sancor" class="img-responsive pb-10 pl-5 pr-5" src="img/2.png"></a>
                            </li>
                            <li class="animation flip">
                                <a title="Nestlé" href="#"><img alt="Nestlé" class="img-responsive pb-10 pl-5 pr-5" src="img/3.png"></a>
                            </li>
                            <li class="animation flip">
                                <a title="McDonald's" href="#"><img alt="McDonald's" class="img-responsive pb-10 pl-5 pr-5" src="img/4.png"></a>
                            </li>
                            <li class="animation flip">
                                <a title="Burger King" href="#"><img alt="Burger King" class="img-responsive pb-10 pl-5 pr-5" src="img/5.png"></a>
                            </li>
                            <li class="animation flip">
                                <a title="Wendy's" href="#"><img alt="Wendy's" class="img-responsive pb-10 pl-5 pr-5" src="img/6.png"></a>
                            </li>
                            <li class="animation flip">
                                <a title="Eternit" href="#"><img alt="Eternit" class="img-responsive pb-10 pl-5 pr-5" src="img/7.jpg"></a>
                            </li>
                            <li class="animation flip">
                                <a title="Vital Supermayorista" href="#"><img alt="Vital Supermayorista" class="img-responsive pb-10 pl-5 pr-5" src="img/8.jpg"></a>
                            </li>
                        </ul>
                    </div>
                  </div>
                </div>
              <!-- Clientes FIN -->
                
                
            <!-- Promo Boxes -->
              <a name="contacto"></a>
              <div class="home09-bg06 mt-60 color-white">
                  <div class="fluid-container pt-60 pb-60">
                      <h1 class="mb-30 text-center">¿Cuál es tu Consulta? ¡Respondemos de Inmediato!</h1>
                      <form action="index.php" method="post" role="form">
                          <ul class="dg-form-content08">
                              <li>
                                  <div class="form-row">
                                      <input id="nombre" type="text" name="nombre" class="flvname" placeholder="Tu Nombre...">
                                  </div>
                              </li>
                              <li>
                                  <div class="form-row">
                                      <input id="empresa" type="text" name="empresa" class="flvname" placeholder="Tu Empresa...">
                                  </div>
                              </li>
                              <li>
                                  <div class="form-row">
                                      <input id="telefono" type="text" name="telefono" class="flvname" placeholder="Tu Teléfono...">
                                  </div>
                              </li>
                          </ul>
                          <ul class="dg-form-content08">
                              <li>
                                  <div class="form-row">
                                      <input id="email" type="text" name="email" class="flvname" placeholder="Tu Email...">
                                  </div>
                              </li>
                              <li>
                                  <div class="form-row">
                                 <select name="aplicacion" class="flvname">
												<option value="Diagnostico_Gratis">Diagnóstico Gratis</option>
                  						<option value="Solicita_Informacion">Solicitud de Información</option>
		                  				<option value="Pedido_de_Cotizacion">Pedido de Cotización</option>
			            		     </select>						

                                  </div>
                              </li>
                              <li>
                                  <div class="form-row">
                                      <input id="consulta" type="text" name="consulta" class="flvname" placeholder="Tu Consulta...">
                                  </div>
                              </li>
                          </ul>
									<ul class="dg-form-content08">
										<li>                              
                              	<div class="g-recaptcha" data-sitekey="6LeFEXMUAAAAAJgTs9f2s8pVESlP7SSPayS6Nvsj"></div>
										</li>                              	
                          </ul>
                          <ul class="dg-form-content08">
										<li>
                                  <input type="submit" name="submit" title="ENVIAR CONSULTA" value="ENVIAR CONSULTA" class="btn dg-btn-1 btn-orange color-white">
                              </li>
									</ul>									
                      </form>
                  </div>
              </div>
              <!-- Promo Boxes End -->
              <div class="home09-01 container mt-40 mb-60">
                  <div class="row col-vertical-bottom">
                      <div class="col-sm-2 animation delay1 fadeInLeftBig"><img alt="Ilustracion" src="img/detalle.png" class="img-responsive"></div>
                      <div class="col-sm-10">
                          <h3 class="dg-title animation delay1 fadeInLeft">Contamos con un sistema altamente eficaz</h3>
                          <big class="animation delay1 fadeInRight">¡Compruébelo por usted mismo! Póngase en contacto con nosotros. Cuéntenos las dificultades<br/> que se le presentan en sus cañerías, con gusto le brindaremos una solución posible.</big>
                      </div>
                  </div>
              </div>
          </section>
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
                  <div class="container clearfix"><a href="#" title="Políticas de privacidad">Políticas de privacidad</a><span class="sep">|</span><a href="#" title="Términos y Condiciones">Términos y Condiciones</a><span class="sep">|</span>Todos los Derechos Reservados
                  </div>
                  <!-- Copyright End -->
              </div>
          </footer>
          <!-- Footer End -->

          <div id="to-top" class="backtop01"><span></span></div>

        </div>

        <!--bootstrap-->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="js/theme-functions.js"></script>

        <!-- Custom js file -->
        <script src="js/custom.js"></script>



<!-- <script type="text/javascript">
    window._mfq = window._mfq || [];
    (function() {
        var mf = document.createElement("script");
        mf.type = "text/javascript"; mf.defer = true;
        mf.src = "//cdn.mouseflow.com/projects/2ee32c46-2f74-4f5b-a56d-fc167f4f26c5.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
    })();
</script> -->

</body>

</html>