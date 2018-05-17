<?php 
include '../production/conexion.php';
    //count para id instituciones
    $selectNumIns = "SELECT COUNT(*) from estudio";
    $rselectNumIns = mysqli_query($conexion, $selectNumIns);
    $nIns = mysqli_fetch_array($rselectNumIns);

    //numero de programas
    $selectNumProg = "SELECT COUNT(*) from programas";
    $rselectNumProg = mysqli_query($conexion, $selectNumProg);
    $nProg = mysqli_fetch_array($rselectNumProg);

    //select numero de estudios
    $selectNumEst = "SELECT COUNT(*) from estudio";
    $rselectNumEst = mysqli_query($conexion, $selectNumEst);
    $nEst = mysqli_fetch_array($rselectNumEst); 

    //select para numero de doctorados
    $select2 = "SELECT COUNT(*) from estudio where categ_est = 4 ";
    $rselect2 = mysqli_query($conexion, $select2);
    $nDoc = mysqli_fetch_array($rselect2);

    //select para numero de maestrias
    $select3 = "SELECT COUNT(*) from estudio where categ_est = 3 ";
    $rselect3 = mysqli_query($conexion, $select3);
    $nMaes = mysqli_fetch_array($rselect3);

    //select para numero de postgrados
    $select4 = "SELECT COUNT(*) from estudio where categ_est = 2 ";
    $rselect4 = mysqli_query($conexion, $select4);
    $nPosg = mysqli_fetch_array($rselect4);

    //select para numero de diplomados
    $select5 = "SELECT COUNT(*) from estudio where categ_est = 1 ";
    $rselect5 = mysqli_query($conexion, $select5);
    $nDip = mysqli_fetch_array($rselect5);

    //datos de programas
    $selectPro = "SELECT * FROM programas";
    $rselectPro = mysqli_query($conexion, $selectPro);

    //datos de categorias
    $selectCateg = "SELECT * FROM categorias";
    $rselectCateg = mysqli_query($conexion, $selectCateg);

    //datos de rubros
    $selectRub = "SELECT * FROM rubros";
    $rselectRub = mysqli_query($conexion, $selectRub);

    //datos de modalidades
    $selectMod = "SELECT * FROM modalidades";
    $rselectMod = mysqli_query($conexion, $selectMod);

    //datos de sponsor
    $selectSpon = "SELECT * FROM sponsor";
    $rselectSpon = mysqli_query($conexion, $selectSpon);

    //datos de instituciones
    $selectIns = "SELECT * FROM institucion";
    $rselectIns = mysqli_query($conexion, $selectIns);


 ?>                      
