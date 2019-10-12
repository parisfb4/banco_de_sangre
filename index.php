<?php
$sitename = "Leones por la sangre";
$pagename = "Banco de Sangre";
$siteurl = "https://bnetservice.com.mx/bancodesangre";

?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <title><?php echo $sitename; ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $sitename; ?>">
	<meta name="keywords" content="<?php echo $sitename; ?>, Colecta Nacional, donaciones, Mexico">
	<meta name="author" content="<?php echo $sitename; ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/css/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/css/font-awesome.min.css">
    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/css/elegant-fonts.css">
    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/css/themify-icons.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/css/swiper.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $siteurl; ?>/style.css">
	<link rel="shortcut icon" href="<?php echo $siteurl; ?>/favicon.png">
    
</head>
<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            CONTACTO:  <a href="<?php echo $siteurl; ?>/contacto/" target="_top">Click aqu&iacute;</a>
                        </div>
						
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="http://www.paypal.me/barcewin" target="_blank">DONA AHORA</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="inicio.html" rel="home"><img class="d-block" src="images\logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="inicio.html">Inicio</a></li>
                                <li><a href="acerca.html">Adrian</a></li>
								<li><a href="">Ivan</a></li>
								<li><a href="parisfb.html">Paris</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper" .="">
            <div class="swiper-slide hero-content-wrap">
                <img src="images\SLIDE1.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Trabajamos por M&eacute;xico</h1>
                                    <h4>Salvando vidas</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Con&eacute;ctate con <?php echo $sitename; ?> y <br>sigue salvando vidas</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="http://www.paypal.me/barcewin" target="_blank" class="btn gradient-bg mr-2">DONA AQU&Iacute;</a>
                                    <a href="#" class="btn orange-border">Usuarios registrados</a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide hero-content-wrap">
                <img src="images\SLIDE3.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>¡&Uacute;nete!</h1>
                                    <h4>Voluntariado</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Ac&eacute;rcate a tu delegaci&oacute;n <?php echo $sitename; ?><br>Todo M&eacute;xico necesita de t&iacute;</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="http://www.paypal.me/barcewin" target="_blank" class="btn gradient-bg mr-2">DONA AQU&Iacute;</a>
                                    <a href="#voluntariado" class="btn orange-border">Conoce m&aacute;s</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
            
            
            
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->
    

<!-- Swiper JS -->
  <script src="js\swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
   var mySwiper = new Swiper('.swiper-container', {
  autoplay: {
    delay: 5000,
  },
});
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
        
        
        
        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewbox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg></span>
        </div>
        
       
        
        
    </div><!-- .hero-slider -->
    
    
    
    <div class="home-page-limestone">
        <div class="container">
            <div class="row align-items-end">
                <div class="coL-12 col-lg-6">
                    <div class="section-heading">
                        <h2 class="entry-title"><?php echo $sitename; ?> te invita a conocer y participar en nuestra labor humanitaria.</h2>

                        <p class="mt-5">Todas tus aportaciones se traducen en vidas salvadas y asistencia humanitaria. Como nosotros, tú puedes ayudar cuando más se necesita.<br>*.- Datos a nivel nacional, consulta más <a href="images\LOGROS 2018.pdf" target="_blank"><font color="red">Aqu&iacute;.</font></a></p>
                    </div><!-- .section-heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="milestones d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
 <img src="images\dove.png" alt="">                               </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="5748983" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">SERVICIOS M&Eacute;DICOS GRATUITOS*</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    
                                   
                                    <img src="images\donation.png" alt="">   
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="1395414" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">SERVICIOS DE BRIGADA*</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    
                                                        <img src="images\teamwork.png" alt="">

                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="46323" data-speed="2000"></div> 
                                </div>

                                <h3 class="entry-title">VOLUNTARIOS ACTIVOS*</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div><!-- .milestones -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes counter -->


  

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Bienvenido a <?php echo $sitename; ?></h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content2 mt-5">
                            
                            
                            <p>
                                Todos los días la <?php echo $sitename; ?> es protagonista de una historia en la que la vida triunfa.    <br>

Somos parte de un gran movimiento humanitario global, cuyo corazón y motor es la pasión por servir a los demás.    <br>

La historia de la Cruz Roja está hecha de muchas historias de personas que, en las situaciones más extremas y dolorosas, salvan vidas - y con ello - nos recuerdan que lo mejor del ser humano brilla aún en los tiempos más obscuros.
                                
                                    <br>
                                La <?php echo $sitename; ?> existe porque todos podemos ser héroes. Tú puedes serlo al donar y apoyar esta gran causa humanitaria. 
                                <br>
                                Lo somos al apoyar a los Voluntarios en situaciones de desastres naturales, lo somos cuando no miramos a otro lado frente a la tragedia y llamamos a la Cruz Roja.
