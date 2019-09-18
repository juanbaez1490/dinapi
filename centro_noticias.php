

<?php 
    
    include 'config/config.php';
    $respuesta = $db->query("SELECT * FROM noticia ORDER BY codigo DESC  LIMIT 25");

 ?>



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
      <div class="float-left information-header head2 head_noticias">
        


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
          <div><a href="index.php">Inicio</a> / Centro de Noticias</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Centro de Noticias</h1>
            <div class="lista">
              <h4>
                Últimas Noticias
              </h4>
              <div class="titulo_tarjeta_noticias">
                Titulo de la noticia
              </div>
              <div class="titulo_tarjeta_noticias">
                Titulo de la noticia
              </div>
              <div class="titulo_tarjeta_noticias">
                Titulo de la noticia
              </div>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            

            <?php 
              while($registro = $respuesta->fetch_object()){
                  $codigo = $registro->codigo;
                  $titulo = $registro->titulo;
                  $cuerpo = strip_tags($registro->cuerpo);

            ?>


            <div class="row">
              <div class="col-md-4">
                <a href="noticia.php?codigo=<?php echo $codigo; ?>">
                  <img src="img/noticias/<?php echo $codigo; ?>.jpg" class="img-fluid">
                </a>
              </div>
              <div class="col-md-8">
                <h4 class="noticias-titulo">
                  <a href="noticia.php?codigo=<?php echo $codigo; ?>">
                  <?php 
                    echo $titulo;
                  ?>
                  </a>
                </h4>
                <p class="noticias-epigrafe">
                  <?php 
                    echo substr($cuerpo, 0, 330);
                  ?>...
                </p>
              </div>
            </div>
            <hr />

            <?php 
              } //se cierra el while que cuenta cada noticia
            ?>


    


            

          </div>
        </div>
      </div>
  
      <?php 
        include("footer.php");
      ?>


    </div>
  </body>
</html>
