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
          <div><a href="#">Inicio</a> / <a href="index.php">Dibujos y Modelos Industriales</a> / Registrar</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Dibujos y Modelos Industriales</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal"><a href="dibujos_aprender.php" class="menu_lateral">APRENDER</a></li>
                <!--li class="li-secundario">Qué es una marca</li>
                <li class="li-secundario">Derechos</li>
                <li class="li-secundario">Casos Exitosos</li>
                <li class="li-secundario">Ley de Marcas</li-->
                <li class="li-principal"><a href="dibujos_registrar.php" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            
            <h2 class="inicial">PASOS PARA EL REGISTRO DE DIBUJO Y MODELO INDUSTRIAL</h2>
            <ol>
              <li>Solicitud.</li>
              <li>Examen de forma.</li>
              <li> Examen de fondo.</li>
              <li>Publicación.</li>
              <li>Concesión.</li>
            </ol>


            <h2>PROCEDIMIENTO DE ADMISIÓN DE LA SOLICITUD</h2>
            <p>
              Al solicitar el registro de una solicitud  se debe utilizar el Formulario F003 o Solicitud de renovación el Formulario F005 de un Dibujo o Modelo  Industrial. Se deberá llenar el Formulario pertinente en cuatro copias, firmadas por el solicitante y/o conjuntamente con el Abogado Agente de la Propiedad Industrial. <br><br>
              La tasa de presentación por solicitud de registro y renovación es de  5 jornales mínimos.
            </p>

            <button type="button" class="btn btn-info" onclick=" window.open('formularios/Formulario_003_-_REGISTRO_DIBUJOS_y_MODELOS_INDUSTRIALES_-_Version_3.0 (1).docx','_self')">Ley 1630/2000
            </button>
            <button type="button" class="btn btn-info" onclick=" window.open('formularios/Formulario_005_-_RENOVACION_DIBUJOS_y_MODELOS_INDUSTRIALES_-_Version_3.0.docx','_self')">Ley 1630/2000
            </button>

            <h2>PLAZO DE LA TRAMITACIÓN</h2>
            <p>
              El plazo de tramitación administrativa para la obtención de una Concesión y/o Título de Registro de Dibujo y Modelo Industrial, es de 6 meses a 1 año dependiendo del impulso procesal de la parte interesada (solicitante y/o Agente de Propiedad Industrial).
            </p>

            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    FORMULARIOS PARA EL REGISTRO
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick=" window.open('formularios/Formulario_003_-_REGISTRO_DIBUJOS_y_MODELOS_INDUSTRIALES_-_Version_3.0 (1).docx','_self')">Ley 1630/2000
                    </button>
                    <button type="button" class="btn btn-info" onclick=" window.open('formularios/Formulario_005_-_RENOVACION_DIBUJOS_y_MODELOS_INDUSTRIALES_-_Version_3.0.docx','_self')">Ley 1630/2000
                    </button>
                  </div>
                </div>
              </div>
            </div>


            <h2>CONDICIONES PARA SU PROTECCIÓN</h2>
            <p>
              <b>Nuevo u original:</b>  <br>
              El Dibujo y Modelo Industrial debe ser de creación  independiente y que difiera de manera  significativa de diseños similares  ya conocidos.
            </p>
            <p>
              <b>Aplicación industrial:</b>  <br>
              Cuando el producto pueda ser utilizado o fabricado en cualquier industria, es decir, que sirva de tipo para su fabricación y reproducción en serie.
            </p>
            <p>
              <b>No se considerará Nuevo:</b>
            </p>
            <ol>
              <li>
                Si no se diferencia de sus similares.
              </li>
              <li>
                Si antes de la fecha  de su pedido de registro , o de la fecha de prioridad válidamente reivindicada, se  ha hecho accesible al público en cualquier país, y en cualquier momento, mediante su descripción, utilización o por cualquier otro medio. No se considerará que un dibujo  o modelo es conocido por el  público por la circunstancia de que en los seis mese anteriores a la fecha de su depósito haya  figurado en una exposición oficial u oficialmente reconocida.
              </li>
              <li>
                Por el solo hecho de presentar diferencias secundarias en el aspecto con otros anteriores o referir a distintos géneros de productos.
              </li>
            </ol>
            


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
