<?php

	/*Datos de conexion a la base de datos*/
	

	include '../production/conexion.php';
    if(!$conexion){
        @die("<h2 style='text-align:center'>Imposible conectarse a la base de datos! </h2>".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        @die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>