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

      <header>
        <img src="img/logo.png" class="center-block col-md-2 mb-2 mt-2">
      </header>
      
      <a
        href="#head"
        v-bind:class=" 'navigate ' + (section == 'head' ? 'notShow' : 'show')"
        id="top"
      >
        <i class="fas fa-angle-up fa-5x mr-5"></i>
      </a>

      <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>
      <div class="float-left secondary-header head head_contacto">
        
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
          <div><a href="#">Inicio</a> / Acceso a la Información Pública</div>
        </div>
        <div class="row">
          

          <div class="col-md-12 mt-5 information-texto">

            <h2 class="inicial col-md-10 offset-md-1">
              Acceso a la Información Pública
            </h2>

            <div class="mt-5"></div>

            <div class="row">
              <div class="col-md-4 col-12 offset-md-2 float-left eje-box-outer grid">
                <figure class="eje-box-inner effect-apollo" id="boxsup-2">
                  <div class="icono-eje mt-5 pl-2 pr-2">
                    <!--span class="fas fa-file-signature"></span-->
                    <div class="texto-eje h2">
                      LEY N° 5.282/2014 DE LIBRE ACCESO CIUDADANO A LA INFORMACIÓN PÚBLICA Y TRANSPARENCIA GUBERNAMENTAL
                    </div>
                  </div>
                  <figcaption>
                    <p>
                      
                    </p>
                    <a href="https://informacionpublica.paraguay.gov.py/public/ley_5282.pdf">Vea más</a>
                  </figcaption>
                </figure>
              </div>

              <div class="col-md-4 col-12 float-left eje-box-outer grid">
                <figure class="eje-box-inner effect-apollo" id="boxsup-1">
                  <div class="icono-eje mt-5 pl-2 pr-2">
                    <!--span class="fas fa-user-friends"></span-->
                    <div class="texto-eje h2">
                      LEY 5189/2014 DE PROVISIÓN DE INFORMACIÓN EN EL USO DE LOS RECURSOS PÚBLICOS
                    </div>
                  </div>
                  <figcaption>
                    <p>
                      
                    </p>
                    <a href="https://www.sfp.gov.py/sfp/archivos/documentos/Ley%205189%202014_8n4kfexc.pdf">Vea más</a>
                  </figcaption>
                </figure>
              </div>
            </div>
            

            <hr />


          </div>
        </div>
      </div>
      

      <?php 
        include("footer.php");
      ?>

      
    </div>
  </body>
</html>
