<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/icono.png">
<?php
    include 'conexion.php';
    $codigo = $_GET['codigo'];
    $result=mysql_query("SELECT * FROM noticia WHERE codigo='". $codigo ."'", $conexion);
    $resultado=mysql_query("SELECT * FROM noticia WHERE codigo='". $codigo ."'", $conexion);
    while($rowx=mysql_fetch_row($resultado)){
        //cortar imagen del cuerpo de la noticia
        $cuerpo=$rowx[3];
        $titulo=$rowx[2];
        $codigoNoticia=$rowx[1];

        $inicioCortar = strstr($cuerpo, '<img');//trae la poscicion desde donde cortar
        $finCortar = strpos($inicioCortar, '/>');//trae la poscicion hasta donde se debe cortar
        $imagen = substr ($inicioCortar, 0, $finCortar); //Codigo cortado, imagen final
        
        $cuerpoTextoInicio = strstr($cuerpo, '143;">');  
        $cuerpoTextoFin = strpos($inicioCortar, '</span>'-7);
        $cuerpoTexto = substr ($cuerpoTextoInicio, 6, 200);
        /*$cuerpoFace = substr($cuerpoTexto, 0, 150)*/
    }
?>

    <meta property="og:title" content="<?php echo $titulo?>" />
    <!-- <meta property="og:description" content="<?php //echo $cuerpoTexto.'...'; ?>" /> -->
    <meta property="og:image" content="http://economiavirtual.com.py/web/img/noticias/<?php echo $codigoNoticia; ?>.jpg" />
    <!-- <meta property="og:image" content="http://economiavirtual.com.py/web/img/noticias/<?php echo $codigoNoticia; ?>.jpg" />
 -->
    <title><?php echo $titulo?></title>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    <!-- SOCIAL 
    <link rel="stylesheet" href="social/docs/docs.css?v=v1.0.3">-->
    <!-- Social Share Kit CSS
    <link rel="stylesheet" href="social/dist/css/social-share-kit.css?v=v1.0.3"> -->

</head>
<body role="document">

<!-- FACEBOOK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="contenedor" role="main">

    <div class="row text-center">
        <img src="img/logo.png" class="logo"/>
    </div>
    <!-------------------------- MENU ---------------------------->
    <?php 
        include 'menux.php';
    ?>
    
    <!-------------------------- SHOWCASE ---------------------------->
    <div id="noticiaExtendida" class="col-md-8">
        <h4 class="breadcrumbJB">
            > Noticia
        </h4>
        <?php 
            while($row=mysql_fetch_row($result)){
                $categoria=$row[5];
        ?>
                <h2 class="tituloNoticia">
                    <?php 
                        echo $row[2];
                    ?>
                </h2>
                <div class="fechaNoticia">
                    <small>
                    <?php
                        $fechaHora = $row[7];
                        $fechaHora = date("d-m-Y", strtotime($fechaHora));
                        if($fechaHora!="30-11--0001"){
                            echo "Publicado en fecha ".$fechaHora;
                        }
                    ?>
                    </small>
                </div>  

                <!-- Wasap -->

                <span> 
                    <a href="whatsapp://send" data-text="Economía Virtual - <?php echo $titulo; ?>" data-href="" class="wa_btn wa_btn_s" style="display:none">Compartir</a>
                </span>

                <!-- twittear -->
                <!-- <a href="https://twitter.com/share" class="twitter-share-button twitter" data-via="economiaVPy" data-related="economiaVPy">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                 -->

                <!-- Facebook -->
                <!-- <div class="fb-like botones-facebook meGusta" data-href="http://economiavirtual.com.py/web/pagina-general.php?codigo=<?php echo $codigoNoticia; ?>" data-layout="standard" data-action="like" data-show-faces="true" data-share="true">
                </div> -->
                <div class="facebook">
                    <div class="fb-like" data-href="http://economiavirtual.com.py/web/pagina-general.php?codigo=<?php echo $codigoNoticia; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                </div>

                
                
                <!-- MAIL -->
                <span id="share-buttons" class="alinear-derecha pull-right">
                    <?php include('social/docs/index.php');?>
                    
                    <a href="email.php?titulo='<?php echo $titulo; ?>'&codigoNoticia=<?php echo $codigoNoticia; ?>" target="_blank">
                        <img src="http://www.simplesharebuttons.com/images/somacro/email.png" alt="Email" />
                    </a>
                </span>
                                
                <div class="extender-imagen">
                    <?php 
                        echo $row[3];
                    ?>
                    <?php 
                        if($categoria == 160){
                    ?>
                        <div class="banner-abajo-interior">
                            <a href="https://www.facebook.com/pages/NGO-Equipos-Gastron%C3%B3micos-Comerciales/389826174447287?fref=ts" target="blank">
                                <img src="img/banners/tecnologia-ngo<?php echo rand(1,3); ?>.jpg" class="img-responsive">
                            </a>
                        </div>
                    <?php
                        }
                    ?>
                </div>
        <?php
            break; //se corta para que solo traiga una noticia
            }
        ?>
    </div>

    <div class="col-md-4 tarjetaDestacados">
        <?php 
            if($categoria == 160){
        ?>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal espaciar-abajo">
                        <div class="col-md-12 espaciar-abajo">
                            <a href="https://www.facebook.com/pages/NGO-Equipos-Gastron%C3%B3micos-Comerciales/389826174447287?fref=ts" target="blank">
                                <img src="img/banners/tecnologia-ngo.jpg" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            } else if($categoria == 113){
         ?>
                <div class="col-md-12 disminuir-derecho col-xs-6 disminuir-banner">
                    <div class="col-md-12 articulo-normal espaciar-abajo">
                        <div class="col-md-12 espaciar-abajo">
                            <a href="https://www.regional.com.py/personas" target="blank">
                                <img src="img/banners/regional-interior.gif" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            }
            include 'tarjetaDestacados.php';
        ?>
    </div>

    <!-------------------------- FOOTER ---------------------------->




</div><!-- Contenedor principal -->

<br/><br/><br/><br/>

<?php
    mysql_close($conexion);
?>

<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="wasap/dist/whatsapp-button.js";h.appendChild(s);}</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59070925-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

