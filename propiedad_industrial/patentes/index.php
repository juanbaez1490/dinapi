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
      <div class="float-left secondary-header head2 head_patentes">
        

        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>


        <div class="header-secondary-image"></div>
        <div class="titulo-pagina-principal ml-5 mt-2 pl-2 pr-5 col-md-4">
          <div class="font-weight-bold">
            Patentes
          </div>
        </div>

      </div>
      <div
        class="col-md-12 clear-section float-left pt-5 "
        id="secondary-container"
      >
        <div class="clearfix"></div>
        <div class="row">


          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-3">
              <div class="icono-eje">
                <span class="far fa-lightbulb"></span>
                <div class="texto-eje h2">Información Relevante</div>
              </div>
              <figcaption>
                <p>
                </p>
                <a href="patentes_aprender.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-1">
              <div class="icono-eje">
                <span class="fas fa-user-friends"></span>
                <div class="texto-eje h2">Gestionar Trámites</div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="patentes_registrar.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo tarjeta_fondo" id="boxsup-4">
              <div class="icono-eje">
                <span class="fas fa-user-friends"></span>
                <div class="texto-eje h2">Consultas y Herramientas</div>
              </div>
              <figcaption>
                <p>
                </p>
                <a href="https://servicios.dinapi.gov.py/">Vea más</a>
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

      
      <?php 
        include("../../footer.php");
      ?>

      
    </div>
  </body>
</html>
