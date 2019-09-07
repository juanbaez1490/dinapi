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
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/app.css" rel="stylesheet" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/vue.min.js"></script>
    <script src="../js/anime.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script type="text/javascript" src="../js/app.js"></script>
    <link rel="icon" type="image/png" href="../img/icono.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <?php 
      /**
        *Direccionamiento de URL Base
      */
      $URL_Base = "../";

      /**
        *Direccionamiento del Menu Principal
      */
      $URL_Menu_Principal = "../menu_principal.php";
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
          <img src="../img/logo.png" class="col-md-6 col-sm-12" id="img1" />
        </div>
      </div>
      <div
        class="col-md-12 clear-section float-left pt-5 "
        id="information-container"
      >
        <div class="clearfix"></div>
        <div class="col-md-12 bread">
          <div><a href="#">Inicio</a> / <a href="index.php">Derechos de Autor</a> / Registrar</div>
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
            
            <h2 class="inicial" style="cursor: pointer;">REQUISITOS PARA REGISTROS EN LAS DISTINTAS CATEGORÍAS DE DERECHO DE AUTOR</h2>

            <h4 class="inicial" data-toggle="collapse" data-target="#demo" style="cursor: pointer;">+ REQUISITOS PARA REGISTRAR: ACTOS, CONVENIOS Y CONTRATOS</h4>
            <div id="demo" class="collapse">
              <ol>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora o
                  manualmente), en tres copias (podría ser un original y dos fotocopias). La solicitud
                  puede descargarla de la página web de la DINAPI o retirarla de la Unidad de Mesa
                  de Entradas de la Dirección General de Derecho de Autor y Derechos Conexos).
                </li>
                <li>
                  PRESENTAR el documento a ser registrado (encarpetado). Depósito Legal de la obra.
                </li>
                <li>
                  PRESENTAR una fotocopia simple de cédula de identidad.
                </li>
                <li>
                  ABONAR la tasa de cuatro jornales (un jornal: Gs. 70.156).
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por un día en un diario de gran circulación o
  especializado (nosotros le facilitamos el texto), usted selecciona el diario donde hará
  la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, la
  publicación del edicto, sin recortarla, de tal manera a que se aprecie la fecha de
  publicación y en qué diario fue hecha, acompañada de la orden de publicación
  original o fotocopia de la misma, y RETIRAR en ese momento, el Título de
  Concesión del Registro (para Actos, Convenios y Contratos, no existe plazo que
  esperar, es decir, el Título de concesión del registro se prepara inmediatamente, una
  vez presentada la publicación del edicto). 
                </li>
              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de una simple
  autorización.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>




            <h4 class="inicial" data-toggle="collapse" data-target="#demo2" style="cursor: pointer;">+ REQUISITOS PARA REGISTRAR: EDITORIALES MUSICALES</h4>
            <div id="demo2" class="collapse">
              <ol>
                <li>
                  ABONAR TASA (pago previo a su solicitud): 10 (diez) jornales mínimos (1
jornal: Gs. 81.250).
                </li>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora o
manualmente), en dos copias (podría ser un original y una fotocopia). La solicitud
puede descargarla de la página web (Nº de formulario 027) de la DINAPI o retirarla
de la Unidad de Mesa de Entradas de la DGDAC, dependiente de la DINAPI.
                </li>
                <li>
                  PRESENTAR copia autenticada de la siguiente documentación para procesar la
solicitud: 1) Acta de constitución de sociedad o matrícula de comerciante, 2)

Registro Único de Contribuyente, 3) Declaración Jurada de domicilio comercial de
su casa matriz, sucursales, filiales, 4) Acta de asamblea por la cual se designa
director o apoderado, en caso de ser persona jurídica.
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por un día en un diario de gran circulación o
especializado (nosotros le facilitamos el texto), usted selecciona el diario donde hará
la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, la
publicación del edicto, sin recortarla, de tal manera a que se aprecie la fecha de
publicación y en qué diario fue hecha, acompañada de la orden de publicación
original o fotocopia de la misma, y RETIRAR en ese momento, el Título de
Concesión del Registro (para registro de Editoriales Musicales, no existe plazo que
esperar, es decir, el Título de concesión del registro se prepara inmediatamente, una
vez presentada la publicación del edicto).
                </li>
              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de carta poder.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>



          
            <h4 class="inicial" data-toggle="collapse" data-target="#demo3" style="cursor: pointer;">
              + REQUISITOS PARA REGISTRAR: OBRAS DE ARTES PLASTICAS, FOTOGRAFÍAS, ILUSTRACIONES
            </h4>
            <div id="demo3" class="collapse">
              <ol>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora o
manualmente), en tres copias (podría ser un original y dos fotocopias). La solicitud
puede descargarla de la página web de la DINAPI o retirarla de la Unidad de Mesa
de Entradas de la Dirección General de Derecho de Autor y Derechos Conexos.
                </li>
                <li>
                  PRESENTAR la obra impresa (espiralada o encarpetada). Si se trata de esculturas,
