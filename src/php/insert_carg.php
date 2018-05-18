<?php
include '../../production/conexion.php';
  $carg_nombre = $_GET['carg_nombre'];
  $insert_carg = "INSERT INTO `cargos` (
                  `id_carg`,
                  `nombre_carg` 
                  ) VALUES (
                  NULL, 
                  '".$carg_nombre."'
                  );
                 ";
                if(mysqli_query($conexion, $insert_carg)){
                  header('Location: ../../admin/admin_bolsa.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_carg. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
