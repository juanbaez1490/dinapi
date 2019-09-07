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
      <!--ul
        class="list-style-none mt-18 position-fixed text-right mr-5 hidden-md-down"
        v-cloak
        id="navegation"
      >
        <li>
          <a href="#head" class="navigate">
            <span v-bind:class="section == 'head' ? 'show' : 'notShow'">
              <span class="mr-2">Presentación</span> -
            </span>
            <span
              v-bind:class=" 'ml-2 ' + (section == 'head' ? 'saturate1' : 'saturate0') "
              ><i class="far fa-circle"></i
            ></span>
          </a>
        </li>
        <li>
          <a href="#eje" class="navigate">
            <span v-bind:class="section == 'eje' ? 'show' : 'notShow'">
              <span class="mr-2">Ejes Principales</span> -
            </span>
            <span
              v-bind:class=" 'ml-2 ' + (section == 'eje' ? 'saturate1' : 'saturate0') "
              ><i class="far fa-circle"></i
            ></span>
          </a>
        </li>
        <li>
          <a href="#us" class="navigate">
            <span v-bind:class="section == 'us' ? 'show' : 'notShow'">
              <span class="mr-2">Campañas</span> -
            </span>
            <span
              v-bind:class=" 'ml-2 ' + (section == 'us' ? 'saturate1' : 'saturate0') "
              ><i class="far fa-circle"></i
            ></span>
          </a>
        </li>
        <li>
          <a href="#noticias" class="navigate">
            <span v-bind:class="section == 'noticias' ? 'show' : 'notShow'">
              <span class="mr-2">Novedades</span> -
            </span>
            <span
              v-bind:class=" 'ml-2 ' + (section == 'noticias' ? 'saturate1' : 'saturate0') "
              ><i class="far fa-circle"></i
            ></span>
          </a>
        </li>
        <li>
          <a href="#enlaces" class="navigate">
            <span v-bind:class="section == 'enlaces' ? 'show' : 'notShow'">
              <span class="mr-2">Enlaces</span> -
            </span>
            <span
              v-bind:class=" 'ml-2 ' + (section == 'enlaces' ? 'saturate1' : 'saturate0') "
              ><i class="far fa-circle"></i
            ></span>
          </a>
        </li>
      </ul>
      <a
        href="#head"
        v-bind:class=" 'navigate ' + (section == 'head' ? 'notShow' : 'show')"
        id="top"
      >
        <i class="fas fa-angle-up fa-5x mr-5"></i>
      </a-->
      






      <div class="float-left" id="head" v-bind:style="heightsDivs[0]" style="width: 100%; padding-left: 0; padding-right: 0;">
        
        <?php 
          /**
            *Menu Principal
          */
          include($URL_Menu_Principal);
        ?>






        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <!--li data-target="#carouselExampleIndicators" data-slide-to="2"></li-->
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <!--div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')"-->
            <div class="carousel-item active" style="background-image: url('img/industrial.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Propiedad Industrial</h2>
                <p class="lead">Todo lo que constituya progreso en el mundo y demande la creatividad, el ingenio, y la originalidad del ser humano se hallan protegidos por los derechos de Propiedad Intelectual.</p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('img/dautor2.jpg')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Derechos de Autor</h2>
                <p class="lead">Desde el inicio de la humanidad, los seres humanos no han dejado de inventar. De hecho, la mayoría de las cosas que ahora nos rodean fueron inventadas por alguien en el pasado. Sin embargo, estamos tan acostumbrados a utilizarlas, que a menudo no las consideramos como invenciones.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <!--div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Third Slide</h2>
                <p class="lead">This is a description for the third slide.</p>
              </div>
            </div-->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>





        <!--div
          class="float-left mt-4 position-absolute"
          id="eje"
          style="bottom: -1px;margin-left: -1rem;z-index: 100;"
        >
          <a
            href="#eje"
            class="navigate text-secondary"
            v-on:click="anime"
            id="link-us"
          >
            <p class="text-center font-weight-bold mb-0 h6 center-block">
              EJES PRINCIPALES
            </p>
            <div class="col-md-12 mb-2" style="z-index: 100;">
              <img
                src="img/boton-expandir.png"
                id="btn-more"
                class="mt-1 center-block"
                style="width: 10px;"
              />
            </div>
          </a>
        </div-->
      </div>
      <div
        class="col-md-12 clear-section float-left light-section "
        id="eje"
        v-bind:style=" heightsDivs[1] "
      >
        <div class="row">
          <div class="linea-eje"></div>
          <div class="col-12 titulo-eje">
            <h1>
              NUESTROS EJES PRINCIPALES
            </h1>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">

          <div class="col-md-4 col-12 float-left eje-box-outer">
            <div class="eje-box-inner" id="boxsup-2">
              <div class="icono-eje">
                <span class="fas fa-user-friends"></span>
              </div>
              <div class="texto-eje h2">DERECHO DE AUTOR</div>
              <div class="subitem-eje h5 punterolink" onclick="location.href='derecho_autor/index.php';">Ver más</div>
 

            </div>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer">
            <div class="eje-box-inner" id="boxsup-1">
              <div class="icono-eje">
                <span class="far fa-lightbulb"></span>
              </div>
              <div class="texto-eje h2">PROPIEDAD INDUSTRIAL</div>
              <div class="subitem-eje h5 punterolink" onclick="location.href='propiedad_industrial/marcas/index.php';">Marcas</div>
              <div class="subitem-eje h5 punterolink" onclick="location.href='propiedad_industrial/patentes/index.php';">Patentes</div>
              <div class="subitem-eje h5 punterolink" onclick="location.href='propiedad_industrial/dibujos/index.php';">Dibujos y Modelos Industriales</div>
              <div class="subitem-eje h5 punterolink" onclick="location.href='propiedad_industrial/igydo/index.php';">IG&DO</div>
              <div class="subitem-eje h5">Gestiones Administrativas</div>
            </div>
          </div>

          <div class="col-md-4 col-12 float-left eje-box-outer">
            <div class="eje-box-inner" id="boxsup-3">
              <div class="icono-eje">
                <span class="fas fa-file-signature"></span>
              </div>
              <div class="texto-eje h2">OBSERVANCIA</div>
              <div class="subitem-eje h5 punterolink" onclick="location.href='observancia/index.php';">Ver más</div>
             
            </div>
          </div>
        </div>

        <div class="col-md-1 float-left">
          <!--Navegacion-->
        </div>
      </div>

      <!-- Campañas -->
      <div
        class="col-md-12 clear-section float-left light-section "
        id="us"
        v-bind:style=" heightsDivs[2] "
      >
        <!--div class="row">
          <div class="linea-campana"></div>
          <div class="col-12 titulo-campana">
            <h1>
              CAMPAÑAS
            </h1>
            <p class="col-md-7 center-block mt-3">
              Desarrollamos campañas institucionales para informar mejor a la
              ciudadanía y profesionales agentes de marca.
            </p>
          </div>
        </div-->

        <div class="clearfix"></div>





        <div class="campana-first">
          <div
            class="campana-box col-md-6 col-sm-12 pl-md-5 pt-5 pb-5 punterolink"
            id="box-1" c>
            <!--p class="box-title mt-5">Nuevo Horario de Atención</p>
            <p class="box-text">
              Desde el mes de agosto tenemos un nuevo horario de atención al público.
            </p-->
          </div>

          <div class="col-md-3 col-sm-12 campana-second p-0">
            <div class="campana-box col-md-12 min-box" id="box-2" onclick="location.href='https://www.dinapi.gov.py/application/files/8414/9522/0935/PLAN_NACIONAL_DE_LA_PROPIEDAD_INTELECTUAL_PARAGUAY_2030web3_opt_opt.pdf';">
              <!--p class="box-title2">SE DESPLIEGA UNA NUEVA CAMPAÑA</p>
              <p class="box-text2">LEE MAS DE ESTO</p-->
            </div>
            <div class="campana-box col-md-12 min-box" id="box-3">
              <!--p class="box-title2">Lorem ipsum dolor</p>
              <p class="box-text2">LEE MAS DE ESTO</p-->
            </div>
          </div>

          <div class="col-md-3 col-sm-12 campana-second p-0">
            <div class="campana-box col-md-12 min-box punterolink" id="box-4" onclick="location.href='https://tutramiteenlinea.mitic.gov.py/?portal';"
          >
              <!--p class="box-title2">SE DESPLIEGA UNA NUEVA CAMPAÑA</p>
              <p class="box-text2">LEE MAS DE ESTO</p-->
            </div>
            <div class="campana-box col-md-12 min-box" id="box-5">
              <!--p class="box-title2">Lorem ipsum dolor</p>
              <p class="box-text2">LEE MAS DE ESTO</p-->
            </div>
          </div>
        </div>



        <!--div class="campana-first">
          <div class="col-md-3 col-sm-12 campana-second p-0">
            <div class="campana-box col-md-12 min-box" id="box-4">
              <p class="box-title2">NOVEDADES EN LA CAMPAÑA DE LA DINAPI</p>
              <p class="box-text2">LEE MAS DE ESTO</p>
            </div>
            <div class="campana-box col-md-12 min-box" id="box-5">
              <p class="box-title2">PARAGUAY NUEVA LEY</p>
              <p class="box-text2">LEE MAS DE ESTO</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-12 campana-second p-0">
            <div class="campana-box col-md-12 min-box" id="box-6">
              <p class="box-title2">
                Los publicadores tendran una nueva forma de buscar patentes
              </p>
              <p class="box-text2">LEE MAS DE ESTO</p>
            </div>
            <div class="campana-box col-md-12 min-box" id="box-7">
              <p class="box-title2">ASI VIVIMOS EL PRIMER DIA DE CONGRESO</p>
              <p class="box-text2">LEE MAS DE ESTO</p>
            </div>
          </div>
          <div class="campana-third col-md-6">
            <div class="campana-box col-md-12" id="box-8">
              <p class="box-text3">
                EXPOSICION TECNICA DE CONCEPTOS
              </p>
            </div>
            <div class="campana-box col-md-12" id="box-9">
              <p class="box-text4 mt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                diam libero, accumsan id laoreet volutpat, accumsan quis tellus.
                Etiam eget urna arcu. Mauris nec eleifend lectus, quis blandit
                lectus. Phasellus tempus, metus placerat.
              </p>
              <p class="box-text5">CONSIGUE MAS INFORMACION</p>
            </div>
          </div>
        </div-->

        <div class="col-md-1 float-left">
          <!--Navegacion-->
        </div>
      </div>
      <!--Fin Campañas -->

      <!-- Novedades -->
      <div
        class="col-md-12 clear-section float-left clear-section pb-5 "
        id="noticias"
        v-bind:style=" heightsDivs[3] "
      >
        <div class="linea-campana"></div>
        <div class="col-12 titulo-campana">
          <h1>
            NOVEDADES
          </h1>
        </div>
        <div class="noticias">
          <div class="noticias-primary col-md-12">
            <div class="noticias-primary-image col-sm-12"></div>
            <div class="noticias-primary-content col-sm-12">
              <!--div class="noticias-tag pt-1">Alianzas</div-->
              <div class="noticias-title">
                DINAPI REPRESENTA A PARAGUAY ANTE LA REUNIÓN DE PROSUR Y CONSOLIDA COOPERACIÓN INTERNACIONAL
              </div>
              <div class="noticias-date">01/08/2019</div>
              <div class="noticias-resumen pb-1">
 

                El Director Nacional, Dr. Joel Talavera, asiste a la Reunión del
                Comité Directivo de PROSUR que es un proyecto creado como un sistema
                de cooperación técnica y operacional entre las oficinas nacionales de
                Propiedad...
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row" id="noticias-container">
            <div class="noticias-secondary col-md-4 col-sm-12">
              <div class="noticias-secondary-imagen" id="notbox1"></div>
              <div class="noticias-secondary-content">
                <!--div class="noticias-tag">Programas</div-->
                <div class="noticias-title">
                  PROPIEDAD INTELECTUAL EN EL INTERÉS DEL GOBIERNO DE ESTADOS UNIDOS
                </div>
                <div class="noticias-date">01/08/2019</div>
              </div>
            </div>
            <div class="noticias-secondary col-md-4 col-sm-12">
              <div class="noticias-secondary-imagen" id="notbox2"></div>
              <div class="noticias-secondary-content">
                <!--div class="noticias-tag">Leyes</div-->
                <div class="noticias-title">
                  DINAPI CAPACITA A MÁS DE 1000 JÓVENES ESTUDIANTES DE ITAPÚA
                </div>
                <div class="noticias-date">01/08/2019</div>
              </div>
            </div>
            <div class="noticias-secondary col-md-4 col-sm-12">
              <div class="noticias-secondary-imagen" id="notbox3"></div>
              <div class="noticias-secondary-content">
                <!--div class="noticias-tag">Leyes</div-->
                <div class="noticias-title">
                  DINAPI PROMOCIONA LA PRIMERA EDICIÓN DE “FIESTA CREATIVA”L
                </div>
                <div class="noticias-date">01/08/2019</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <button class="center-block mt-5 see-more">VER MÁS</button>
        </div>
      </div>
      <!-- Fin Novedades -->

      <!-- Enlaces de Interes -->
      <div
        class="col-md-12 float-left clear-section light-section "
        id="enlaces"
        v-bind:style=" heightsDivs[4] "
      >
        <div class="col-12 titulo-enlace">
          <h1>
            ENLACES DE INTERES
          </h1>
        </div>
        <div class="owl-carousel mt-4">
          <div>
            <img src="img/logos/inta.png" alt="First slide" />
          </div>
          <div>
            <img src="img/logos/ley5280.png" alt="First slide" />
          </div>
          <div>
            <img src="img/logos/denunciacorrupcion.png" alt="First slide" />
          </div>
          <div>
            <img src="img/logos/portalparaguay.png" alt="First slide" />
          </div>
          
        </div>
      </div>
      <!-- Fin Enalces de Interes -->

      <!-- Mas enlaces -->
      <!--div
        class="col-md-10 float-left clear-section pb-5 pt-5 offset-md-1"
        id="multiples-enlaces"
        v-bind:style=" heightsDivs[3] "
      >
        <div class="row">
          <div class="col-md-3 enlace-inferior">Políticia Institucional</div>
          <div class="col-md-3 enlace-inferior">Reportes Financieros</div>
          <div class="col-md-3 enlace-inferior">Licitaciones Públicas</div>
          <div class="col-md-3 enlace-inferior">Contacto</div>
        </div>
      </div-->
      <!-- Fin Mas Enlaces -->

      <div
        class="col-md-10 float-left clear-section pt-5 pb-15 offset-md-1"
        id="footer"
        v-bind:style=" heightsDivs[3] "
      >
        <div class="row">
          <div class="titulo-footer col-md-12">
            <h1>
              DIRECCION NACIONAL DE PROPIEDAD INTELECTUAL
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
              <!--i class="fa fa-pinterest"></i>
              <i class="fa fa-youtube"></i>
              <i class="fa fa-tumblr"></i-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
