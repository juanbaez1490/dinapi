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
          <div><a href="#">Inicio</a> / <a href="index.php">Marcas</a> / Registrar</div>
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
            <h2 class="inicial">CLASIFICACIÓN DE REGISTROS DE MARCA</h2>
            <p>
              Antes de registrar una nueva marca, debemos tener claro en qué categoría estará clasificada.
              <br><br>
              La clasificación se desprende de la Clasificación Internacional de Productos y Servicios, la cual distingue 34 clases de productos, y 11 clases de servicios, los cuales a los efectos del registro de la marca podrá solicitarse conforme al siguiente nomenclador:
            </p>
            <button type="button" class="btn btn-info">Ver Clasificación de Marcas</button>

            <h2>PASOS PARA REGISTRAR UNA MARCA</h2>
            <p>
              Una vez escogida la marca pretendida a registro se deberá realizar una búsqueda vía web o en el sistema informático disponible en el Departamento de Atención al Ciudadano respecto a la disponibilidad o no de la marca. 
            </p>

            <h4>1.Presentación de Solicitud</h4>
            <p>
              Las solicitudes de registro de Marcas deberán ser presentadas en la Mesa de Entrada de la Dirección Nacional de Propiedad Intelectual DINAPI (sito en Avenida España Nº 323 casi Estados Unidos – Asunción). <br><br>
              Los interesados o sus Agentes deberán completar los formularios expedidos por la Dirección General de la Propiedad Industrial.
              <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_001_-_REGISTRO_de_MARCAS_-_Version_3.0.docx';">
                Formulario de Registro
              </button>
              <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_015_-_ANEXO_TITULARES_Marcas_-_Version_3.0.doc';">
                Anexo de Titulares
              </button>
            </p>

            <h4>2.Publicación de solicitud</h4>
            <p>
              Abonada la tasa de presentación equivalente a dos jornales mínimo vigente, el interesado o su Agente, en un plazo de 10 días máximo podrá retirar la orden de publicación, la que deberá publicarse en la gaceta de la Dinapi o en un diario de gran circulación o en uno especializado, por tres días consecutivos.

            </p>

            <h4>3.Oposición/es de terceros:</h4>
            <p>
              Una vez publicada la Marca, a partir de la última publicación hecha se esperan 60 días hábiles para que terceros puedan deducir oposición contra la solicitud, si es que se ven afectados en sus derechos. <br><br>
              Cumplidos los requisitos legales y vencidos los plazos establecidos en la Ley de Marcas, se realiza el examen de fondo para ver si la Marca cumple con los requisitos establecidos en la mencionada ley e informa al superior.
            </p>

            <h4>4.Concesión de la marca</h4>
            <p>
              El Director de Marcas de concordar con el informe de fondo respecto a la falta de antecedentes y prohibiciones emitirá un Dictamen, y el expediente pasará a consideración de la Dirección General. <br><br>
              De esta manera, la Dirección General de la Propiedad Industrial concede el Registro de Marca.
            </p>

            <h2>DURACIÓN DE LOS TRÁMITES</h2>
            <p>
              La tramitación para obtener el registro de una Marca tiene un plazo aproximado de 10 meses a partir de la fecha de presentación. 
              <br><br>
              La Dirección General de la Propiedad Industrial expide un Certificado de Registro de la Marca el cual contiene: fecha de concesión, fecha de vencimiento, denominación de la Marca, nombre del titular de la Marca, y la clase que ampara.
            </p>

            <h2>¿QUIÉN PUEDE SOLICITAR EL REGISTRO DE LA MARCA?</h2>
            <ul>
              <li>
                <b>Persona física</b>, bajo patrocinio (se requiere copia autenticada de cédula de identidad) o mediante poder.
              </li>
              <li>
                <b>Persona jurídica</b>, mediante poder
              </li>
            </ul>
            <p>Ambas por intermedio de una Agente de la Dinapi.</p>
            <p>
              En los casos que el Agente actúe mediante poder, este deberá ser inscripto ante la Dinapi, y de acuerdo al tipo de sociedad se requerirá la documentación pertinente, a saber:
            </p>
            <ol>
              <li>
                Personas físicas.
              </li>
              <li>
                Personas físicas o jurídica extranjera.
              </li>
              <li>
                Personas jurídicas nacionales.
              </li>
              <li>
                Sociedad de Responsabilidad Limitada.
              </li>
              <li>
                Sociedad Anónima.
              </li>
              <li>
                Asociaciones civiles.
              </li>
              <li>
                Fundaciones.
              </li>
              <li>
                Entidades públicas.
              </li>
              <li>
                Universidades.
              </li>
            </ol>



            
            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    FORMULARIOS PARA REGISTRO DE MARCAS
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_001_-_REGISTRO_de_MARCAS_-_Version_3.0.docx';">
                      Formulario de Registro
                    </button>
                    <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_015_-_ANEXO_TITULARES_Marcas_-_Version_3.0.doc';">
                      Anexo de Titulares
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
