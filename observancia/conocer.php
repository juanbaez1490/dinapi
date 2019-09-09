<!DOCTYPE html>
<html lang="es" class="clear-section">
  <head>
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
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/app.css" rel="stylesheet" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/vue.min.js"></script>
    <script src="../js/anime.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <link rel="icon" type="image/png" href="../img/icono.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <?php 
      /**
        *Direccionamiento de URL Base
      */
      $URL_Base = "../";

      /**
        *Direccionamiento del Menu Principal
      */
      $URL_Menu_Principal = "../menu_principal.php";
    ?>

  </head>
  <body>
    <div id="app" class="clear-section">
      <a
        href="#head"
        v-bind:class=" 'navigate ' + (section == 'head' ? 'notShow' : 'show')"
        id="top"
      >
        <i class="fas fa-angle-up fa-5x mr-5"></i>
      </a>
      <div class="float-left information-header" id="head_observancia">
        


        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>



        <div class="float-left" id="main-image">
          <!--img src="../img/logo.png" class="col-md-6 col-sm-12" id="img1" /-->
        </div>
      </div>
      <div
        class="col-md-12 clear-section float-left pt-5 "
        id="information-container"
      >
        <div class="clearfix"></div>
        <div class="col-md-12 bread">
          <div><a href="#">Inicio</a> / <a href="index.php">Observancia</a> / Conocer</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Observancia</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">CONOCER</li>
                <li class="li-principal"><a href="areas.php" class="menu_lateral">ÁREAS DE OBSERVANCIA</a></li>
                <li class="li-principal"><a href="denunciar.php" class="menu_lateral">DENUNCIAR</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">


            <h2 class="inicial">DIRECCIÓN GENERAL DE OBSERVANCIA:</h2>
            <p>
              La Dirección General de Observancia es la encargada de la promoción,
prevención y defensa de los derechos de propiedad intelectual dentro de la
DINAPI. La misma deberá promover actividades preventivas e investigativas
en todo el territorio paraguayo.
            </p>

            <h2>¿QUÉ ES LA OBSERVANCIA?</h2>
            <p>
              Se trata del cumplimiento rígido de alguna orden o norma la observancia de
las Leyes.
            </p>
            <p>
              La Ley 4798/13 que crea la DINAPI en su Art. 13 inciso C, lo faculta a realizar
intervenciones administrativas en las aduanas de todo el país, en los
comercios, depósitos y otros locales públicos o privados de acceso público,
para evitar todo tipo violación de los Derechos de Propiedad Intelectual.
            </p>
            <h2>
              ¿QUÉ ES LA PROMOCIÓN?
            </h2>
            <p>
              Es el conjunto de actividades, técnicas y métodos que se utilizan para lograr
objetivos específicos, como informar, persuadir o recordar al público
objetivo, acerca de los productos, servicios, ideas, o planes de gobiernos que
se presenten.
            </p>
            <h2>
              ¿QUÉ ES LA PREVENCIÓN?
            </h2>
            <p>
              Es la acción y efecto de prevenir (preparar con antelación lo necesario para
un fin, anticiparse a una dificultad, prever un daño. El objetivo de prevenir es
lograr que un perjuicio eventual no se concrete.
            </p>


            
            
            <hr />


          </div>
        </div>
      </div>
      <div
        class="col-md-10 float-left clear-section pt-5 pb-15 offset-md-1"
        id="footer"
        v-bind:style=" heightsDivs[3] "
      >
        <div class="row">
          <div class="titulo-footer col-md-12">
            <h1>
              DIRECCIÓN NACIONAL DE PROPIEDAD INTELECTUAL
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
