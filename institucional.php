<!DOCTYPE html>
<html lang="es" class="clear-section">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    
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
      <div class="float-left secondary-header head head_institucional">
        

        <div class="header-secondary-image"></div>
        <div class="titulo-pagina-principal ml-5 mt-2 pl-2 pr-5 col-md-4">
          <div class="font-weight-bold">
            INSTITUCIONAL
          </div>
        </div>
      </div>


      <div
        class="col-md-12 clear-section float-left pt-3 "
        id="secondary-container"
      >
        <div class="clearfix"></div>



        <div class="row">
          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo" id="boxsup-2">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-file-signature"></span-->
                <div class="texto-eje h2">Plan Nacional de Propiedad Intelectual
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="institucional/plan_nacional_2030.pdf.pdf">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo" id="boxsup-1">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-user-friends"></span-->
                <div class="texto-eje h2">Plan Estratégico Institucional
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="institucional/PLAN_ESTRATEGICO_INSTITUCIONAL.pdf">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo" id="boxsup-4">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-user-friends"></span-->
                <div class="texto-eje h2">
                  MECIP
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="#">Vea más</a>
              </figcaption>
            </figure>
          </div>
        </div>





        <div class="row">

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo verde-agua">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-file-signature"></span-->
                <div class="texto-eje h2">Misión, visión y funciones de la DINAPI
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="mision_vision_funciones.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid" onclick="location.href='derecho_autor_registrar.php';">
            <figure class="eje-box-inner effect-apollo celeste-agua">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-file-signature"></span-->
                <div class="texto-eje h2">Organigrama
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="organigrama.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo azul-agua">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-user-friends"></span-->
                <div class="texto-eje h2">Autoridades
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="#">Vea más</a>
              </figcaption>
            </figure>
          </div>
        </div>




        <div class="row">
          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo" id="boxsup-2">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-file-signature"></span-->
                <div class="texto-eje h2">Marco Normativo de la Propiedad Intelectual
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="marco_normativo.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo" id="boxsup-1">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-user-friends"></span-->
                <div class="texto-eje h2">Convenios
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="convenios.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo" id="boxsup-4">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-user-friends"></span-->
                <div class="texto-eje h2">
                  Programas y Proyectos
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="institucional/Proyecto_de_Ley.pdf">Vea más</a>
              </figcaption>
            </figure>
          </div>
        </div>



        <div class="row">

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo verde-agua">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-file-signature"></span-->
                <div class="texto-eje h2">Acceso a la Información Pública
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="informacion_publica.php">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid" onclick="location.href='derecho_autor_registrar.php';">
            <figure class="eje-box-inner effect-apollo celeste-agua">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-file-signature"></span-->
                <div class="texto-eje h2">
                  Webmail
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="https://sts.dinapi.gov.py/adfs/ls/?client-request-id=40a975a2-525f-47e5-9e0a-ca12d21db238&username=&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=estsredirect%3d2%26estsrequest%3drQIIAY2RO2_TUACFc-PUagOIqurAUtGBCena19eJr22JigTn1SaliWhIvESxY8dO6lzHj7QJv4CtQkwdGLoRiaULiD-AlKli7I6EGBBiYiQRCxt8w9EZj77zkBE4QX2A_oDhKiGybQGa1qr9RbCV3ryM3z7uNL6U3qQXW593ruQLcKfnjrq-y_XphPOnc3DfiSI_VHmextEJpUOO2rZrWpxJPZ6edvkPAFwDME8SSZQkhAmSFElEMhGIwiFZIQQrBBpkOSVjIAXKSteCXVO0UAZh2cTGTfLu01wcOXgVNHBn1s_khk0Dr-PTMLpgXgPNjPJaWOkXCvkGqsaZWi_XKFFdP6wKmjHT6q5-QI36oGmVI31S7ZDn7olAhlLPcaTiadvMaW6xLue1M8erO4VxZXCYG-W9Z4W8d9wPnaDWKtXKRbJfjYnYak8Gs1rTHmS9yJhmA7ENO90zCDtPGmIYhn57HB_jqDyplOfMfym-YtilJ4-OFgxLfWvk9q5T4FvqNmLU9XV2E9xL7CZ-pcDl2vKKV7e47y8_vau9f6Hs2XozsVjjcatoj8kUlS2-Ze_H_vCoj4qmcRCGQTgYHuUKEu-4bbGiD8NHkiqcs-CcZb-y4Aeb-Ljxr-Nu0tsYCTJEGYizu4KkioKawfpv0">Vea más</a>
              </figcaption>
            </figure>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer grid">
            <figure class="eje-box-inner effect-apollo azul-agua">
              <div class="icono-eje mt-5 pl-2 pr-2">
                <!--span class="fas fa-user-friends"></span-->
                <div class="texto-eje h2">Concursos
                </div>
              </div>
              <figcaption>
                <p>
                  
                </p>
                <a href="concuros.php">Vea más</a>
              </figcaption>
            </figure>
          </div>
        </div>


        <div class="col-md-1 float-left">
          <!--Navegacion-->
        </div>
      </div>

      <!-- Novedades -->
      <div
        class="col-md-12 clear-section float-left clear-section pb-5 "
        id="noticias"
        v-bind:style=" heightsDivs[3] "
      >

      </div>
      <!-- Fin Novedades -->

      <?php 
        include("footer.php");
      ?>

      
    </div>
  </body>
</html>
