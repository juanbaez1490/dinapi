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
          <div><a href="#">Inicio</a> / <a href="index.php">Patentes</a> / Registrar</div>
        </div>
        <div class="row">
          <div class="col-md-3 sidebar-links mt-5">
            <h1>Patentes</h1>
            <div class="lista">
              <ul>
                <li class="li-principal">BUSCAR E INVESTIGAR</li>
                <li class="li-principal">APRENDER</li>
                <!--li class="li-secundario">Qué es una marca</li>
                <li class="li-secundario">Derechos</li>
                <li class="li-secundario">Casos Exitosos</li>
                <li class="li-secundario">Ley de Marcas</li-->
                <li class="li-principal">REGISTRAR</li>
                <li class="li-principal">SEGUIR</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 mt-5 information-texto">
            
            <h2 class="inicial">PASOS  PARA OBTENER UNA PATENTE</h2>

            <h4>1. PRESENTACIÓN DE SOLICITUD</h4>
            <p>
              Las solicitudes de registro de Patentes deberán ser presentadas en Mesa de Entrada de la Dirección Nacional de Propiedad Intelectual (Avda. España Nº 323 casi Estados Unidos). <br><br>
              Los interesados o sus Agentes deberán completar los formularios que se encuentran en la página web www.dinapi.gov.py en quintuplicado con todos los datos obligatorios en ellos requeridos. El formulario deberá estar firmado por el solicitante y su patrocinante o apoderado según fuere el caso. <br><br>
              El patrocinio de un Agente de la Propiedad Industrial es obligatorio. <br><br>
              Junto con los formularios, deberá ir el documento técnico en triplicado (una copia impresa y dos copias en formato digital, tipo de documento WORD),  en el cual conste la descripción técnica y detallada del producto o proceso que se quiere patentar.
            </p>

            <p><b>El documento técnico comprende:</b></p>
            <ul>
              <li>La denominación de la invención.</li>
              <li>  El campo técnico de la invención.</li>
              <li> El estado de la técnica.</li>
              <li>El problema del estado de la técnica que resuelve la invención.</li>
              <li>La descripción detallada del invento.</li>
              <li>Los dibujos.</li>
              <li>El resumen.</li>
              <li>Las reivindicaciones.</li>
            </ul>
            <p>
              Las reivindicaciones deben definir exactamente el invento, delimitando lo que será protegido con la patente,  determinando su alcance. <br><br>
              Lo que no está reivindicado no estará protegido por la patente una vez concedida.
            </p>
            <p>
              Algunas consideraciones sobre las reivindicaciones en el marco del proceso de patentabilidad de una invención:
            </p>
            <ul>
              <li>Las reivindicaciones definen el objeto cuya protección se busca.</li>
              <li> Delimitan el alcance del derecho otorgado.</li>
              <li>Deben ser claras, concisas y estar fundadas en la Memoria Descriptiva sin excederla.</li>
            </ul>
 
            <h4>2.       PERÍODO DE SIGILO</h4>
            <p>
              Es el tiempo durante el cual se mantiene en secreto la solicitud de la Patente, por un período de 18 meses, contados desde la fecha de presentación de la solicitud de patente o desde la fecha de presentación de la solicitud prioritaria si se hubiese invocado un derecho de prioridad. <br><br>
              El acceso al público está restringido durante este periodo. <br><br>
              Al cumplirse el plazo de dieciocho meses, la Dirección de la Propiedad Industrial dispondrá de oficio que la solicitud se haga pública y ordenará su publicación.     <br><br>     
              El solicitante podrá pedir que se haga pública la solicitud antes de cumplirse el plazo indicado.<br><br> 
              Toda solicitud de patente se mantendrá en secreto hasta la publicación.
            </p>

            <h4>3.       PROCEDIMIENTOS</h4>
            <p>
              Cuando la Dirección de Patentes recibe una solicitud de Patentes, la procesa de acuerdo a lo establecido en nuestra legislación nacional. <br><br>
              Las etapas principales del procedimiento son:
            </p>
            <p>
              <b>Examen de forma</b> <br><br>
              Después de presentada la solicitud de patentes se realiza un examen de forma destinado a verificar que se hayan acompañado los documentos que correspondan y que la solicitud cumpla los requisitos formales mínimos para continuar con la tramitación. En el caso de constatarse cualquier omisión o deficiencia, el solicitante deberá subsanar dicha situación realizando las correcciones, aclaraciones o acompañando los documentos pertinentes, según fuere el caso, en el plazo de 60 días hábiles, bajo apercibimiento de considerar abandonada la solicitud de pleno derecho y archivarla de oficio.
            </p>
            <p>
              <b>Primera publicación:</b> <br><br>
              En el caso de aprobarse el examen de forma, la Dirección de Patentes emitirá un Edicto de Publicación de la solicitud, que deberá ser publicado por el solicitante en dos diarios de gran circulación por el periodo de 5 días en cada diario. La DINAPI a su vez publicará dicho edicto en su Boletín mensual de Patentes.
            </p>
            <p>
              <b>Examen de fondo:</b> <br><br>
              La Dirección de  Patentes a través de la Asesoría Técnica de Patentes  realizará el examen de fondo de la solicitud a fin de determinar si la invención reúne los requisitos de novedad, nivel inventivo y aplicación industrial y demás exigencias de patentabilidad establecidos en la legislación para el otorgamiento de la patente. También verificará si la solicitud satisface el requisito de unidad de la invención. El examen de fondo se hará previo pago de la tasa establecida y si, transcurridos tres años de la solicitud de patente, el peticionante no la abonase, la solicitud se considerará desistida.
            </p>

            <h4>4. CONCESIÓN</h4>
            <p>
              Una vez cumplidos todos los requisitos establecidos en la LEY, la Dirección General de Propiedad Industrial otorgará el título de Patentes.
            </p>

            <h4>5. PUBLICACIÓN</h4>
            <p>
              La Dirección de Patentes emitirá un Edicto de Publicación de Concesión de la Patente, que deberá ser publicado por el solicitante en dos diarios de gran circulación por el periodo de 5 días en cada diario. La DINAPI a su vez publicará dicho edicto en su Boletín mensual de Patentes. <br><br>
              La Dirección de Patentes notificará al solicitante en cada una de estas etapas si fuese necesario, para que este se adecue o presente la documentación requerida según lo establecido en la legislación vigente. <br><br>
              El solicitante deberá adecuarse a los requerimientos solicitados mediante la presentación en soporte escrito de su contestación.
            </p>
            
            <div class="row">
              <div class="articulos-secondary col-md-12 col-sm-12">
                <div class="articulos-secondary-content">
                  <div class="articulos-title">
                    FORMULARIOS PARA REGISTRO DE PATENTES
                  </div>
                  <div class="articulos-descripcion">
                    <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_004_-_PATENTES_-_Version_3.0.docx';">
                      Formulario de Registro
                    </button>
                    <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_007_-_PROCESAMIENTO_de_DATOS_-_Version_3.0.doc';">
                      Formulario de Procesamiento de Datos
                    </button>
                    <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_016_-_ANEXO_INVENTORES_Patentes_-_Version_3.0.doc';">
                      Formulario de Anexo de Inventores
                    </button>
                    <button type="button" class="btn btn-info" onclick="location.href='formularios/Formulario_025_-_ANEXO_REDUCCION_DE_TASAS_PATENTES_Version_3.0.doc';">
                      Anexo de Reducción de Tasas
                    </button>
                  </div>
                </div>
              </div>
            </div>


            <h2>CONDICIONES DE PATENTABILIDAD</h2>
            <p>
              Las invenciones pueden ser tan sencillas como un sujetapapeles o consistir en algo tan complicado como un robot, pero siempre deberán cumplir ciertas condiciones de patentabilidad, tales como:
            </p>
            <p>
              <b>1) La Novedad:</b> La invención debe contener una característica novedosa que no forme parte de los conocimientos existentes en el ámbito técnico con el que se relaciona. En la solicitud, el inventor debe describir la invención de manera detallada y compararla con las tecnologías previas existentes en el campo de la invención para demostrar su carácter novedoso. <br><br>
              Antes de solicitar una Patente, se insta a los inventores a hacer investigaciones en el campo técnico de sus invenciones para asegurarse de que nadie haya solicitado anteriormente una patente para la misma invención. No es fácil llevar a cabo una búsqueda de Patente completa, por lo que conviene pedir ayuda a un profesional durante esa etapa.
            </p>
            <p>
              <b>2) El Nivel inventivo (no obvio):</b> Se considerará que una invención tiene nivel inventivo si para una persona capacitada o versada en la materia técnica correspondiente a la invención, no resulta obvia, ni deriva de manera evidente de lo que ya existe en el mundo.
            </p>
            <p>
              <b>3) La Aplicación Industrial (Utilidad):</b> La invención puede fabricarse o ser utilizada en cualquier rama de la industria, o tiene un uso práctico; no puede limitarse a una idea o una teoría. Si la invención se refiere a un producto, es necesario que alguien sea capaz de fabricar dicho producto. <br><br>
              Si la invención trata sobre un proceso, entonces tiene que ser posible llevar a cabo dicho proceso. Por ejemplo, una máquina de tiempo puede ser una gran idea, pero a no ser que un inventor fabrique realmente una máquina que permita a las personas viajar en el tiempo, la mera idea de una máquina de tiempo no se puede patentar.
            </p>




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
