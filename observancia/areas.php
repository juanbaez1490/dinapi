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
          <div><a href="#">Inicio</a> / <a href="index.php">Observancia</a> / Áreas de Observancia</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Observancia</h1>
            <div class="lista">
              <ul>
                <li class="li-principal"><a href="conocer.php" class="menu_lateral">CONOCER</a></li>
                <li class="li-principal">ÁREAS DE OBSERVANCIA</li>
                <li class="li-principal"><a href="denunciar.php" class="menu_lateral">DENUNCIAR</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">


            <h2 class="inicial">ÁREAS QUE ABARCA LA DIRECCIÓN GENERAL DE OBSERVANCIA</h2>
            <h4>
              DIRECCIÓN DE LUCHA CONTRA LA PIRATERÍA Y FALSIFICACIÓN
            </h4>
            <p>
              Es la encargada de planificar y ejecutar las tareas investigativas y represivas
de todo hecho que atente los derechos de Propiedad Intelectual.
            </p>
            <p>
              <b>Actividades:</b> intervenciones administrativas en aduanas de todo el país,
tareas de investigación vía web y de locales públicos, allanamientos
conjuntamente con el Ministerio Público y Policía Nacional de locales
comerciales y depósitos, controles en vía pública, todo esto en persecución a

una posible fabricación, comercialización y almacenamiento de productos
presumiblemente falsificados.
            </p>
            <h4>
              DIRECCIÓN DE PROMOCIÓN Y PREVENCIÓN
            </h4>
            <p>
              Es la encargada de planificar y ejecutar actividades de concienciación,
promoción y capacitación sobre los derechos de Propiedad Intelectual y la
importancia de la misma en la sociedad.
            </p>
            <p>
              <b>Actividades:</b> A) Realización de Jornadas de capacitaciones en todo el
territorio paraguayo (universidades, colegios, instituciones públicas y
privadas.). B) Concienciar a la ciudanía en general sobre la importancia de
proteger la Propiedad Intelectual como herramienta fundamental para el
desarrollo social y económico del país. C) Promover, la Difusión y Protección
de los Derechos de Propiedad Intelectual en el Paraguay, a través actividades
de Educación y Capacitación. D) Fomentar la creación intelectual, en sus
formas: literaria, artística y/o científica, así como en su ámbito de aplicación
industrial; y la difusión de los conocimientos tecnológicos dentro de los
sectores culturales y productivos.
            </p>
            <h4>
              DIRECCIÓN DE MEDIACIÓN Y CONCILIACIÓN
            </h4>
            <p>
              Es la encargada de planificar, ejecutar y controlar todas las actividades
inherentes a brindar asistencia a las partes para lograr un acuerdo respecto
de una controversia suscitada en estricto apego a las disposiciones legales
que regulan la propiedad intelectual en el país.
            </p>
            <h4>
              UNIDAD DE REGISTRO DE IMPORTACIONES
            </h4>
            <p>
              Registrar y mantener el orden de las solicitudes de Importaciones
presentadas por los Agentes Patrocinantes para los diferentes trámites
realizados en la DINAPI.
            </p>
            <p>
              <b>Actividades:</b> recepcionar las solicitudes de registro de importaciones,
procesar cada solicitud y realizar un examen de forma para establecer si se
reúne todos los requisitos para la inscripción o registro, así como la carga del
registro en el sistema informático.
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
