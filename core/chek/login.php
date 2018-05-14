<?php
include '../conex/conexion.php';

$loginNombre   = $_POST["email"];
$loginPassword = sha1($_POST["pass"]);

$consulta  = "SELECT * FROM usuario WHERE nick_user ='$loginNombre' AND pass_user = '$loginPassword'";
$resultado = mysqli_query($enlace, $consulta);
$row       = mysqli_fetch_row($resultado);
$codusu    = $row[5];
$userok    = $row[1];
$passok    = $row[2];

if ($loginNombre == $userok && $loginPassword == $passok) {
    $query_per  = mysqli_query($enlace, "SELECT * FROM perfil WHERE id_perfil ='$codusu'");
    $array_per  = mysqli_fetch_row($query_per);
    $nom_per    = $array_per[1];
    $genero_per = $array_per[3];
    $cod_per    = $array_per[0];

    if ($genero_per == 'F') {
        $saludo = 'Bienvenida';
    } elseif ($genero_per == 'M') {
        $saludo = 'Bienvenido';
    }

    session_start();
    $_SESSION["logueado"] = true;
    $_SESSION["nom_per"]  = $nom_per;
    $_SESSION["saludo"]   = $saludo;
    $_SESSION["cod_per"]  = $cod_per;
    header("Location: ../../production/index.php");
} else {
    //echo mysqli_error($enlace);
    Header("Location: ../../index.php");
}
