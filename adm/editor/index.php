<html>
<head>
    <meta charset="UTF-8">
    <title>Econom&iacute;a Virtual</title>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
</head>
<body role="document">


<div class="container theme-showcase" role="main">

    <div class="row text-center">
        <img src="img/logo.png" class="logo" height="70" width="auto"/>
    </div>
    <!-------------------------- MENU ---------------------------->
    <?php 
        include 'menu.php';
    ?>
    <div class="banner-showcase col-md-12">
        <img src="img/banners/sudameris.gif" class="img-responsive img-ajustar-largos">
    </div>
    
    <!-------------------------- SHOWCASE ---------------------------->
    <div id="carousel-example-generic" class="carousel slide col-md-6 sliderDestacados" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> 
        <div class="carousel-inner" role="listbox">
            <?php
                                        /*$servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "economia";*/
                                        $servername = "localhost";
                                        $username = "economiaubd";
                                        $password = "!$1nfo.3conomiA!";
                                        $dbname = "economia";

                                        //para consultar
                                        $mysqli = new mysqli($servername, $username, $password, $dbname);

                                        //aqui se consulta por las ultimas noticias de Tecnologia
                                        $mysqli->real_query("SELECT * FROM noticia WHERE destacado='on' ORDER BY codigo DESC limit 3");
                                        $resultado = $mysqli->use_result();
                                        $cont = 0;
                                        while ($fila = $resultado->fetch_assoc()) {
                                            $cont++;
                                            $codigo = $fila['codigo'];
                                            $titulo = $fila['titulo'];
                                            $cuerpo = $fila['cuerpo'];
                                            //eliminar imagen
                                            $inicioReemplazar = strstr($cuerpo, '<img');
                                            $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                            $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                            if($cont==1){
            ?>
                <div class="item active">
             <?php
                }else{
             ?>
                <div class="item">
             <?php
                }
             ?>
                <?php echo $textoAReemplazar; ?>
                    <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                        <div class="carousel-caption slider-titulo-item">
                            <h4 class="tituloSlider"><?php echo $titulo; ?></h4>
                        </div>
                    </a>
                </div>
            <?php
                }
            ?>
            <!-- <div class="item">
                <img src="img/slider2.jpg"/>
                <div class="carousel-caption">
                    <h4 class="tituloSlider">Petropar extiende su presencia en Central con más estaciones</h4>
                </div> 
            </div>
            <div class="item">
                <img src="img/slider3.jpg"/>
                <div class="carousel-caption">
                    <h4 class="tituloSlider">BCP ratifica que el crecimiento económico será del 4,5%</h4>
                </div>
            </div> -->
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="col-md-6 tarjetaDestacados">
        <?php 
            include 'tarjetaDestacados.php';
        ?>
    </div>


    <!-------------------------- ARTICULOS ---------------------------->
    <div class="col-md-12 cuerpoNoticias">
        <?php 
        include 'cuerpoNoticias.php';
        ?>
    </div>
    

    <!-------------------------- SHOWCASE INFERIOR ---------------------------->



    <!-------------------------- FOOTER ---------------------------->




</div><!-- Contenedor principal -->

<br/><br/><br/><br/>

<?php
    /*include 'conexion.php';
    $result=mysql_query("SELECT * FROM noticia ORDER BY titulo", $conexion);
    echo"<table width=300>
    <tr>
    <td><b>Titulo</b></td><td><b>Cuerpo</b></td><td><b>Imagen</b></td>
    </tr>";
    while($row=mysql_fetch_row($result)){
      echo"<tr>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]
          
        </td>
        </tr>";
    }
    echo"</table>";
    mysql_close($conexion);*/
?>
<!-- <a href="actualizar.php?id=$row[0]">Actualizar</a></td> -->

</body>
</html>

