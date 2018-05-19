<?php 
include '../production/conexion.php';
 //select para numero de noticias
    $select2 = "SELECT COUNT(*) from noticias where cat_noti = 1 ";
    $rselect2 = mysqli_query($conexion, $select2);
    $count1 = mysqli_fetch_array($rselect2);

    //select para numero de eventos
    $select3 = "SELECT COUNT(*) from noticias where cat_noti = 2 ";
    $rselect3 = mysqli_query($conexion, $select3);
    $count2 = mysqli_fetch_array($rselect3);