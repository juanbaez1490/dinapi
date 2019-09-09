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
      <div class="float-left information-header" id="head_patentes">
        

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
          <div><a href="#">Inicio</a> / <a href="index.php">Patentes</a> / Aprender</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Patentes</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal">APRENDER</li>
                <li class="li-principal">REGISTRAR</li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            <h2 class="inicial">¿QUÉ ES UNA PATENTE?</h2>
            <p>
              Una Patente es un derecho exclusivo, de carácter temporal, que concede el Estado sobre una INVENCIÓN, a través del otorgamiento de un documento oficial. <br><br>
              El mencionado documento confiere el derecho al inventor de impedir que alguien copie, utilice, distribuya o venda la invención sin su permiso.<br><br>
              Las Patentes forman parte de la “Propiedad Intelectual”, siendo una forma jurídica para la protección de un tipo de creación de la mente denominado  “INVENCIONES”.<br><br>
              El principio en el cual se basa el sistema de las patentes es que, al otorgar el monopolio de implementación del invento, el Estado fomenta la invención.
            </p>

            <h2>¿QUÉ ES UN INVENTO?</h2>
            <p>
              Es el producto o proceso que ofrece una nueva manera de hacer algo, o la solución técnica a un problema. <br><br>
              Invento o invención (del latín invenire, "encontrar" -véase también inventio) es un objeto, técnico o proceso que posee características novedosas transformadoras. Algunas invenciones también representan una creación innovadora sin antecedentes en la ciencia o la tecnología, que amplían los límites del conocimiento humano.

            </p>

            <h2>¿QUÉ NO PUEDE PATENTARSE?</h2>
            <p>
              Existen inventos que no pueden ser objeto de la concesión de una Patente, porque atentan por ejemplo contra el medio ambiente, la salud, la ética, la moral, la vida de las personas y animales. <br><br>
              Son materias excluidas de protección por patente las plantas y los animales excepto los microorganismos, y los procedimientos esencialmente biológicos para la producción de plantas o animales, que no sean procedimientos no biológicos o microbiológicos. <br><br>
              Tampoco podrán ser objeto de una nueva patente, los productos o procedimientos comprendidos en el estado de la técnica, conforme a lo establecido en esta ley, por el simple hecho de atribuírsele un uso distinto al que está comprendido en la patente inicial. <br><br>
              Por ejemplo, si se solicitara el registro de patente de invención para un nuevo medicamento o principio activo útil para tratar el dolor de cabeza y posteriormente se constata de que el mismo es útil además para tratar una afección cardiaca, no se podría solicitar una segunda patente por el mismo medicamento.
            </p>
            <p>
              La Ley de Patentes de Invenciones también establece que <b>no considera como inventos</b>:
            </p>
            <ul>
              <li>
                Simples descubrimientos, teorías científicas, métodos matemáticos.
              </li>
              <li>
                Creaciones puramente estéticas.
              </li>
              <li>
                Esquemas, planes, principios o métodos económicos, de negocios, de anuncios o de publicidad y los referidos a actividades puramente mentales o intelectuales o a materia de juego.
              </li>
              <li>
                Programas de computación aislados.
              </li>
              <li>
                Métodos diagnósticos, terapéuticos, quirúrgicos.
              </li>
              <li>
                Diferentes formas de reproducir la información.
              </li>
            </ul>

            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    LEGISLACIÓN NACIONAL SOBRE PATENTES
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick=" window.open('leyes/Ley_1630_2000.pdf','_blank')">Ley 1630/2000
                    </button>
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
