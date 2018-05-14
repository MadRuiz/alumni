<?php
function NamePerfil($enlace, $code_per)
{
    $consulta = "SELECT * FROM perfil where id_perfil = $code_per";
    if ($resultado = mysqli_query($enlace, $consulta)) {
        $fila = mysqli_fetch_row($resultado);
        echo $fila[1] . " " . $fila[2];
    }
}

function MiFoto($enlace, $cod_per)
{
    /* lanzamos la consulta para traernos el nombre de la imagen, en nuestro caso
    el campo ruta_imagen se encuentra en la tabla usuarios */
    $result = mysqli_query($enlace, "SELECT foto_per FROM perfil where id_perfil = '$cod_per' ");
    while ($row = mysqli_fetch_row($result)) {
        /*almacenamos el nombre de la ruta en la variable $ruta_img*/
        //$img = $row[0];
        echo 'images/' . $row[0];
    }
}
