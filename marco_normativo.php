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
      <div class="float-left information-header" id="head_derechoautor">
        


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
          <div><a href="#">Inicio</a> / <a href="institucional.php">Institucional</a> / Marco Normativo</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Marco Normativo de la Propiedad Intelectual</h1>
            <div class="lista">
              <ul>
                <!--li class="li-principal">Institucional</li>
                <li class="li-principal"><a href="insitucional.php" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li-->
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            
            <h2 class="inicial" style="cursor: pointer;">MARCO NORMATIVO DE LA PROPIEDAD INTELECTUAL EN PARAGUAY</h2>

            <h4 class="inicial" data-toggle="collapse" data-target="#demo" style="cursor: pointer;">+ LEYES</h4>
            <div id="demo" class="collapse">
              <p><b>Constitución / Ley básica</b></p>
              <ul>
                <li>
                  <?php 
                    $nombre_ley = "Constitución Política de la República de Paraguay (1992)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>
              </ul>

              <p><b>Principales leyes de PI: adoptadas por el Poder Legislativo</b></p>
              <ul>
                <li>
                  <?php 
                    $nombre_ley = "Ley N° 1.630-2000 de Patentes de Invenciones (modificada por última vez por la Ley N° 2.593-2005) (2005)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley N° 1.294-1998 de Marcas (1998)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley N° 1328-1998 de Derecho de Autor y Derechos Conexos (1998)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 385-1994 de Semillas y Protección de Cultivares (1994)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 868-1981 de Dibujos y Modelos Industriales (1981)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

              </ul>


              <p><b>Leyes relativas a la PI: adoptadas por el Poder Legislativo</b></p>
              <ul>
                <li>
                  <?php 
                    $nombre_ley = "Ley N° 4.001-2010 que declara al Arpa Paraguaya Instrumento Símbolo de la Cultura Musical Nacional (2010)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 3.440-2008 que modifica varias disposiciones de la Ley Nº 1.160/1997, Código Penal (2008)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley N° 3.051-2006 sobre Nacional de Cultura (2006)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 1.160-97, Código Penal (1997)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>
  
            </div>
            <div style="height: 20px;"></div>
            <hr/>




            <h4 class="inicial" data-toggle="collapse" data-target="#demo2" style="cursor: pointer;">
            + NORMAS Y REGLAMENTOS
            </h4>
            
            <div id="demo2" class="collapse">
              <p><b>Propiedad intelectual</b></p>
              <ul>
                
                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 460-2013, por el cual se Reglamenta la Ley Nº 4798-12 que Crea la Dirección Nacional de Propiedad Intelectual (DINAPI) (2013)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 6.780-11 por el cual se Reglamenta el Capítulo IV 'De los Derechos de Remuneración Compensatoria' de la Ley Nº 1.328-98 'De Derecho de Autor y Derechos Conexos' (2011)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto N° 8.392-2006 por el cual se Reconoce a la Especie Stevia Rebaudiana (Bertoni) Bertoni-Ka'a He'e como Originaria de Paraguay, teniendo en cuenta su Descubrimiento, Clasificación Taxonómica Botánica y Determinación del Principio Activo y declarar de Interés Agrícola, como Rubro de Diversificación de la Producción Agrícola (2006)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 5.241-2005 por el cual se actualizan los montos de las Tasas previstas en el Artículo 85 de la Ley Nº 1.630-2000, 'De Patentes de Invenciones' (2005)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto N° 14.201-2001 por el cual se reglamenta la Ley N° 1.630-00 de Patentes de Invenciones (2001)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 7.797-00 por el cual se reglamenta la Ley Nº 385-94 de Semillas y Protección de Cultivares (2000)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 5.159-1995 por el cual se reglamenta la Ley Nº 1.328-1998 de Derecho de Autor y Derechos Conexos (1999)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 22.365-1998 por el cual se reglamenta la Ley Nº 1.294-1998 de Marcas (1998)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Decreto Nº 30.007-1982 por el cual se reglamenta la Ley Nº 868-1981 de Dibujos y Modelos Industriales (1982)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>



              </ul>
     
            </div>
            <div style="height: 20px;"></div>
            <hr/>



          
            <h4 class="inicial" data-toggle="collapse" data-target="#demo3" style="cursor: pointer;">
              + APROBACIÓN DE TRATADOS
            </h4>
            <div id="demo3" class="collapse">
              <p><b>Leyes / Decretos</b></p>
              <ul>
                
                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 1.582-2000 que aprueba el Tratado de la Organización Mundial de la Propiedad Intelectual (OMPI) sobre Derecho de Autor (2000)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 1.583-2000 que aprueba el Tratado de la Organización Mundial de la Propiedad Intelectual (OMPI) sobre Interpretación o Ejecución y Fonogramas (2000)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley N° 988-1996 que aprueba el Convenio Internacional para la Protección de las Obtenciones de Vegetales (1996)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 912-1996 que aprueba el Protocolo de Armonización de Normas sobre la Propiedad Intelectual en el Mercosur, en materia de Marcas, Indicaciones de Procedencia y Denominaciones de Origen (1996)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 300-1994 que aprueba el Convenio de Paris para la Protección Industrial y sus Revisiones y Enmiendas (1994)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 444-1994 que ratifica el Acta Final de la Ronda de Uruguay del GATT (1994)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 12-91 que aprueba la Adhesión de la República al Convenio de Berna para la Protección de las Obras Literarias y Artísticas del 9 de septiembre de 1886, Revisado en Paris en 1971 y Enmendado en 1979 (1991)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

                <li>
                  <?php 
                    $nombre_ley = "Ley Nº 247-1970 que aprueba la Adhesión de Paraguay al 'Convenio de Berna para la Protección de las Obras Literarias y Artísticas' (1970)";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>

              </ul>
            </div>
            <div style="height: 20px;"></div>
            <hr/>





            <h4 class="inicial" data-toggle="collapse" data-target="#demo4" style="cursor: pointer;">
              + ADHESIÓN A LOS TRATADOS
            </h4>
            <div id="demo4" class="collapse">
              
       
            </div>
            <div style="height: 20px;"></div>
            <hr/>





            <h4 class="inicial" data-toggle="collapse" data-target="#demo5" style="cursor: pointer;">
              + OTROS ENLACES
            </h4>
            <div id="demo5" class="collapse">
              <ul>
                
                <li>
                  <?php 
                    $nombre_ley = "Guía de Oficinas de Propiedad Intelectual";
                  ?>
                  <a href="institucional/ompi/<?php echo $nombre_ley;?>.pdf" class="texto-normal" target="_blank">
                    <?php echo $nombre_ley;?>
                  </a>
                </li>
                
              </ul>
            </div>
            <div style="height: 20px;"></div>
            <hr/>



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
