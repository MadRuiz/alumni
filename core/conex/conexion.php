<?php
$enlace = mysqli_connect('localhost', 'root', '', 'alumni_g9');
if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} //else {echo 'Conexion establecida. </br>';}
//mysqli_set_charset($conexion, "UTF-8");
