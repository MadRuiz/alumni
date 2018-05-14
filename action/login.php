<?php
	session_start();

	if (isset($_POST['token']) && $_POST['token']!=='') {
			
	//Contiene las variables de configuracion para conectar a la base de datos
	include "../production/conexion.php";

	$email=mysqli_real_escape_string($conexion,(strip_tags($_POST["email"],ENT_QUOTES)));
	$password=sha1(md5(mysqli_real_escape_string($conexion,(strip_tags($_POST["password"],ENT_QUOTES)))));

    $query = mysqli_query($conexion,"SELECT * FROM user WHERE email =\"$email\" OR username=\"$email\" AND password = \"$password\";");

		if ($row = mysqli_fetch_array($query)) {
			

				$_SESSION['user_id'] = $row['id'];
				header("location: ../admin/admin_estudios.php");
				

		}else{
			$invalid=sha1(md5("contrasena y email invalido"));
			header("location: iniciar_sesion.php?invalid=$invalid");
		}
	}else{
		header("location: ../production/perfil.php");
	}

?>