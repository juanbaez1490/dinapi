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
          <div><a href="#">Inicio</a> / <a href="index.php">Indicaciones Geográficas y Denominaciones de Origen</a> / Aprender</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Indicaciones Geográficas y Denominaciones de Origen</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal"><a href="igydo_aprender.php" class="menu_lateral">APRENDER</a></li>
                <li class="li-principal"><a href="igydo_registrar.php" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            <h2 class="inicial">¿QUÉ SON LAS IG Y DO?</h2>
            <p>
              Son nombres de lugares: país, ciudad, región, departamento o localidad, que sirve para designar a un producto originario de algunos de estos, cuya cualidad, reputación o característica deriva de dicho lugar y al medio geográfico en el cual se produce, comprendidos los factores naturales como actividad humana. <br><br>
              También  son  nombres no geográficos con los que se les conoce al producto agrícola o alimenticio que cumplan las mismas condiciones.

            </p>

            <h2>¿PARA QUÉ SIRVEN LAS IG/DO?</h2>
            <p>
              En la actualidad,  los consumidores prestan mayor atención al origen de los productos que desean consumir, incluso a los lugares de donde provienen, además de las cualidades o de las características de los mismos, por lo que las IG/DO cada vez tienen más importancia y más fuerza en el comercio, porque sirven para diferenciar entre uno y otro producto y sobre todo el origen de los mismos. Al otorgar esta seguridad de calidad al producto da a conocer la zona geográfica determinada. <br><br>

              Es así que las IG/DO pueden llegar a ser una herramienta eficaz para dar mayor valor en el mercado al producto. Al hablar de beneficios estamos hablando de ventajas competitivas porque acrecienta valor al producto, aumenta las oportunidades de exportación, y porque no, da fortalecimiento a la marca. Por otro lado, tenemos que las IG/DO dan protección a quien tiene el derecho de usarlo con el registro de las mismas, *dando el derecho de uso, así como el derecho de impedir a quienes no lo pueden usar.
            </p>

            <h2>¿CUÁNTO TIEMPO DURA EL DERECHO DE USO? ¿SE PUEDE RENOVAR?</h2>
            <p>
              El tiempo de duración es de 10 años, renovables por otros 10 años, y así en  lo sucesivo.
            </p>

       


            
            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    LEGISLACIÓN VIGENTE
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Ley_4923_13.pdf','_blank')">Ley_4923_13</button>
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Decreto_1286_19.pdf','_blank')">Decreto_1286_19</button>
                  </div>
                </div>
              </div>
            </div>
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