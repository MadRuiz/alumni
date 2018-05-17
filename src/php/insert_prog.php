<?php
include '../../production/conexion.php';
  $prog_nombre = $_GET['prog_nombre'];
  $prog_spon = $_GET['prog_spon'];
  $prog_descripcion = $_GET['prog_descripcion'];
  $prog_perfil = $_GET['prog_perfil'];
  $insert_prog = "INSERT INTO `programas` (
                  `id_prog`,
                  `nombre_prog`, 
                  `sponsor_prog`, 
                  `descripcion_prog`, 
                  `perfilAplicante_prog`
                  ) VALUES (
                  NULL, 
                  '".$prog_nombre."', 
                  '".$prog_spon."', 
                  '".$prog_descripcion."', 
                  '".$prog_perfil."'
                  );
                 ";
                if(mysqli_query($conexion, $insert_prog)){
                  header('Location: ../../admin/admin_estudios.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_prog. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
