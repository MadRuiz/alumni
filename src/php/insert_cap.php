<?php
include '../../production/conexion.php';
  $cap_nombre = $_GET['cap_nombre'];
  $cap_sponsor = $_GET['cap_sponsor'];
  $cap_lugar = $_GET['cap_lugar'];
  $cap_horario = $_GET['cap_horario'];
  $cap_duracion = $_GET['cap_duracion'];
  $cap_descripcion = $_GET['cap_descripcion'];
  $insert_cap = "INSERT INTO `capacitaciones` (
                  `id_cap`, 
                  `nombre_cap`, 
                  `sponsor_cap`, 
                  `lugar_cap`, 
                  `horario_cap`, 
                  `duracion_cap`, 
                  `descripcion_cap`
                  ) VALUES (
                  NULL, 
                  '".$cap_nombre."', 
                  '".$cap_sponsor."', 
                  '".$cap_lugar."', 
                  '".$cap_horario."', 
                  '".$cap_duracion."', 
                  '".$cap_descripcion."'
                 );
                 ";
                if(mysqli_query($conexion, $insert_cap)){
                  header('Location: ../../admin/admin_emprender.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_cap. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
