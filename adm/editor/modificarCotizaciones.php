<?php
    //include('../control.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/icono.png">
<!-- JB -->
    <script src="bootstrap/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/estilo.css"> 

<!-- /JB -->  
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="adm/editor/src/wysiwyg.js"></script>
<script type="text/javascript" src="adm/editor/src/wysiwyg-editor.js"></script>
<!-- github.io delivers wrong content-type - but you may want to include FontAwesome in 'wysiwyg-editor.css' -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="adm/editor/src/wysiwyg-editor.css" />

</head>
<body>

<?php



        $servername = "localhost";
        $username = "economiaubd";
        $password = "!$1nfo.3conomiA!";
        $dbname = "economia";

        // Create connection
        //$conn = new mysqli($servername, $username, $password, $dbname);
        //para consultar
        $mysqli = new mysqli($servername, $username, $password, $dbname);

        $conn = mysql_connect($servername, $username, $password);
        if(!$conn)
        {
          die('Error en la coneccion con la base de datos: ' . mysql_error());
        }
        mysql_select_db($dbname);

 $modificarSuccess = "vacio";
if (!empty($_POST)){
    if(!empty($_POST['codigo'])){ //para hacer update de noticia

        $codigo = $_POST['codigo'];
        $dolarCompra = $_POST['dolarCompra'];
        $dolarVenta = $_POST['dolarVenta'];
        $euroCompra = $_POST['euroCompra'];
        $euroVenta = $_POST['euroVenta'];
        $realCompra = $_POST['realCompra'];
        $realVenta = $_POST['realVenta'];
        $pesoCompra = $_POST['pesoCompra'];
        $pesoVenta = $_POST['pesoVenta'];
        

        $sql = "UPDATE cotizaciones set 
            dolarCompra='".$dolarCompra."', 
            dolarVenta='".$dolarVenta."', 
            euroCompra='".$euroCompra."', 
            euroVenta='".$euroVenta."', 
            realCompra='".$realCompra."', 
            realVenta='".$realVenta."', 
            pesoCompra='".$pesoCompra."', 
            pesoVenta='".$pesoVenta."'
        WHERE codigo = 1";

  
        //$sql = "UPDATE noticia set titulo='".$titulo."', idCategoria=".$idCategoria.", destacado='".$destacado."' WHERE codigo = ".$codigo;
        //$sql = "UPDATE noticia set titulo='Catastros y BNF buscan agilizar expedici&oacute;n de certificados catastrales' WHERE codigo = 1563";

        
        /*$modificarSuccess = "vacio";
        if ($conn->query($sql) === TRUE) {
            $modificarSuccess = "si";
        } else {
            $modificarSuccess = "no";
        }*/

        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
          die('Could not update data: ' . mysql_error());
        }
        $modificarSuccess = "si";

    } //elseif (!empty($_POST['codigoModificar'])){ //para hacer select de noticia a modificar
    /*if(!empty($_POST['codigo'])){ 
        $codigo = $_POST['codigo'];
    } else {
        $codigo = $_POST['codigoModificar'];    
    }*/
    
}
//Parametros Recibidos
    
    //aqui se consulta por el ultimo codigo en bd y se le suma uno para guardar el codigo de noticia
    $mysqli->real_query("SELECT * FROM cotizaciones WHERE codigo = 1");
    $resultado = $mysqli->use_result();
    while ($fila = $resultado->fetch_assoc()) {
        $codigo = $fila['codigo'];
        $dolarCompra = $fila['dolarCompra'];
        $dolarVenta = $fila['dolarVenta'];
        $euroCompra = $fila['euroCompra'];
        $euroVenta = $fila['euroVenta'];
        $realCompra = $fila['realCompra'];
        $realVenta = $fila['realVenta'];
        $pesoCompra = $fila['pesoCompra'];
        $pesoVenta = $fila['pesoVenta'];
        
    }

?>

<div class="container theme-showcase" role="main">

    <center>
        <div class="row text-center">
            <img src="../../../img/logo.png" class="logo" height="70" width="auto"/>
        </div>
    </center>
    <!-------------------------- MENU ---------------------------->
    <?php 
        //include '../menu.php';
    ?>
    <!-------------------------- CREAR ARTICULO ---------------------------->
<div class="col-md-12 cuerpoNoticias">

    <form action="" method="post">
        <?php
            //MENSAJE SI SE CREO O NO UNA NOTICIA NUEVA
            if(!empty($_POST)){//if donde se pregunta si hay request post
                if($modificarSuccess == "si" || $modificarSuccess == "no"){
                    if($modificarSuccess == "si"){
        ?>
                        <div class="alert alert-success col-md-12" role="alert">
                          <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                          ¡Excelente! La Noticia se modific&oacute; con &eacute;xito.
                        </div>
        <?php
                    }else {
        ?>
                        <div class="alert alert-danger col-md-12" role="alert">
                          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                          <span class="sr-only">Error:</span>
                          Ocurri&oacute; un Error al intentar modificar la noticia.
                        </div>
        <?php
                    }
                }
            }//if donde se pregunta si hay request post
        ?>
        <div class="col-md-12 titulo-adm">
            <center><h2>Modificar Cotizaciones</h2> </center>
        </div>
        

        
        <center>
            <div class="col-md-6">
                <table>
                    <tr>
                        <td>Moneda</td>
                        <td>Compra</td>
                        <td>Venta</td>
                    </tr>
                    <tr>
                        <td>
                            Dolar
                        </td>
                        <td>
                            <input type="text" name="dolarCompra" class="form-control input-lg text-center"
                                    value="<?php echo $dolarCompra ?>" />
                        </td>
                        <td>
                            <input type="text" name="dolarVenta" class="form-control input-lg text-center"
                                    value="<?php echo $dolarVenta ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Euro
                        </td>
                        <td>
                            <input type="text" name="euroCompra" class="form-control input-lg text-center"
                                    value="<?php echo $euroCompra ?>" />
                        </td>
                        <td>
                            <input type="text" name="euroVenta" class="form-control input-lg text-center"
                                    value="<?php echo $euroVenta ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Real
                        </td>
                        <td>
                            <input type="text" name="realCompra" class="form-control input-lg text-center"
                                    value="<?php echo $realCompra ?>" />
                        </td>
                        <td>
                            <input type="text" name="realVenta" class="form-control input-lg text-center"
                                    value="<?php echo $realVenta ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Peso
                        </td>
                        <td>
                            <input type="text" name="pesoCompra" class="form-control input-lg text-center"
                                    value="<?php echo $pesoCompra ?>" />
                        </td>
                        <td>
                            <input type="text" name="pesoVenta" class="form-control input-lg text-center"
                                    value="<?php echo $pesoVenta ?>" />
                        </td>
                    </tr>
                    
                </table>
            </div>
        </center>

        <?php
            //FECHA HORA DE NOTICIA
            $date = date('Y-m-d H:i:s');
        ?>
        <input type="hidden" value="<?php echo $date; ?>" name="fechaHora"/>
        <input type="hidden" value="1" name="codigo"/>

        <br><br>
        <div class="col-md-12 contenido-centrado">
                    <input type="submit" class="btn btn-primary col-offset-6" value="Modificar Noticia"/>
        </div>

    <form>
    <br/>
    <br/>
    <br/>
    <div class="alinear-derecha col-md-12">
        <!-- <a href="../logout.php">
            <button type="button" class="btn btn-success align-right" aria-expanded="false">
                Salir del Administrador
            </button>
        </a> -->
    </div>


</div> <!-- Formulario de nueva noticia -->



</div><!-- Container General -->
<?php
     $mysqli->close();
?>
</body>
</html>
