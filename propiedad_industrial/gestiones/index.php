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
    <link href="../../css/bootstrap.css" rel="stylesheet" />
    <link href="../../css/app.css" rel="stylesheet" />
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/vue.min.js"></script>
    <script src="../../js/anime.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/fontawesome.min.js"></script>
    <script type="text/javascript" src="../../js/app.js"></script>
    <link rel="icon" type="image/png" href="../../img/icono.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <?php 
      /**
        *Direccionamiento de URL Base
      */
      $URL_Base = "../../";

      /**
        *Direccionamiento del Menu Principal
      */
      $URL_Menu_Principal = "../../menu_principal.php";
    ?>


  </head>
  <body>
    <div id="app" class="clear-section">

      <header>
        <img src="<?php echo $URL_Base; ?>img/logo.png" class="center-block col-md-2 mb-2 mt-2">
      </header>

      <a
        href="#head"
        v-bind:class=" 'navigate ' + (section == 'head' ? 'notShow' : 'show')"
        id="top"
      >
        <i class="fas fa-angle-up fa-5x mr-5"></i>
      </a>
      <div class="float-left secondary-header head2 head_gestionesadministrativas">
        

        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>


        <div class="header-secondary-image"></div>
        <div class="titulo-pagina-principal ml-5 mt-2 pl-2 pr-5 col-md-4">
          <div class="font-weight-bold">
            Gestiones Administrativas
          </div>
        </div>

      </div>
      <div
        class="col-md-12 clear-section float-left pt-3"
        id="secondary-container"
      >
        <div class="clearfix"></div>
        

        <div class="row">


          <div class="col-sm float-left eje-box-outer grid" onclick="location.href='conocer.php';">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-2">
              <div class="icono-eje">
                <span class="fas fa-file-signature"></span>
                <div class="texto-eje h2">Gestión de Matrículas y PIN de Agentes de la Propiedad Industrial</div>
              </div>
              <figcaption>
                <p>
                  ¿Cómo hago para registrarme como agente?
                </p>
                <a href="matriculas.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-sm float-left eje-box-outer grid" onclick="location.href='probono.php';">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-3">
              <div class="icono-eje">
                <div class="col-md-6 offset-md-3 mb-3 mt-4">
                  <img src="<?php echo $URL_Base; ?>img/icon_probono.png" class="img-fluid">  
                </div>
                <div class="texto-eje h2">Agentes de Propiedad Industrial PRO-BONO</div>
              </div>
              <figcaption>
                <p>
                </p>
                <a href="#">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-sm float-left eje-box-outer grid" onclick="location.href='registro_poderes.php';">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-1">
              <div class="icono-eje">
                <div class="col-md-6 offset-md-3 mb-3 mt-4">
                  <img src="<?php echo $URL_Base; ?>img/icon_registropoder.png" class="img-fluid">  
                </div>
                <div class="texto-eje h2">Registro de Poderes</div>
              </div>
              <figcaption>
                <p>
                  ¿Cómo registrar un poder?
                </p>
                <a href="registro_poderes.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-sm float-left eje-box-outer grid" onclick="location.href='actos.php';">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-4">
              <div class="icono-eje">
                <div class="col-md-6 offset-md-3 mb-3 mt-4">
                  <img src="<?php echo $URL_Base; ?>img/icon_actosjuridicos.png" class="img-fluid">  
                </div>
                <div class="texto-eje h2">Actos Jurídicos</div>
              </div>
              <figcaption>
                <p>
                    ¿Qué comprenden y cómo registrar los actos jurídicos?
                </p>
                <a href="actos.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-sm float-left eje-box-outer grid" onclick="location.href='circulares.php';">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-2">
              <div class="icono-eje">
                <div class="col-md-6 offset-md-3 mb-3 mt-4">
                  <img src="<?php echo $URL_Base; ?>img/icon_circulares.png" class="img-fluid">  
                </div>
                <div class="texto-eje h2">Circulares y Decisiones Administrativas</div>
              </div>
              <figcaption>
                <p>
                </p>
                <a href="circulares.php">Vea más</a>
              </figcaption>
            </figure>
          </div>




        </div>


        <div class="col-md-1 float-left">
          <!--Navegacion-->
        </div>
      </div>

      <!-- Novedades -->
      <div
        class="col-md-12 clear-section float-left clear-section pb-5"
        id="noticias"
        v-bind:style=" heightsDivs[3] "
      >


        <div class="clearfix"></div>
        <div class="row">
      
        </div>
      </div>
      <!-- Fin Novedades -->

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
              <i class="fa fa-pinterest"></i>
              <i class="fa fa-youtube"></i>
              <i class="fa fa-tumblr"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
