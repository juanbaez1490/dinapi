<?php
	include('config.php');
	session_start();
	$user_check=$_SESSION['login_user'];

	/*$ses_sql=mysqli_query($db,"select usuario from usuario where usuario='".$user_check."'");

	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);*/

	$sql="SELECT usuario FROM usuario WHERE usuario='$user_check'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$active=$row['active'];
        $count=mysqli_num_rows($result);

	if(!$count==1){
		//echo "no encontro nada en el control";
		header("Location: ../index.php");
	}
?>