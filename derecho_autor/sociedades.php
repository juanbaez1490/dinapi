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
      <div class="float-left information-header" id="head_derechoautor">
        


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
          <div><a href="#">Inicio</a> / <a href="index.php">Derechos de Autor</a> / Sociedades de Gestión Colectiva </div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Derechos de Autor</h1>
            <div class="lista">
              <!--ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal"><a href="#" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li>
              </ul-->
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            
            <h2 class="inicial">
              Sociedades de Gestión Colectiva
            </h2>

            <h4>
              ¿Cómo se gestionan el derecho de autor y los derechos conexos?
            </h4>

            <p>
              Para que tú, u otra persona, pueda utilizar una obra protegida por derecho de autor y/o derechos conexos, es conveniente buscar a los titulares de los derechos para pedirles permiso y en ocasiones pagar por el derecho a usar la obra.
            </p>
            <p>
              Este proceso se denomina <b>obtención de autorización</b>. Los autores e intérpretes (sobre todo los más conocidos) pueden, fácilmente, verse bombardeados por la gran cantidad de solicitudes que reciben de personas que quieren reproducir, emitir, adaptar o usar de alguna manera sus obras e interpretaciones. Seguir y estar al tanto de todas estas solicitudes y decidir si dar o no permiso gratis, o por una cantidad de dinero, puede llevar mucho tiempo.
            </p>
            <p>
              Estas solicitudes son muy importantes, ya que los autores e intérpretes reciben el pago de sus derechos a través de licencias o cesiones. Para poder disponer de tiempo para seguir creando e interpretando, mientras atienden todas las solicitudes, muchos autores e intérpretes confían en los servicios de las <b>Entidades de Gestión Colectiva</b>.
            </p>
            <p>
              Estas organizaciones actúan como un enlace entre los titulares de los derechos y los que quieren utilizar sus obras. Conceden autorizaciones, recaudan los pagos de derechos, y detectan, prohíben y buscan compensación por usos no autorizados. Gracias a estas organizaciones, los autores e intérpretes reciben los pagos que merecen cuando sus obras e interpretaciones son utilizadas, y los usuarios pueden conseguir permiso para el uso de tales obras e interpretaciones más fácilmente.
            </p>
            <p>
              Nuestro país tiene entidades nacionales de Gestión Colectiva, como lo son “Autores Paraguayos Asociados” APA, “Entidad Paraguaya de Artistas Intérpretes o Ejecutantes” AIE Paraguay y la “Sociedad de Gestión de Productores Fonográficos del Paraguay” SGP, con las que puedes contactar para la gestión de los derechos de tus obras o interpretaciones.
              Te puedes poner también en contacto con estas organizaciones cuando necesites permiso para utilizar las obras o interpretaciones de otros autores.
            </p>
            <p>
              Las entidades de gestión colectiva suelen pertenecer a una asociación (grupo) internacional. Para encontrar la organización nacional que te puede ayudar a gestionar tus derechos como autor, u orientarte sobre cómo conseguir permiso para utilizar la obra o interpretación de otra persona, puedes ponerte en contacto con dicha asociación internacional.
            </p>

           
            <hr />


          </div>
        </div>
      </div>
      <div
        class="col-md-10 float-left clear-section pt-5 pb-5 offset-md-1"
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
