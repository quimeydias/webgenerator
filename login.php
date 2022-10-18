<?php

    if (isset($_GET["login"])) {
    	$usu= $_GET["email"];
    	$pass= $_GET["password"];
        $admin = "admin";
    	$con = mysqli_connect("localhost", "adm_webgenerator", "webgenerator2020", "webgenerator");
    	$queryusuario = mysqli_query($con,"SELECT * FROM usuarios WHERE email ='$usu' and password = '$pass'");
    	$nr = mysqli_num_rows($queryusuario);

    	if ($nr == 1) {
         
       		session_start();
         	$_SESSION['usuario']=$usu;
         	$_SESSION['password']=$pass;
            $_SESSION['admin']=$admin;

         	header('Location:panel.php');

    	}else{

        	echo"<script>alert('Contraseña o email incorrecto')</script>";

    	}
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
</head>
<body bgcolor="grey">
	<br>
	<br>
	
	<center><h1> Webgenerator quimey </h1>
	<form method="GET">
		<input type="email" name="email" placeholder="email"><br><br>
		<input type="password" name="password" placeholder="contraseña"><br><br>
		<input type="submit" name="login" value="Login"><br><br>
	</form>

	<a href="register.php"> Registrarse </a>

	</center>
</body>
</html>