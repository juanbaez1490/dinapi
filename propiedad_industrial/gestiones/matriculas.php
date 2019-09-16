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
          <div><a href="<?php echo $URL_Base; ?>index.php">Inicio</a> / <a href="index.php">Gestiones Administrativas</a> / Gestión de Matrículas y PIN de Agentes de la Propiedad Industrial</div>
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


            <h2 class="inicial">GESTIÓN DE MATRÍCULAS Y PIN DE AGENTES DE LA PROPIEDAD INDUSTRIAL</h2>


            <h4>
              Paso 1: Pago de Taza correspondiente
            </h4>

            <p>
              Pagar una tasa de 1 Jornal en la Caja de la DINAPI
            </p>

            <h4>
              Paso 2: Presentación de documentos
            </h4>

            <p>
              Presentar ante la Mesa de Entradas de la Dinapi los siguientes documentos:
            </p>

            <p>
              a.  Fotocopia de cédula autenticada por escribanía. 
              <br>
              b.  Fotocopia de matrícula de la C.S.J. autenticada por escribanía.
              <br>
              c.  Llenar, imprimir y firmar el formulario correspondiente.
              <br><br>
              <button type="button" class="btn btn-info" onclick=" window.open('https://www.dinapi.gov.py/application/files/9214/4043/4742/Formulario_014_-_REGISTRO_de_AGENTE_-_Version_3.0.pdf','_blank')">Formulario 014 - Registro de Agente
              </button>
            </p>

            <h4>
              Paso 3: Obtención de comprobante
            </h4>

            <p>
              Retirar de la Dirección General de Propiedad Industrial el comprobante de registro como Agente y el número que lo identifica. 
            </p>

            <h4>
              Paso 4: Obtención de PIN
            </h4>

            <p>
              Pasar por la oficina de Atención al usuario donde le proveerán un PIN de Agente, para que pueda acceder a las plataformas digitales con su usuario. 
            </p>

            <h4>
              Paso 5: Pago anual
            </h4>

            <p>
              NO TE OLVIDES! Cada año debes pagar la anualidad de 1 jornal mínimo.
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