depositar fotografías de distintos ángulos de la misma (Depósito Legal de la obra).
                </li>
                <li>
                  PRESENTAR una fotocopia simple de cédula de identidad.
                </li>
                <li>
                  ABONAR la tasa (un jornal hasta diez obras). Un jornal: Gs. 70.156.
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por tres días consecutivos en un diario de gran
circulación o especializado (nosotros le facilitamos el texto), usted selecciona el
diario donde hará la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, las
publicaciones del edicto de los tres días consecutivos, sin recortarlas, de tal manera
a que se aprecie las fechas de publicación y en qué diario fueron hechas,
acompañada de la orden de publicación original o fotocopia de la misma, y
RETIRAR en ese momento, la contraseña para reclamar el Título de Concesión del
Registro, una vez trascurrido el plazo obligatorio.
                </li>
                <li>
                  ESPERAR treinta días hábiles (plazo obligatorio) contados luego de la última fecha
de publicación del edicto.
                </li>
                <li>
                  Una vez trascurridos los treinta días hábiles, y sin existir oposición al registro,
RETIRAR título de concesión del registro, consistente en una Resolución firmada
por el Director General de Derecho de Autor y Derechos Conexos.
                </li>

              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de una simple
autorización.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>





            <h4 class="inicial" data-toggle="collapse" data-target="#demo4" style="cursor: pointer;">
              + REQUISITOS PARA REGISTRAR: OBRAS DRAMÁTICAS, DRAMATICO-
MUSICALES, AUDIOVISUALES Y CINEMATOGRÁFICAS
            </h4>
            <div id="demo4" class="collapse">
              <ol>
                <li>
                  ABONAR TASA (pago previo a su solicitud): 1 jornal mínimo (Gs. 81.252).
                </li>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora o
manualmente), en dos copias (podría ser un original y una fotocopia). (Puede bajarla
de la página WEB de la DINAPI o retirarla de la Unidad de Mesa de Entradas de la
Dirección General de Derecho de Autor y Derechos Conexos). (Formulario Nº 019).
                </li>
                <li>
                  PRESENTAR la obra en un soporte (VHS, DVD, BETACAM, DVCAM, MINI
DV, PEN DRIVE u en otro) - (Depósito Legal de la obra).
                </li>
                <li>
                  PRESENTAR una fotocopia simple de cédula de identidad.
                </li>
                <li>
                  ABONAR tasa (un jornal hasta diez obras) 1 jornal:  Gs. 78.505.
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por tres días consecutivos en un diario de gran
circulación o especializado (nosotros le facilitamos el texto), usted selecciona el
diario donde hará la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, las
publicaciones del edicto de los tres días consecutivos, sin recortarlas, de tal manera
a que se aprecie las fechas de publicación y en qué diario fueron hechas,
acompañada de la orden de publicación original o fotocopia de la misma, y
RETIRAR en ese momento, la contraseña para reclamar el Título de Concesión del
Registro, una vez trascurrido el plazo obligatorio.
                </li>
                <li>
                  ESPERAR treinta días hábiles (plazo obligatorio) contados luego de la última fecha
de publicación del edicto.
                </li>
                <li>
                  Una vez trascurridos los treinta días hábiles, y sin existir oposición al registro,
RETIRAR título de concesión del registro, consistente en una Resolución firmada
por el Director General de Derecho de Autor y Derechos Conexos.
                </li>

              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de una simple
autorización.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>





            <h4 class="inicial" data-toggle="collapse" data-target="#demo5" style="cursor: pointer;">
              + REQUISITOS PARA REGISTRAR: OBRAS EXPRESADAS EN FORMA ESCRITA U ORAL.
            </h4>
            <div id="demo5" class="collapse">
              <ol>
                <li>
                  ABONAR TASA (pago previo a su solicitud): 1 jornal mínimo (Gs. 81.252)
                </li>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora o