<br>
Aquí encontrarás muchas maneras de sumarte a la gran causa humanitaria de la <?php echo $sitename; ?>.
<br>

Puedes comenzar ahora mismo donando y haciendo de esa donación una buena costumbre y promoviendo en tus redes sociales más donaciones. ¡Es muy fácil!
<br>

Puedes convertir la responsabilidad social de tu empresa en impacto humanitario apoyando a la Cruz Roja.
<br>

Y puedes ser el héroe que alguien necesita, uniéndote como Voluntario, formándote como paramédico. ¡Únete! Las personas como tú salvan al mundo, una vida a la vez.
                   <br>             Bienvenido a la gran causa humanitaria de la <?php echo $sitename; ?>, gracias por compartir nuestra pasión por servir.




</p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                              <a href="acerca.html" class="btn orange-border"><font color="white">Conoce M&aacute;s</font>

 </a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="images\principios.png" alt="Bienvenido">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    
    <!-- .home-page-icon-boxes -->
      <div class="home-page-icon-boxes">
        <div class="container">
                        <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                      
                        <header class="entry-header">
                            <h2 class="entry-title">M&aacute;s formas de ayudar</h2>
                            
                        </header><!-- .entry-header -->

                   
                    </div><!-- .welcome-content -->
                </div><!-- .col -->
            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box active">
                        <figure class="d-flex justify-content-center">
                    
                              <img src="images\charity-gray.png" alt="">
                            <img src="images\charity-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title"> <a href="donaciones.html"><font color="black">DONACIONES</font>
</a></h3>
                        </header>

                        <div class="entry-content">
                            <p>Desde insumos hasta recursos financieros, t&uacute; puedes aportar para salvar una vida. Conoce cómo aqu&iacute;. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            
                            <img src="images\hands-gray.png" alt="">
                            <img src="images\hands-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title"> <a href="voluntariado.html"><font color="black">VOLUNTARIOS</font>
</a></h3>
                        </header>

                        <div class="entry-content">
                            <p>Participa activamente como parte de la comunidad <?php echo $sitename; ?>. Te estamos esperando. </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                           <img src="images\donation-gray.png" alt="">
                            <img src="images\donation-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title"> <a href="escuelas.html"><font color="black">ESCUELAS Y CURSOS</font>
</a></h3>
                        </header>

                        <div class="entry-content">
                            <p>Como enfermera, param&eacute;dico o con un curso de primeros auxilios, t&uacute; puedes hacer una diferencia. </p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

   
    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <!--<h2><a class="foot-logo" href="inicio.html"><img src="images\logo.png" alt=""></a></h2>-->
                            
                            <p><?php echo $sitename; ?> &copy; 2019<br>Todos los derechos reservados</p>

                            <ul class="d-flex flex-wrap align-items-center">
                               
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                               <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                               
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Enlaces rapidos</h2>

                        <ul>
                            <li><a href="#" target="_blank">Privacidad</a></li>
                            
                            <li><a href="#" target="_blank">Donaciones</a></li>
                            <li><a href="#" target="_blank">Nuestras causas</a></li>
                            <li><a href="#" target="_blank">Contacto</a></li><li><a href="tienda.html" target="_blank">Tienda</a></li>
                           
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Noticias</h2>

                          <ul>
                                <li>
                                    <h3><a href="noticias.html"><?php echo $sitename; ?> firma convenio con el Centro Nacional de Trasplantes para el traslado de órganos en ambulancias</a></h3>
                                    <div class="posted-date">Septiembre 23, 2019</div>
                                </li>

                                 <li>
                                    <h3><a href="noticias.html">Capacita <?php echo $sitename; ?> en Primeros Auxilios a más de 25 mil personas en 20 estados del país</a></h3>
                                    <div class="posted-date">Septiembre 21, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="noticias.html"><?php echo $sitename; ?> recibe el Premio Nacional de Protección Civil 2019</a></h3>
                                    <div class="posted-date">Septiembre 19, 2019</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contacto</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+ (52) 1 33******
</span></li>
                                <li><i class="fa fa-envelope"></i><span>leonesporlasangre@udg.mx</span></li>
                                <li><i class="fa fa-map-marker"></i><span>CUCEI, Guadalajara, Jalisco</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

       
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/jquery.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/swiper.min.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/circle-progress.min.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='<?php echo $siteurl; ?>/js/custom.js'></script>

</body>
</html>