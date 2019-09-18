<?php

    include("../config/config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // username y password enviados desde el Form
        $usuario=mysqli_real_escape_string($db,$_POST['usuario']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $password=md5($password);

        $sql="SELECT id FROM usuario WHERE usuario='$usuario' and password='$password'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$active=$row['active'];
        $count=mysqli_num_rows($result);

        // y coincide con algun registro de la bd
        if($count==1)
        {
            //session_register("usuario");
            $_SESSION['login_user']=$usuario;
            //echo "esto es un error  / usuario  - ".$usuario;
            //header('Location: http://economiavirtual.com.py/prueba/adm/editor/editor.php');
            //header('Location: editor/editor.php');
            echo "<script type='text/javascript'> document.location = 'editor/editor.php'; </script>";
            exit;
        } else {
            echo $error="Error de acceso, vuelva a ingresar sus datos.";
        }
    }
?>

<html>
<head>
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
        <img src="../img/logo.png" class="logo" height="70" width="auto"/>
    </div>
    
    <div class="col-md-12 cuerpoNoticias">

    <form action="" method="post">
        <div class="col-md-12 titulo-adm">
            <center><h2>Acceso al Sistema de Gesti&oacute;n</h2></center>
        </div>
        <center>
            <div class="col-md-12">
                <div class="form-group col-md-4 text-center">
                    <input type="text" name="usuario" placeholder="Usuario" class="form-control input-lg text-center" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-4 text-center">
                    <input type="password" name="password" placeholder="Contrase&ntilde;a" class="form-control input-lg text-center" />
                </div>
            </div>
        </center>
        <div class="col-md-12 contenido-centrado">
                    <input type="submit" class="btn btn-primary col-offset-6" value="Ingresar"/>
        </div>
    <form>
</div>




</div><!-- Contenedor principal -->


</body>
</html>

