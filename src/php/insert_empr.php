<?php
include '../../production/conexion.php';
  $empr_nombre = $_GET['empr_nombre'];
  $insert_empr = "INSERT INTO `empresas` (
                  `id_empresa`,
                  `nombre_empresa` 
                  ) VALUES (
                  NULL, 
                  '".$empr_nombre."'
                  );
                 ";
                if(mysqli_query($conexion, $insert_empr)){
                  header('Location: ../../admin/admin_bolsa.php');
                 } else{
                  echo "ERROR: Could not able to execute $insert_empr. " . mysqli_error($conexion);
                }



mysqli_close($conexion);
?>
