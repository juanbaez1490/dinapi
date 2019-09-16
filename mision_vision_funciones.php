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
    <link href="css/bootstrap.css" rel="stylesheet" />
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
          <!--img src="img/logo.png" class="col-md-6 col-sm-12" id="img1" /-->
        </div>
      </div>
      <div
        class="col-md-12 clear-section float-left pt-5 "
        id="information-container"
      >
        <div class="clearfix"></div>
        <div class="col-md-12 bread">
          <div><a href="index.php">Inicio</a> / Misión, Visión, Valores y Funciones de la DINAPI </div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Datos Institucionales</h1>
            <div class="lista">
              <ul>
                
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">


            <h2 class="inicial">MISIÓN, VISIÓN, VALORES Y FUNCIONES DE LA DINAPI</h2>
            
            <h4>
              Misión
            </h4>
            <p>
              La DINAPI es el ente público, autónomo, autárquico que diseña, implementa, fomenta y coordina las políticas de propiedad intelectual; promueve la industria creativa, la creación e innovación cultural y tecnológica, propiciando la competitividad del país, y; otorga y protege los derechos de propiedad intelectual, ofreciendo seguridad jurídica a sus titulares.
            </p>

            <h4>
              Visión
            </h4>
            <p>
              Una institución eficiente, transparente, altamente técnica en la promoción, fomento, registro y protección de la creación intelectual, reconocida por ser generadora del desarrollo social, económico, tecnológico y cultural del país.
            </p>

            <h4>
              Valores
            </h4>
            <p>
              Valores de DINAPI: <br>
• Transparencia.<br>
• Eficiencia.<br>
• Confiabilidad.<br>
• Creatividad.<br><br>

Valores de las personas que conforman DINAPI: <br>
• Honestidad.<br>
• Profesionalismo.<br>
• Ética.<br>
• Vocación De Servicio.<br>
            </p>

            <h4>
              Funciones de la DINAPI
            </h4>
            <p>
              • Administrar y disponer el otorgamiento y protección de los derechos de propiedad intelectual como ser: Derechos de Autor y Derechos Conexos, Marcas, Dibujos y Modelos Industriales, Patentes de Invención y Modelos de Utilidad, Transferencia de Tecnología, Indicaciones Geográficas y otras que pudieran legislarse o reglamentarse.
<br><br>
• Promover y fomentar la creación intelectual tanto en su forma literaria, artística o científica, como en su ámbito de aplicación industrial, y la difusión de los conocimientos tecnológicos dentro de los sectores culturales y productivos.
<br><br>
• Fomentar la Innovación, la Investigación y el Acceso a la Ciencia, favoreciendo la transferencia de tecnología.
<br><br>
• Formular las políticas nacionales en todas aquellas materias relacionadas con la protección de la propiedad intelectual, en coordinación con los ministerios y demás órganos competentes para cada caso.
<br><br>
• Promover iniciativas y desarrollar actividades conducentes al mejor conocimiento y protección de la Propiedad Intelectual, en el orden nacional
Promover la Innovación y el Desarrollo Empresarial, a través del fomento de la innovación, desarrollo empresarial e investigación a través de las buenas prácticas.
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
