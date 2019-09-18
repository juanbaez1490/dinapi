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
      <div class="float-left information-header" id="head_marcas">
        


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
          <div><a href="#">Inicio</a> / <a href="index.php">Marcas</a> / Aprender</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Marcas</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal"><a href="marcas_aprender.php" class="menu_lateral">APRENDER</a></li>
                <li class="li-secundario">Qué es una marca</li>
                <li class="li-secundario">Derechos</li>
                <li class="li-secundario">Casos Exitosos</li>
                <li class="li-secundario">Ley de Marcas</li>
                <li class="li-principal"><a href="marcas_registrar.php" class="menu_lateral">REGISTRAR</a></li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            <h2 class="inicial">¿QUÉ ES UNA MARCA?</h2>
            <p>
              Es todo signo que identifica a un producto o servicio en el mercado.
              Por lo tanto, una Marca puede ser considerada como una herramienta de comunicación usada por el productor o prestador de servicios para atraer al público.
            </p>

            <h2>¿POR QUÉ ES IMPORTANTE UNA MARCA?</h2>
            <p>
              La Marca juega un papel preponderante y esencial en el proceso competitivo, hoy día es imposible pensar que un negocio, ya sea grande o pequeño, pueda llegar a trabajar sin propaganda, lo cual es posible llevar a cabo a través de las marcas. Los consumidores relacionan las marcas, con ciertos productos y servicios, por lo que el prestigio y la reputación que se asocian a las mismas son trascendentales para la elección de uno u otro producto. Si el producto o servicio tiene buena acogida, la marca se destacará de entre las demás, y por ende será más conocida, aumentando el valor global del producto o servicio, así como el de otros productos o servicios que lleven la misma Marca.
            </p>

            <h2>¿PARA QUÉ REGISTRAR UNA MARCA?</h2>
            <p>
              Para obtener el uso de manera exclusiva con lo cual se podrá impedir que otras personas o empresas comercialicen marcas idénticas o similares para los mismos productos o servicios.
            </p>

            <h2>VIGENCIA DE LA MARCA</h2>
            <p>
              La Marca tendrá una duración de 10 (diez) años a contar desde la fecha de concesión y podrá ser renovada indefinidamente, por períodos consecutivos de igual duración.
            </p>

            <h2>ALCANCE</h2>
            <p>
              El alcance de los registros marcarios es exclusivamente territorial, es decir las Marcas registradas en Paraguay tienen validez sólo en el territorio de Paraguay. Y si quieres protección en otros países también debes obtener el registro en dichos países.
            </p>

            <h2>¿CÓMO SABER EN QUÉ CLASE REGISTRAR UNA MARCA?</h2>
            <p>
              Esta se desprende de la Clasificación Internacional de Productos y Servicios, la cual distingue 34 clases de productos, y 11 clases de servicios, los cuales a los efectos del registro de la marca podrá solicitarse conforme al siguiente nomenclador:
            </p>
            <button type="button" class="btn btn-info">Ver Clasificación de Marcas</button>

            <h2>¿PUEDO VENDER DE LA MARCA?</h2>
            <p>
              En efecto como cualquier título de propiedad la marca puede venderse, a título oneroso o cederse a título gratuito, este trámite se realizará mediante escritura pública la cual posteriormente deberá inscribirse ante la Dinapi. <br><br>
              También el titular podrá otorgar licencia de uso de la marca previamente inscripta y el contrato de licencia deberá registrarse ante la Dinapi.

            </p>

            <h2>SIGNOS QUE PUEDEN CONSTITUIR UNA MARCA</h2>
            <p>
              Un requisito esencial, que permite el registro de un signo como marca, es la capacidad distintiva de éste, a través de la clara individualización hecha por parte del público consumidor. <br><br>
              Nuestra Ley de Marcas establece en el Artículo 1, Ley 1294/1998: <br>
              “Son marcas todos los signos que sirvan para distinguir productos o servicios. Las marcas podrán consistir en una o más palabras, lemas, emblemas, monogramas, sellos, viñetas, relieves; los nombres, vocablos de fantasía, las letras y números con formas o combinaciones distintas; las combinaciones y disposiciones de colores, etiquetas, envases y envoltorios. Podrán consistir también en la forma, presentación o acondicionamiento de los productos o de sus envases o envolturas, o de los medios o lugar de expendio de los productos o servicios correspondientes. Este listado es meramente enunciativo.”. 
            </p>


            
            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    LEGISLACIÓN NACIONAL SOBRE MARCAS
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/LEY_1294_98.pdf','_blank')">Ley 1294/98</button>
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Decreto_22365_98.pdf','_blank')">Decreto Reglamentario 22365/98</button>
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
