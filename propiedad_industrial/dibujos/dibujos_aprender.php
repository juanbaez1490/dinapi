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
      <div class="float-left information-header" id="head_dibujos">
        

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
          <div><a href="#">Inicio</a> / <a href="index.php">Dibujos y Modelos Industriales</a> / Aprender</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Dibujos y Modelos Industriales</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal"><a href="dibujos_aprender.php" class="menu_lateral">APRENDER</a></li>
                <li class="li-principal"><a href="dibujos_registrar.php" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            <h2 class="inicial">¿QUÉ SON LOS DIBUJOS Y MODELOS INDUSTRIALES?</h2>
            <p>
              Se considera dibujo industrial toda combinación de líneas y colores; y modelo industrial toda forma plástica de líneas y colores, destinados a dar una apariencia especial a un producto industrial o artesanal y que sirva de tipo para su fabricación.
            </p>

            <h2>¿POR QUÉ ES IMPORTANTE EL REGISTRO DE LOS DIBUJOS Y MODELOS INDUSTRIALES?</h2>
            <p>
              El registro de los Dibujos y Modelos confiere a su titular el derecho exclusivo a reproducir el dibujo o modelo en la fabricación de un producto; a importar; poner en venta un producto que reproduzca el dibujo o modelo protegido; a conservar el producto con el fin de ponerlo en venta, y de excluir a los terceros de la realización de tales actos con fines industriales o comerciales (Art. 19° Ley  N° 868/81 de Dibujos y Modelos Industriales). <br><br>
              El propietario de un dibujo o modelo industrial registrado podrá otorgar licencia para explotar su dibujo o modelo. El contrato respectivo deberá inscribirse en la Dirección General de Propiedad Industrial para que surta efecto contra terceros, observándose  las mismas formalidades que las establecidas para la transferencia o cesión (Art. 24° Ley N° 868/81 de Dibujos y Modelos Industriales).
            </p>

            <h2>¿QUÉ PROTEGE EL DIBUJO Y MODELO INDUSTRIAL?</h2>
            <p>
              Mediante el Registro de un Dibujo y Modelo Industrial se protege únicamente la forma de los productos es decir el aspecto estético.
            </p>

            <h2>CLASIFICACIÓN DE DIBUJOS Y MODELOS INDUSTRIALES</h2>
            <p>
              Se desprende del Decreto Nº 30007/82 que establece la clasificación para los Dibujos y Modelos Industriales.
            </p>
            <button type="button" class="btn btn-info"
              onclick=" window.open('leyes/Decreto_30007_1982.pdf','_blank')">
                      Decreto 30007/1982
              </button>              
            </p>
            


            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    LEGISLACIÓN VIGENTE
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Ley_868_1981.pdf','_blank')">
                      Ley N° 868/1981
                    </button>
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Decreto_30007_1982.pdf','_blank')">
                      Decreto N° 30007
                    </button>
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Ley_4798_2012.pdf','_blank')">
                      Ley Nº 4798/2012
                    </button>
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Decreto_460_2013.pdf','_blank')">
                      Decreto Nº 460
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <hr />


          </div>
        </div>
      </div>
      

      <?php 
        include("../../footer.php");
      ?>

      
    </div>
  </body>
</html>
