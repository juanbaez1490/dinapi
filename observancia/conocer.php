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
          <div><a href="#">Inicio</a> / <a href="index.php">Observancia</a> / INFORMACIÓN RELEVANTE</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Observancia</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">INFORMACIÓN RELEVANTE</li>
                <li class="li-principal"><a href="areas.php" class="menu_lateral">ÁREAS DE OBSERVANCIA</a></li>
                <li class="li-principal"><a href="denunciar.php" class="menu_lateral">DENUNCIAR</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">


            <h2 class="inicial">DIRECCION GENERAL DE OBSERVANCIA</h2>
            
            <p>
              Es una de las Direcciones Generales de la DINAPI, cuya misión principal es la de velar por el cumplimiento efectivo de las normas especiales de Propiedad Intelectual, tendientes a asegurar el ejercicio de los derechos por sus titulares. 
            </p>
            <p>
              Dicha tarea se lleva a cabo mediante la implementación de programas de promoción, prevención y sensibilización acerca de la importancia del respeto a la Propiedad Intelectual, así como de la investigación, como órgano coadyuvante de los organismos estatales encargados de la persecución de los hechos punibles perpetrados contra dichos derechos y sus titulares. 
            </p>

            <h4>
              PROMOCIÓN DE LA PROPIEDAD INTELECTUAL
            </h4>
            <p>
              La DGO, a través de sus programas de promoción, busca poner al alcance de distintos sectores de la sociedad los conceptos o elementos integrantes de las figuras de P.I., facilitar la compresión sobre los procedimientos de registros, además de asumir la tarea de transmitir la problemática que conlleva la violación a la PI desde sus distintos aspectos, sociales, económicos y culturales, a fin de hacerlos comprensivos desde un enfoque vivencial y significativo.
            </p>

            <h4>
              PREVENCIÓN 
            </h4>
            <p>
              Otro de los objetivos de la DGO es la de prevenir la comisión de hechos punibles y de faltas que atenten contra el libre ejercicio de los derechos de la PI, llevando a cabo actividades investigativas tendientes a impedir la reproducción comercial de obras protegidas por derecho de autor sin autorización del titular o piratería, así también evitar la comercialización de productos falsificados relacionados a marcas u otros signos distintivos que induzcan al error o confusión al público consumidor, así como otras acciones contempladas en leyes especiales que rigen la materia.
            </p>
            <p>
              Con ello la DGO busca, no solo proporcionar herramientas efectivas para la protección de los derechos de sus titulares, sino además, busca proteger al consumidor y al ciudadano en general de su exposición a productos espureos con las consecuencias que ello acarrea.
            </p>

            <h4>
              INVESTIGACIÓN 
            </h4>
            <p>
              Desde su misión investigativa, lleva a cabo de oficio y a instancia de parte, la recolección de información y datos de manera a lograr la intervención de espacios públicos o  privados de acceso público, así mismo aplica en base a convenios interinstitucionales, medidas en frontera para el control de mercaderías que ingresan al País, cooperando de este modo con los órganos estatales encargados de  la represión de Hechos Punibles contra la PI.
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
