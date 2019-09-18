
<html>
<head>
    <!-- <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css"> -->
    <meta charset="UTF-8">
</head>
<body role="document">

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
?>

<div id="showcase">
            <div class="col-md-3 disminuir-izquierdo">
            <!-------------------------- IZQUIERDO ---------------------------->
                <div class="col-md-12 articulo-normal">
                    <div class="col-md-12">
                        <a href="https://www.interfisa.com.py/new/index.php" target="blank">
                            <img src="img/banners/interfisa.jpg" class="img-responsive">
                        </a>
                    </div>

                    <div class="banner-izquierdo col-md-12 col-xs-6">
                        <a href="https://www.facebook.com/pages/NGO-Equipos-Gastron%C3%B3micos-Comerciales/389826174447287?fref=ts" target="blank">
                            <img src="img/banners/ngo.gif" class="img-responsive  img-ajustar-grandes">
                        </a>
                    </div>
                    <div class="banner-izquierdo col-md-12 col-xs-6">
                        <a href="http://www.superseis.com.py/" target="blank">
                            <img src="img/banners/superseis.jpg" class="img-responsive img-ajustar-grandes">
                        </a>
                    </div>
                    
                    <div class="banner-izquierdo banner-noticias col-md-12">
                        <div class="titulo-banner">
                            <a href="#">TECNOLOGIA</a>
                            <hr/>
                        </div>
                        <div class="col-md-12">
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='160' ORDER BY id DESC limit 5");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                         ?>
                                    <!-- <div> -->
                                        <div class="col-sm-6 col-md-12">
                                            <div>
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                    <?php echo $textoAReemplazar; ?>
                                                    <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                                </a>
                                            </div>                        
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                        </div>     
                        <?php
                                } else {   
                        ?>
                                        <div class="col-sm-6 col-md-12">
                                            <hr class="separador-pequenio" />
                                            <div class="mas-noticias-banner">
                                                <small>
                                                    <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                                </small>
                                            </div>
                                        </div>
                                    <!-- </div> -->
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                        </div>
                    </div>

                    <div class="banner-izquierdo banner-noticias col-md-12">
                        <div class="titulo-banner">
                            <a href="#">EMPRENDEDORES</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='210' ORDER BY id DESC limit 5");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div>
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                            <?php echo $textoAReemplazar; ?>
                                            <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                        </a>
                                    </div>                        
                                    <div class="titulo-noticia-banner">
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                    </div>
                                    <!-- <div class="cuerpo-noticia-banner">
                                        <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                    </div>  -->      
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                    </div>






                </div>
            </div>

            <!-------------------------- CENTRO ---------------------------->
            <div class="col-md-6 disminuir-centro">
                <div class="articulo-normal articulo-noticia col-md-12">
                        <div class="titulo-banner">
                            <a href="#">ECONOM&Iacute;A Y FINANZAS</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria = '111' OR categoria = '112'
                                OR categoria = '113' OR categoria = '114' OR categoria = '115' OR categoria = '116'
                                OR categoria = '117' OR categoria = '118' ORDER BY id DESC LIMIT 4 ");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div class="col-md-12 contenedor-primera-noticia-centro">
                                        <div class="col-sm-6">
                                            <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                <?php echo $textoAReemplazar; ?>
                                                <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                            <!-- <div class="cuerpo-noticia-banner">
                                            <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                        </div>  --> 
                                        </div> 
                                    </div>        
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                </div>

                <div class="col-md-12 banner-centro">
                    <a href="#"><img src="img/banners/regional.gif" class="img-responsive"></a>                    
                </div>

                <div class="articulo-normal articulo-noticia col-md-12">
                        <div class="titulo-banner">
                            <a href="#">TUS FINANZAS</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='130' ORDER BY id DESC limit 4");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div class="col-md-12 contenedor-primera-noticia-centro">
                                        <div class="col-md-6">
                                            <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                <?php echo $textoAReemplazar; ?>
                                                <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                            <!-- <div class="cuerpo-noticia-banner">
                                            <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                        </div>  --> 
                                        </div> 
                                    </div>        
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                </div>

                <div class="articulo-normal articulo-noticia col-md-12">
                        <div class="titulo-banner">
                            <a href="#">ECONOM&Iacute;A INTERNACIONAL</a>
                            <hr/>
                        </div>
                        
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='150' OR categoria='151' OR categoria='152' OR categoria='153' ORDER BY id DESC limit 4");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div class="col-md-12 contenedor-primera-noticia-centro">
                                        <div class="col-md-6">
                                            <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                <?php echo $textoAReemplazar; ?>
                                                <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                            <!-- <div class="cuerpo-noticia-banner">
                                            <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                        </div>  --> 
                                        </div> 
                                    </div>        
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                </div>

                <div class="articulo-normal articulo-noticia col-md-12">
                        <div class="titulo-banner">
                            <a href="#">EMPRESAS</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria = '140' OR categoria = '142'
                            OR categoria = '143' OR categoria = '144' OR categoria = '145' ORDER BY id DESC LIMIT 4");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div class="col-md-12 contenedor-primera-noticia-centro">
                                        <div class="col-md-6">
                                            <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                <?php echo $textoAReemplazar; ?>
                                                <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                            <!-- <div class="cuerpo-noticia-banner">
                                            <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                        </div>  --> 
                                        </div> 
                                    </div>        
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                </div>

                <div class="articulo-normal articulo-noticia col-md-12">
                        <div class="titulo-banner">
                            <a href="#">ESTADO</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='190' ORDER BY id DESC limit 4");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div class="col-md-12 contenedor-primera-noticia-centro">
                                        <div class="col-md-6">
                                            <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                <?php echo $textoAReemplazar; ?>
                                                <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                            <!-- <div class="cuerpo-noticia-banner">
                                            <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                        </div>  --> 
                                        </div> 
                                    </div>        
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                </div>

                <div class="articulo-normal articulo-noticia col-md-12">
                        <div class="titulo-banner">
                            <a href="#">NOTICIAS DE INTER&Eacute;S</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='200' ORDER BY id DESC limit 4");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div class="col-md-12 contenedor-primera-noticia-centro">
                                        <div class="col-md-6">
                                            <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                                <?php echo $textoAReemplazar; ?>
                                                <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="titulo-noticia-banner">
                                                <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                            </div>
                                            <!-- <div class="cuerpo-noticia-banner">
                                            <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                        </div>  --> 
                                        </div> 
                                    </div>        
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                </div>
            </div>

            <!-------------------------- DERECHA ---------------------------->
            <div class="col-md-3 izquierdo">
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                       <div class="col-md-12">
                            <a href="http://www.stock.com.py/" target="blank">
                                <img src="img/banners/stock.jpg" class="img-responsive">
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/MatirisPY?fref=ts" target="blank">
                                <img src="img/banners/iris.gif" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="http://www.yoayu.coop.py/" target="blank">
                                <img src="img/banners/yoayu.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/bancoitapua.saeca?fref=ts" target="blank">
                                <img src="img/banners/itapua.gif" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
            
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/pages/Parafood-International-SA/534855163315745?fref=ts" target="blank">
                                <img src="img/banners/parafood.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="http://www.upload.com.py/" target="blank">
                                <img src="img/banners/upload.gif" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/pages/Hijas-de-Feliciana-de-Fari%C3%B1a/157163954310681?fref=ts" target="blank">
                                <img src="img/banners/feliciana.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="http://www.proel.com.py/" target="blank">
                                <img src="img/banners/proel.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="http://www.uip.org.py/" target="blank">
                                <img src="img/banners/uip.gif" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/salemmasupermercados" target="blank">
                                <img src="img/banners/salemma.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/#/nuestrocafe.py?ref=ts&fref=ts" target="blank">
                                <img src="img/banners/cafe.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="https://www.facebook.com/laquintapy?fref=ts" target="blank">
                                <img src="img/banners/laquinta.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="http://www.fronteracde.com/" target="blank">
                                <img src="img/banners/fronteracde.jpg" class="img-responsive">
                            </a>
                        </div>
                        </div>
                </div>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal">
                        <div class="banner-derecho col-md-12">
                            <a href="http://www.paulaautomotores.com.py/v1/" target="blank">
                                <img src="img/banners/paula.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-7 articulo-normal">asdfasdf8</div>
            <div class="col-md-3 articulo-normal">asdfasdf8</div> -->
    </div>     

    <!-------------------------- ABAJO ---------------------------->
    <div id="abajo" class="col-md-12 col-xs-12">
    

                    <div class="banner-abajo banner-noticias col-md-3">
                        <div class="titulo-banner">
                            <a href="#">MERCADO BURSATIL</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='111' ORDER BY id DESC limit 5");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div>
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                            <?php echo $textoAReemplazar; ?>
                                            <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                        </a>
                                    </div>                        
                                    <div class="titulo-noticia-banner">
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                    </div>
                                    <!-- <div class="cuerpo-noticia-banner">
                                        <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                    </div>  -->      
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                    </div>

                    <div class="banner-abajo banner-noticias col-md-3">
                        <div class="titulo-banner">
                            <a href="#">ECONOM&Iacute;A GLOBAL</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='114' ORDER BY id DESC limit 5");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div>
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                            <?php echo $textoAReemplazar; ?>
                                            <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                        </a>
                                    </div>                        
                                    <div class="titulo-noticia-banner">
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                    </div>
                                    <!-- <div class="cuerpo-noticia-banner">
                                        <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                    </div>  -->       
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                    </div>

                    <div class="banner-abajo banner-noticias col-md-3">
                        <div class="titulo-banner">
                            <a href="#">INDUSTRIAS</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='141' ORDER BY id DESC limit 5");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div>
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                            <?php echo $textoAReemplazar; ?>
                                            <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                        </a>
                                    </div>                        
                                    <div class="titulo-noticia-banner">
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                    </div>
                                    <!-- <div class="cuerpo-noticia-banner">
                                        <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                    </div>  -->      
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                    </div>

                    <div class="banner-abajo banner-noticias col-md-3">
                        <div class="titulo-banner">
                            <a href="#">MACROECONOM&Iacute;A</a>
                            <hr/>
                        </div>
                        <?php
                            //aqui se consulta por las ultimas noticias de Tecnologia
                            $mysqli->real_query("SELECT * FROM noticia WHERE categoria='118' ORDER BY id DESC limit 5");
                            $resultado = $mysqli->use_result();
                            $cont = 1;
                            while ($fila = $resultado->fetch_assoc()) {
                                $codigo = $fila['codigo'];
                                $titulo = $fila['titulo'];
                                if ($cont == 1){
                                    $cuerpo = $fila['cuerpo'];
                                    //eliminar imagen
                                    $inicioReemplazar = strstr($cuerpo, '<img');
                                    $finReemplazar = $finCortar = strpos($inicioReemplazar, '>');
                                    $textoAReemplazar = substr ($inicioReemplazar, 0, $finReemplazar+1);
                                    $stringAMostrar = str_replace($textoAReemplazar, "", $cuerpo);
                        ?>
                                    <div>
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>">
                                            <?php echo $textoAReemplazar; ?>
                                            <!-- <img src="img/banners/img-noticia-izquierdo.jpg" class="img-responsive"> -->
                                        </a>
                                    </div>                        
                                    <div class="titulo-noticia-banner">
                                        <a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?></a>
                                    </div>
                                    <!-- <div class="cuerpo-noticia-banner">
                                        <a href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>"><?php //echo substr($stringAMostrar, 0, 120); ?>  </a><a class="leer-mas" href="<?php //echo "pagina-general.php?codigo=".$codigo; ?>">Leer m&aacute;s</a>
                                    </div>  -->      
                        <?php
                                } else {   
                        ?>
                                    <hr class="separador-pequenio" />
                                    <div class="mas-noticias-banner">
                                        <small>
                                            <li><a href="<?php echo "pagina-general.php?codigo=".$codigo; ?>"><?php echo $titulo; ?> </a></li>
                                        </small>
                                    </div>
                        <?php
                                } 
                                $cont++;
                            }
                            //$mysqli->close();
                        ?>
                    </div>

</div> 
<?php
    $mysqli->close();
?>

</body>
</html>
