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
      <div class="float-left information-header" id="head_gestionesadministrativas">
        


        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>



        <div class="float-left" id="main-image">
          <!--img src="../../img/logo.png" class="col-md-6 col-sm-12" id="img1" /-->
        </div>
      </div>
      <div
        class="col-md-12 clear-section float-left pt-5 "
        id="information-container"
      >
        <div class="clearfix"></div>
        <div class="col-md-12 bread">
          <div><a href="<?php echo $URL_Base; ?>index.php">Inicio</a> / <a href="index.php">Gestiones Administrativas</a> / Actos Jurídicos</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Gestiones Administrativas</h1>
            <div class="lista">
              <ul>
        
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">


            <h2 class="inicial">
              ACTOS JURÍDICOS
            </h2>

            <h4>
              ¿Qué comprenden los Actos Jurídicos?
            </h4>
            <p>
              Transferencias, fusión, cambio o corrección de nombre, cambio o corrección de domicilio, anotaciones de renuncias voluntarias, oficios, embargos, cesiones, licencias de uso o cualquier otra modificación o extinción de un derecho sobre un registro concedido.
            </p>

            <h4>
              ¿Como registrar un Acto Jurídico?
            </h4>

            <p>
              <b>Paso 1:</b><br>
               Pagar la tasa en la oficina de la DINAPI, de acuerdo al acto jurídico que se pretende registrar. La mayoría tiene un costo de 1 jornal, salvo la inscripción de una licencia de uso, cuyo costo es de 2 jornales. 
            </p>

            <p>
              <b>Paso 2:</b><br>
               Completar la hoja de procesamiento de datos, de acuerdo al cambio que se buscas anotar:
            </p>

            <button type="button" class="btn btn-info" onclick=" window.open('https://www.dinapi.gov.py/application/files/1814/4043/4616/Formulario_009_-_CAMBIO_de_NOMBRE_Marcas_-_Version_3.0.pdf','_blank')">
              Formulario 009 - Cambio de Nombre - Marcas
            </button>
            <br><br>

            <button type="button" class="btn btn-info" onclick=" window.open('https://www.dinapi.gov.py/application/files/6914/4043/4636/Formulario_010_-_CAMBIO_de_DOMICILIO_Marcas_-_Version_3.0.pdf','_blank')">
              Formulario 010 - Cambio de Domicilio - Marcas
            </button>
<br><br>
            <button type="button" class="btn btn-info" onclick=" window.open('https://www.dinapi.gov.py/application/files/3614/4043/4678/Formulario_011_-_FUSION_DE_SOCIEDAD_Marcas_-_Version_3.0.pdf','_blank')">
              Formulario 011 - Fusión de Sociedad -Marcas
            </button>
<br><br>
            <button type="button" class="btn btn-info" onclick=" window.open('https://www.dinapi.gov.py/application/files/3814/4043/4720/Formulario_012_-_TRANSFERENCIA_LICENCIA_Marcas_-_Version_3.0.pdf','_blank')">
              Formulario 012 - Transferencia de Licencia - Marcas
            </button>
<br><br>
            <button type="button" class="btn btn-info" onclick=" window.open('https://www.dinapi.gov.py/application/files/7114/4043/4970/Formulario_018_-_ACTOS_CONVENIOS_CONTRATOS_Derechos_de_Autor-_Version_3.0.pdf','_blank')">
              Formulario 018 - Actos, Convenios, Contratos - Derechos de Autor
            </button>

    


            

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
