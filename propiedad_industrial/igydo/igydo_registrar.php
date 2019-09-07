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
      <a
        href="#head"
        v-bind:class=" 'navigate ' + (section == 'head' ? 'notShow' : 'show')"
        id="top"
      >
        <i class="fas fa-angle-up fa-5x mr-5"></i>
      </a>
      <div class="float-left information-header" id="head">
        
        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>

        <div class="float-left" id="main-image">
          <img src="../../img/logo.png" class="col-md-6 col-sm-12" id="img1" />
        </div>
      </div>
      <div
        class="col-md-12 clear-section float-left pt-5 "
        id="information-container"
      >
        <div class="clearfix"></div>
        <div class="col-md-12 bread">
          <div><a href="#">Inicio</a> / <a href="index.php">INDICACIONES GEOGRÁFICAS Y DENOMINACIONES DE ORIGEN</a> / Registrar</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>INDICACIONES GEOGRÁFICAS Y DENOMINACIONES DE ORIGEN</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal"><a href="igydo_aprender.php" class="menu_lateral">APRENDER</a></li>
                <!--li class="li-secundario">Qué es una marca</li>
                <li class="li-secundario">Derechos</li>
                <li class="li-secundario">Casos Exitosos</li>
                <li class="li-secundario">Ley de Marcas</li-->
                <li class="li-principal"><a href="igydo_registrar.php" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            <h2 class="inicial">¿QUÉ REQUISITOS DEBO LLENAR PARA SOLICITAR EL RECONOCIMIENTO PRELIMINAR DE UNA IG/DO?</h2>
            <p>
              Se debe presentar junto con el formulario correspondiente, un documento o Dossier técnico donde conste los datos personales, laborales, así como también los datos del producto y las especificaciones técnicas en virtud del cual demuestre que la cualidad, característica o reputación tenga vinculación con el área de producción. <br><br>
Se abona una tasa de 5 jornales para la solicitud de Registro, no así en la solicitud preliminar de Reconocimiento.

            </p>

            <h2>¿QUIÉNES PUEDEN SOLICITAR LAS IG/DO?</h2>
            <p>
              Pueden solicitar los productores, sean estas personas físicas o jurídicas,  que desarrollen sus actividades dentro del área correspondiente a la futura IG/DO. También lo pueden solicitar las autoridades departamentales o municipales cuando correspondan a sus respectivas circunscripciones. Puede ser solicitar de oficio la DINAPI, pero solamente cuando se trate de un producto que, por ser el resultado de procesos y conocimientos culturales tradicionales, es considerado de interés nacional y por ello, requiera su reconcomiendo y registro.
   
            </p>

            
            <h2>¿QUÉ ES EL COMITÉ DE PROMOCIÓN?</h2>
            <p>
              Un Comité de promoción es la asociación que solicita el reconocimiento preliminar de una IG/DO. El Comité de promoción no necesita ser una asociación con personería jurídica, basta que sea constituido con personas dedicadas a la producción, extracción y elaboración del producto de la zona del producto para solicitar el reconocimiento preliminar de una IG/DO.
            </p>

            <h2>¿QUIÉN SOLICITA EL REGISTRO DE UNA IG/DO? </h2>
            <p>
              Luego del Reconocimiento, la solicitud de registro lo solicita un Comité Regulador, una vez que sus estatutos sean debidamente aprobados por la DIG/DO.
            </p>


            <h2>¿QUÉ ES UN COMITÉ REGULADOR?</h2>
            <p>
              Un C.R. es el administrador del sello, bajo el estricto control de la DINAPI, es el que establece las reglas y especificaciones que deben cumplirse para poder obtener el derecho de uso por parte de la persona física o jurídica que desee utilizar en sus productos. El C.R. es una asociación de utilidad pública o con capacidad restringida, el cual está integrado por aquellos que se dedican a la producción, acondicionamiento, o procesamiento de los productos amparados por la Ley de IG/DO  4.923/13, como también los  extractores y elaboradores.  Habrá un C.R por cada IG/DO.
            </p>

            <h2>¿CÓMO HAGO PARA OBTENER EL DERECHO DE USO DE UNA IG/DO EN MI PRODUCTO?</h2>

            <p>
              El primer paso es acercarse al C.R. registrado en DINAPI como administrador del Sello, y cumplir con lo establecido en las especificaciones técnicas que los C.R. han elaborado. Es importante destacar que si el C.R. no da la admisión, el interesado puede recurrir la decisión del C.R. ante la DINAPI.              
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
