<!DOCTYPE html>
<html lang="es" class="clear-section">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="maximum-scale=2.0" />

    <!--Tags-->

    <!--Google-->
    <meta
      name="description"
      content="La DINAPI es el ente público que diseña, implementa y fomenta y coordina las políticas de propiedad intelectual en el Paraguay"
    />
    <meta
      name="keywords"
      content="propiedad intelectual, derecho de autor, observancia, patentes"
    />

    <!--Facebook-->
    <meta
      property="og:title"
      content="DINAPI: Dirección Nacional de Propiedad Intelectual"
    />
    <meta
      property="og:description"
      content="La DINAPI es el ente público que diseña, implementa y fomenta y coordina las políticas de propiedad intelectual en el Paraguay"
    />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/img/logo.png" />
    <meta property="og:url" content="url-here" />

    <!--Twitter-->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="url-here" />
    <meta property="twitter:image" content="/img/logo.png" />
    <meta
      name="twitter:title"
      content="DINAPI: Dirección Nacional de Propiedad Intelectual"
    />
    <meta
      name="twitter:description"
      content="La DINAPI es el ente público que diseña, implementa y fomenta y coordina las políticas de propiedad intelectual en el Paraguay"
    />

    <title>DINAPI | Dirección Nacional de Propiedad Intelectual</title>
    <link href="css/app.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vue.min.js"></script>
    <script src="js/anime.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <link rel="icon" type="image/png" href="img/icono.png" />

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php 
          /**
            *Direccionamiento de URL Base
          */
          $URL_Base = "";

          /**
            *Direccionamiento del Menu Principal
          */
          $URL_Menu_Principal = "menu_principal.php";
     ?>


  </head>
  <body>
    
    <div id="app" class="clear-section">


      <header>
        <img src="img/logo.png" class="center-block col-md-2 mb-2 mt-2">
      </header>


      <div class="float-left" id="head" v-bind:style="heightsDivs[0]" style="width: 100%; padding-left: 0; padding-right: 0;">
        
        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>






        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!--ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol-->
          <div class="carousel-inner" role="listbox">
         
            <div class="carousel-item active" style="background-image: url('img/portada_mesa.png')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4 font-fira">Dirección Nacional de Propiedad Intelectual</h2>
                <p class="lead">Nuestra misión es diseñar, implementar, fomentar y coordinar las políticas públicas de propiedad intelectual, concediendo la protección de los derechos derivados de esta materia a fin de garantizar la seguridad jurídica a sus titulares.</p>
              </div>
            </div>
            
            <!--div class="carousel-item" style="background-image: url('img/dautor2.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4 font-fira">Derechos de Autor</h2>
                <p class="lead">Desde el inicio de la humanidad, los seres humanos no han dejado de inventar. De hecho, la mayoría de las cosas que ahora nos rodean fueron inventadas por alguien en el pasado. Sin embargo, estamos tan acostumbrados a utilizarlas, que a menudo no las consideramos como invenciones.</p>
              </div>
            </div-->

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>


      </div>
      <div
        class="col-md-12 clear-section float-left light-section "
        id="eje"
        v-bind:style=" heightsDivs[1] "
      >
        <div style="height: 10px;"></div>
  
        <div class="clearfix"></div>
        <div class="row">

          <div class="col-md-4 col-12 float-left eje-box-outer">
            <div class="eje-box-inner tarjeta_fondo" id="boxsup-2">
              <div class="row m-3">
                <div class="col-md-3">
                  <img src="img/ico_prueba.png" class="img-fluid">
                </div>
                <div class="col-md-9 row" style="padding-right: 0px;">
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='propiedad_industrial/marcas/index.php';">Marcas</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='propiedad_industrial/patentes/index.php';">Patentes</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='propiedad_industrial/dibujos/index.php';">Diseños Industriales</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='propiedad_industrial/igydo/index.php';">IG/DO</div>
                  <div class="subitem-eje-portada h5">Gestiones Administrativas</div>
                </div>
              </div>
              
 

            </div>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer">
            <div class="eje-box-inner tarjeta_fondo" id="boxsup-1">
          
              <div class="row m-3">
                <div class="col-md-3">
                  <img src="img/ico_prueba.png" class="img-fluid">
                </div>
                <div class="col-md-9 row" style="padding-right: 0px;">
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Derechos de Autor</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Derechos Conexos</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Sociedades de Gestión Colectiva</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Industrias Creativas y Folklore</div>
                  
                </div>
              </div>
              
            </div>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer">
            <div class="eje-box-inner tarjeta_fondo" id="boxsup-3">
          
              <div class="row m-3">
                <div class="col-md-3">
                  <img src="img/ico_prueba.png" class="img-fluid">
                </div>
                <div class="col-md-9 row" style="padding-right: 0px;">
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Derechos de Autor</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Derechos Conexos</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Sociedades de Gestión Colectiva</div>
                  <div class="subitem-eje-portada h5 punterolink" onclick="location.href='';">Industrias Creativas y Folklore</div>
                  
                </div>
              </div>
             
            </div>
          </div>
        </div>

        <div class="col-md-1 float-left">
          <!--Navegacion-->
        </div>
      </div>





      <!-- Enlaces de Interes -->
      <div
        class="col-md-12 float-left clear-section light-section "
        id="enlaces"
        v-bind:style=" heightsDivs[4] "
      >
        <div class="col-12 titulo-enlace">
          <h1>
            ENLACES DE INTERES
          </h1>
        </div>
        <div class="owl-carousel mt-4">
          <div>
            <img src="img/logos/inta.png" alt="First slide" />
          </div>
          <div>
            <img src="img/logos/ley5280.png" alt="First slide" />
          </div>
          <div>
            <img src="img/logos/denunciacorrupcion.png" alt="First slide" />
          </div>
          <div>
            <img src="img/logos/portalparaguay.png" alt="First slide" />
          </div>
          
        </div>
      </div>
      <!-- Fin Enalces de Interes -->

      <!-- Mas enlaces -->
      <!--div
        class="col-md-10 float-left clear-section pb-5 pt-5 offset-md-1"
        id="multiples-enlaces"
        v-bind:style=" heightsDivs[3] "
      >
        <div class="row">
          <div class="col-md-3 enlace-inferior">Políticia Institucional</div>
          <div class="col-md-3 enlace-inferior">Reportes Financieros</div>
          <div class="col-md-3 enlace-inferior">Licitaciones Públicas</div>
          <div class="col-md-3 enlace-inferior">Contacto</div>
        </div>
      </div-->
      <!-- Fin Mas Enlaces -->

      <div
        class="col-md-10 float-left clear-section pt-5 pb-5 offset-md-1"
        id="footer"
        v-bind:style=" heightsDivs[3] "
      >
        <div class="row">
          <div class="titulo-footer col-md-12">
            <h1>
              DIRECCION NACIONAL DE PROPIEDAD INTELECTUAL
            </h1>
          </div>
          <div class="texto-footer center-block col-md-12">
            <p>España 323 casi Estados Unidos</p>
            <p>Tel:+59521210977</p>
            <p>República del Paraguay</p>
          </div>
          <div class="col-md-12">
            <div class="iconos-footer">
              <i class="fa fa-facebook-square"></i>
              <i class="fa fa-twitter"></i>
              <i class="fa fa-instagram"></i>
              <!--i class="fa fa-pinterest"></i>
              <i class="fa fa-youtube"></i>
              <i class="fa fa-tumblr"></i-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