manualmente), en dos copias (podría ser un original y una fotocopia). (Puede bajarla
de la página WEB de la DINAPI (formulario Nº 022) o retirarla de la Unidad de
Mesa de Entradas de la DINAPI.
                </li>
                <li>
                  PRESENTAR la obra impresa (espiralada o encarpetada, 4 cuatro ejemplares si la
obra es editada; 1 un ejemplar si la obra es inédita). Depósito Legal de la obra.
                </li>
                <li>
                  PRESENTAR una fotocopia simple de cédula de identidad.
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por tres días consecutivos en un diario de gran
circulación o especializado (nosotros le facilitamos el texto), usted selecciona el
diario donde hará la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, las
publicaciones del edicto de los tres días consecutivos, sin recortarlas, de tal manera
a que se aprecie las fechas de publicación y en qué diario fueron hechas,
acompañada de la orden de publicación original o fotocopia de la misma, y
RETIRAR en ese momento, la contraseña para reclamar el Título de Concesión del
Registro, una vez trascurrido el plazo obligatorio.
                </li>
                <li>
                  ESPERAR treinta días hábiles (plazo obligatorio) contados luego de la última fecha
de publicación del edicto.
                </li>
                <li>
                  Una vez trascurridos los treinta días hábiles, y sin existir oposición al registro,
RETIRAR título de concesión del registro, consistente en una Resolución firmada
por el Director General de Derecho de Autor y Derechos Conexos.
                </li>
              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de una simple
autorización.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>





            <h4 class="inicial" data-toggle="collapse" data-target="#demo6" style="cursor: pointer;">
              + REQUISITOS PARA REGISTRAR: OBRAS MUSICALES, ARREGLOS E
INSTRUMENTACIONES.
            </h4>
            <div id="demo6" class="collapse">
              <ol>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora o
manualmente), en tres copias (podría ser un original y dos fotocopias). (Puede
bajarla de la página WEB de la DINAPI o retirarla de la Unidad de Mesa de
Entradas de la Dirección General de Derecho de Autor y Derechos Conexos).
                </li>
                <li>
                  PRESENTAR la PARTITURA COMPLETA, en forma impresa (espiralada o
encarpetada). DEPÓSITO LEGAL DE LA OBRA.
                </li>
                <li>
                  PRESENTAR una fotocopia simple de cédula de identidad.
                </li>
                <li>
                  ABONAR tasa (un jornal hasta diez obras) 1 jornal:  Gs. 78.505.
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por tres días consecutivos en un diario de gran
circulación o especializado (nosotros le facilitamos el texto), usted selecciona el
diario donde hará la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, las
publicaciones del edicto de los tres días consecutivos, sin recortarlas, de tal manera a que se aprecie las fechas de publicación y en qué diario fueron hechas, acompañada de la orden de publicación original o fotocopia de la misma, y RETIRAR en ese momento, la contraseña para reclamar el Título de Concesión del
Registro, una vez trascurrido el plazo obligatorio.
                </li>
                <li>
                  ESPERAR treinta días hábiles (plazo obligatorio) contados luego de la última fecha
de publicación del edicto.
                </li>
                <li>
                  Una vez trascurridos los treinta días hábiles, y sin existir oposición al registro,
RETIRAR título de concesión del registro, consistente en una Resolución firmada
por el Director General de Derecho de Autor y Derechos Conexos.
                </li>

              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de una simple
autorización.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>




            <h4 class="inicial" data-toggle="collapse" data-target="#demo7" style="cursor: pointer;">
              + REQUISITOS PARA REGISTRAR: PROGRAMAS DE ORDENADOR O SOFTWARE, BASE DE DATOS
            </h4>
            <div id="demo7" class="collapse">
              <ol>
                <li>
                  ABONAR TASA (pago previo a su solicitud): 1 jornal mínimo (Gs. 81.250).
                </li>
                <li>
                  PRESENTAR la solicitud de registro (llenada o completada en computadora), en
dos copias (podría ser un original y una fotocopia). (Puede bajarla de la página
WEB de la DINAPI o retirarla de la Unidad de Mesa de Entradas de la Dirección
General de Derecho de Autor y Derechos Conexos – el formulario es el Nº 024).
                </li>
                <li>
                  PRESENTAR en algún soporte lógico (CD, PEN DRIVE, u otro; y en forma
impresa, si existen manuales). DEPÓSITO LEGAL DE LA OBRA.
                </li>
                <li>
                  PRESENTAR una fotocopia simple de cédula de identidad.
                </li>
                <li>
                  RETIRAR y PUBLICAR edicto por tres días consecutivos en un diario de gran
circulación o especializado (nosotros le facilitamos el texto), usted selecciona el
diario donde hará la publicación.
                </li>
                <li>
                  ACERCAR a la Dirección General de Derecho de Autor y Derechos Conexos, las
publicaciones del edicto de los tres días consecutivos, sin recortarlas, de tal manera
a que se aprecie las fechas de publicación y en qué diario fueron hechas,
acompañada de la orden de publicación original o fotocopia de la misma, y
RETIRAR en ese momento, la contraseña para reclamar el Título de Concesión del
Registro, una vez trascurrido el plazo obligatorio.
                </li>
                <li>
                  ESPERAR treinta días hábiles (plazo obligatorio) contados luego de la última fecha
de publicación del edicto.
                </li>
                <li>
                  Una vez trascurridos los treinta días hábiles, y sin existir oposición al registro,
RETIRAR título de concesión del registro, consistente en una Resolución firmada
por el Director General de Derecho de Autor y Derechos Conexos.
                </li>
              </ol>
              <p>
                Estos trámites pueden ser realizados por el autor o su representante, a través de una simple
autorización.
              </p>
            </div>
            <div style="height: 20px;"></div>
            <hr/>



            
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
